<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

use Response;
use Flash;

use PDF;
use App\Models\sems;
use App\Models\Student;
use App\Models\Referances;
use App\Models\studentsPayments;

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
        ->where('end', '>=', today())->limit(1)->get();

        return view('studentsFinancials.index', compact('currentSem'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', studentsPayments::class);

        $data = $request->all();

        // Referance No

        $splitToday = explode("-",today());

        $splitDate = explode(" ",$splitToday[2]);

        $referances = Referances::where('created_at', '>=', today())
                                ->orderby('created_at', 'desc')->where('type', '=', 'SPR')
                                ->first();

        if (empty($referances))
            $count = 1;
        else
        {
            $splitRef = explode("-",$referances['ref']);
            $count = $splitRef[3]+1;
        }

        $ref = Referances::create([
            'type' => 'SPR',
            'ref' => 'AIS-SPR-'.intdiv($splitToday[0], 100).$splitToday[1].$splitDate[0].'-'.$count
        ]);

        $data += ['ref' => $ref['ref']];

        $student = Student::where('studentNo', '=', $data['studentNo'])->get('eName');

        $data += ['name' => $student[0]['eName']];

        $pdf = PDF::loadView('studentsFinancials.payments.studentPaymentReceipt', $data);

        $path = 'docs/students/payment_receipts/'.$data['studentNo'].'/';

        if(!File::isDirectory($path)){

            File::makeDirectory($path);;
    
        }

        $pdf->save($path.$ref['ref'].'.pdf');

        $data += ['receipt' => $path.$ref['ref'].'.pdf'];

        studentsPayments::create($data);

        Flash::success('Student '.$data['studentNo'].' '.$data['name'].' payment data was saved successfully<br><br>تم حفظ بيانات الدفعة المالية للطالب '.$request['studentNo'].' '.$request['name'].' بنجاح');

        return redirect(route('sFinancials.index'));
    }
}
