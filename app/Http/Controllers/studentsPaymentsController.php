<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

use Response;
use Flash;
use PDF;

use App\Models\sems;
use App\Models\student;
use App\Models\referances;
use App\Models\studentsPayments;
use App\Models\studentsFinancials;

class studentsPaymentsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {    
        $currentSem = sems::with('year')
        ->where('start', '<=', today())
        ->where('end', '>=', today())->first();

        return view('studentsFinancials.index', compact('currentSem'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', studentsPayments::class);

        $data = $request->all();

        // Referance No

        $splitToday = explode("-",today());

        $splitDate = explode(" ",$splitToday[2]);

        $referances = referances::where('created_at', '>=', today())
                                ->orderby('created_at', 'desc')->where('type', '=', 'SPR')
                                ->first();

        if (empty($referances))
            $count = 1;
        else
        {
            $splitRef = explode("-",$referances['ref']);
            $count = $splitRef[3]+1;
        }

        $ref = referances::create([
            'type' => 'SPR',
            'ref' => 'AIS-SPR-'.($splitToday[0] % 100).$splitToday[1].$splitDate[0].'-'.$count
        ]);

        $data += ['ref' => $ref['ref']];

        $student = student::where('studentNo', '=', $data['studentNo'])->get('eName');

        $data += ['name' => $student[0]['eName']];

        $pdf = PDF::loadView('studentsFinancials.payments.studentPaymentReceipt', $data);

        $path = 'docs/students/payment_receipts/'.$data['studentNo'].'/';

        if(!File::isDirectory($path)){
            File::makeDirectory($path);
        }

        $pdf->save($path.$ref['ref'].'.pdf');

        $data += ['receipt' => $path.$ref['ref'].'.pdf'];

        studentsPayments::create($data);

        $this->settlementCalculation($data['studentNo']);

        Flash::success('Student '.$data['studentNo'].' '.$data['name'].' payment data was saved successfully<br><br>تم حفظ بيانات الدفعة المالية للطالب '.$request['studentNo'].' '.$request['name'].' بنجاح');

        return redirect(route('sFinancials.index'));
    }

    public function update(Request $request) // Updating with Modal
    {
        $this->authorize('update', studentsPayments::class);

        $data = $request->all();

        $sPayment = studentsPayments::findOrFail($request['id']);

        if (empty($sPayment)) {
            Flash::error('The Student\' Payment\' was not found<br><br>بيانات الدفعة المالية المطلوبة غير موجودة');

            return redirect(route('sFinancials.index'));
        }

        // extract same referance no

        $referance = explode("/",$data['receipt']);

        $refPDF = explode(".",$referance[4]);

        $ref = $refPDF[0];

        $data += ['ref' => $ref];

        $path = 'docs/students/payment_receipts/'.$data['studentNo'].'/';

        $student = student::where('studentNo', '=', $data['studentNo'])->get('eName');

        $data += ['name' => $student[0]['eName']];

        $pdf = PDF::loadView('studentsFinancials.payments.studentPaymentReceipt', $data);

        $pdf->save($path.$ref.'.pdf');
    
        $sPayment->update($data);

        $this->settlementCalculation($data['studentNo']);

        Flash::success('The Student\' Payment\' was updated successfully<br><br>تم تحديث بيانات الدفعة المالية بنجاح');

        return redirect(route('sFinancials.index'));
    }

    public function settlementCalculation($studentNo)
    {
        $payments = studentsPayments::where('studentNo', $studentNo)->get();
        $fees = studentsFinancials::where('studentNo', $studentNo)->get();

        $pTotal = 0;
        $fTotal = 0;

        foreach ($payments as $payment) {
            $pTotal += $payment['amount'];
        }

        foreach ($fees as $fee) {
            $fTotal += $fee['finalAmount'];
        }

        if ($pTotal >= $fTotal) {
            student::where('studentNo', $studentNo)->first()->update(array('financial' => 1));
        }
            
    }
}
