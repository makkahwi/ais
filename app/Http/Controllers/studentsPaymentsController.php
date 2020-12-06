<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;

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

        studentsPayments::create($request->all());
        
        Flash::success('Student '+$request['schoolNo']+' payment data was saved successfully<br><br>تم حفظ بيانات الدفعة المالية للطالب '+$request['schoolNo']+' بنجاح');

        return redirect(route('sFinancials.index'));
    }
}
