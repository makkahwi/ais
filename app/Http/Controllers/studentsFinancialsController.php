<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;
use PDF;

use App\Models\users;

use App\Models\sems;
use App\Models\levels;
use App\Models\student;
use App\Models\statuses;
use App\Models\classrooms;
use App\Models\studentsPayments;
use App\Models\studentsFinancials;
use App\Models\studentsFinancialsDiscounts;
use App\Models\studentsFinancialsCategories;

class studentsFinancialsController extends AppBaseController
{
  public function __construct()
  {
    //
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', studentsFinancials::class);

    $currentSem = $this->getCurrentSem();
    
    $levels = levels::all();

    $cnSem = sems::with('year')
      ->where('end', '>=', today())
      ->get();

    $sfCategories = studentsFinancialsCategories::all();
    $sfDiscounts = studentsFinancialsDiscounts::all();

    $classrooms = classrooms::with('students.dues.category', 'students.dues.discount', 'students.payments', 'students.user')
      ->orderBy('status_id', 'desc')
      ->orderBy('level_id', 'asc')
      ->orderBy('title', 'asc')
      ->get();

    $statuses = statuses::all();

    $studentsFinancials = studentsFinancials::all();

    return view('studentsFinancials.index', compact('currentSem', 'levels', 'classrooms', 'cnSem',
                                'sfDiscounts', 'sfCategories', 'studentsFinancials', 'statuses'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(Request $request)
  {
    $this->authorize('create', studentsFinancials::class);

    $list = $request['list'];
    
    foreach($list as $y) {
        
      $category_id = $request['category_id'.$y];
      $discount_id = $request['discount_id'.$y];
      $finalAmount = $request['finalAmount'.$y];

      $studentsFinancials = studentsFinancials::create(['sem_id' => $request['sem_id'],
      'studentNo' => $request['studentNo'], 'category_id' => $category_id,
      'discount_id' => $discount_id, 'finalAmount' => $finalAmount]);

    }

    $this->settlementCalculation($request['studentNo']);

    Flash::success('All financial due(s) were saved successfully<br><br>تم حفظ كل بيانات المستحقات المالية بنجاح');

    // studentsFinancials::create($request->all());
    
    // Flash::success('The financial data was saved successfully<br><br>تم حفظ البيانات المالية بنجاح');

    return redirect(route('sFinancials.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', studentsFinancials::class);

    $sFinancial = studentsFinancials::findOrFail($request['id']);

    if (empty($sFinancial)) {
      Flash::error('The financial due data was not found<br><br>بيانات المستحق المالي غير موجودة');
      return redirect(route('sFinancials.index'));
    }

    $sFinancial->update($request->all());

    $this->settlementCalculation($sFinancial['studentNo']);

    Flash::success('The financial due data was updated successfully<br><br>تم تحديث بيانات المستحق المالي بنجاح');

    return redirect(route('sFinancials.index'));
  }

  public function sfStatement(Request $request) // Updating with Modal
  {
    $this->authorize('viewAny', studentsFinancials::class);

    $s = $request['id'];

    $student = student::where('studentNo', $s)->with('classroom.level','user.contact','user.status')->first();

    if (empty($student)) {
      Flash::error('The student data was not found<br><br>بيانات الطالب غير موجودة');
      return redirect(route('sFinancials.index'));
    }

    $sems = sems::whereHas('payments')->with('year', 'dues.category', 'dues.discount')
      ->with(['payments' => function($q) use ($s){
        $q->where('studentNo', $s);}])
      ->orWhereHas('dues')->with(['dues' => function($a) use ($s){
        $a->where('studentNo', $s);}])
      ->withCount(['payments' => function($q) use ($s){
        $q->where('studentNo', $s);}])
      ->withCount(['dues' => function($q) use ($s){
        $q->where('studentNo', $s);}])
      ->get();

    // return $sems;

    // $semesters = sems::with('dues', 'payments')->get();

    // return $semesters;

    // $semesters = sems::with('dues', 'payments')
    //     ->where('dues.studentNo', $request['id'])
    //     ->orWhere('payments.studentNo', $request['id'])
    //     ->get();

    // return $semesters;

    // foreach($studentsPayments as $p)
    //     if(!array_search($p->sem, $semesters, true))
    //         $semesters += [$p->sem];

    // foreach($studentsDues as $d)
    //     if(!array_search($d->sem, $semesters, true))
    //         $semesters += [$d->sem];

    // foreach($semesters as $semester) {
    //     $payments = [];
    //     $semester += [$payments];
    //     $dues = [];
    //     $semester += [$dues];

    //     return $semester;

    //     foreach($studentsPayments as $payment) {
    //         if($payment->sem->id == $semester->id)
    //             $semester->payments += [$payment];
    //     }
    //     foreach($studentsDues as $due) {
    //         if($due['sem'] == $semester)
    //             $semester->dues += [$due];
    //     }
    // }

    // $data = ["student" => $student, "semesters" => $semesters];
    
    $currentSem = $this->getCurrentSem();
    
    $data = ["student" => $student, "sems" => $sems, "currentSem" => $currentSem];

    $pdf = PDF::loadView('studentsFinancials.studentsFinancialStatement', $data)->setPaper('a4', 'landscape');

    return $pdf->download($request['id'].' - Student Financial Statement.pdf');
  }

  public function sfReports(Request $request) // Updating with Modal
  {
    $this->authorize('reports', studentsFinancials::class);

    $currentSem = $this->getCurrentSem();
    
    $levels = levels::with('classrooms.students.user', 'classrooms.students.dues.sem.year',
      'classrooms.students.dues.category', 'classrooms.students.dues.discount',
      'classrooms.students.payments', 'classrooms.students.payments.sem.year')
      ->get();

    $classrooms = classrooms::with('level')
      ->get();

    $sems = sems::with('year')
      ->get();

    $studentsFinancials = studentsFinancials::with('category', 'discount')
      ->get();

    $sfCategories = studentsFinancialsCategories::groupBy('title')->get('title');

    $sfDiscounts = studentsFinancialsDiscounts::all();

    return view('studentsFinancialReports.index', compact('currentSem', 'levels', 'classrooms', 'sems',
                                                  'sfCategories', 'sfDiscounts', 'studentsFinancials'));
  }

  public function settlementCalculation($studentNo)
  {
    $payments = studentsPayments::where('studentNo', $studentNo)->sum('amount');
    $fees = studentsFinancials::where('studentNo', $studentNo)->sum('finalAmount');

    if ($payments >= $fees)
    {
      student::where('studentNo', $studentNo)->first()->update(array('financial' => 1));
    }
    else
    {
      student::where('studentNo', $studentNo)->first()->update(array('financial' => 0));
    }
  }

}