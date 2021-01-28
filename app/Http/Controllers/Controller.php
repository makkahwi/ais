<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Response;
use Flash;
use PDF;

use App\Models\sems;
use App\Models\years;
use App\Models\sches;
use App\Models\levels;
use App\Models\student;
use App\Models\batches;
use App\Models\courses;
use App\Models\studentsFinancialsDiscounts;
use App\Models\studentsFinancialsCategories;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function applicantsDoc()
  {
    return view('docs.applicants');
  }

  public function studentsDoc()
  {
    return view('docs.students');
  }

  public function staffDoc()
  {
    return view('docs.staff');
  }

  public function managementDoc()
  {
    return view('docs.management');
  }

  public function adminDoc()
  {
    return view('docs.admin');
  }

  public function dynamicCoursesOfTeacher(Request $request) // Dynamic Course Show ///////////////////////////////////////////
  {  
    $classroom_id = $request['classroom_id'];

    $teacher_id = $request['teacher_id'];

    $course = courses::with('sches', 'sems')
      ->where('classroom_id', $classroom_id)
      ->where('status_id', 2)
      ->where('teacher_id', $teacher_id)
      ->where('sems.start', '<=', today())
      ->where('end', '>=', today())
      ->get();

    return Response::json($course);
  }

  public function dynamicClassroomsOfSupervisor(Request $request) // Dynamic Course Show ///////////////////////////////////////////
  {
    $teacher_id = $request->get('teacher_id');

    $level_id = $request->get('level_id');

    $classrooms = classrooms::with('levels')
      ->where('teacher_id', $teacher_id)
      ->where('level_id', $level_id)
      ->where('status_id', 2)
      ->get();

    return Response::json($classrooms);
  }

  public function dynamiclevel_id(Request $request) // Dynamic Course Show ///////////////////////////////////////////
  {
    $title = $request->get('title');

    $level = levels::where('title', $title)
      ->get();

    return Response::json($level);
  }

  public function dynamictitle(Request $request) // Dynamic Course Show ///////////////////////////////////////////
  {
    $level_id = $request['level_id'];

    $level = levels::where('id', $level_id)
      ->get();

    return Response::json($level);
  }

  public function dynamicSFCategory(Request $request) // Dynamic Course Show ///////////////////////////////////////////
  {
    $category_id = $request['category_id'];

    $category = studentsFinancialsCategories::where('id', $category_id)
      ->get();

    return Response::json($category);
  }

  public function dynamicFCategoryOfStudent(Request $request) // Dynamic Course Show ///////////////////////////////////////////
  {
    $studentNo = $request['studentNo'];

    $ori = strval($studentNo);
    $med = $ori[0].$ori[1].$ori[2];
    $final = (int)$med;

    $batches = batches::orderBy('batch', 'desc')
      ->get();
    
    foreach ($batches as $batch){
      if ($final >= $batch['batch']){
        $bat = $batch;
        break;
      }
    }

    $student = student::with('classroom')->where('studentNo', $studentNo)->first();
    $level = $student['classroom']['level_id'];

    $category = studentsFinancialsCategories::with('batch', 'level')
      ->where(function ($q) use ($level) {
          $q->where('level_id', $level)
              ->orWhere('level_id', 0);
      })
      ->where('batch_id', $bat['id'])
      ->get();

    return Response::json($category);
  }

  public function dynamicSFDiscount(Request $request) // Dynamic Course Show ///////////////////////////////////////////
  {
    $discount_id = $request['discount_id'];

    $discount = studentsFinancialsDiscounts::where('id', $discount_id)
      ->get();

    return Response::json($discount);
  }

  public function calculator()
  { 
    $batches = batches::orderBy('batch', 'DESC')
      ->get();

    $levels = levels::all();

    $discounts = studentsFinancialsDiscounts::all();

    return view('calculator.index', compact('batches', 'levels', 'discounts'));
  }

  public function calculation(Request $request)
  { 
    if ($request['studentNo']) {
      $ori = strval($request['studentNo']);
      $med = $ori[0].$ori[1].$ori[2];
      $final = (int)$med;
    }
    elseif ($request['batch']) {
      $final = $request['batch'];
    }
    else {
      Flash::error('You Should insert student no or choose a batch to proceed<br><br>يجب أدخال رقم الطالب أو اختيار الدفعة لإتمام العملية');
      return redirect(route('calculator'));
    }

    $batches = batches::orderBy('batch', 'desc')
      ->get();
    
    foreach ($batches as $batch){
      if ($final >= $batch['batch']){
        $bat = $batch;
        break;
      }
    }

    $feesList = array();
    $discountsList = array();

    $Semesterly = studentsFinancialsCategories::
      where(function ($q) use ($request) {
        $q->where('level_id', $request['level'])
          ->orWhere('level_id', 0);
      })
      ->where('batch_id', $bat['id'])
      ->where('frequency', 'Semesterly')
      ->get();

    foreach ($Semesterly as $semesterFees)
      array_push($feesList, ["Title" => $semesterFees['title'], "Amount" => $semesterFees['amount']]);

    $newStudent = $request['newStudent'];

    $sem = $request['sem'];

    if ($newStudent == 1)
    {
      $firstTimes = studentsFinancialsCategories::
        where(function ($q) use ($request) {
          $q->where('level_id', $request['level'])
            ->orWhere('level_id', 0);
        })
        ->where('batch_id', $bat['id'])
        ->where('frequency', 'One-time')
        ->get();

      foreach ($firstTimes as $firstTime)
        array_push($feesList, ["Title" => $firstTime['title'], "Amount" => $firstTime['amount']]);

      $yearly = studentsFinancialsCategories::
        where(function ($q) use ($request) {
          $q->where('level_id', $request['level'])
            ->orWhere('level_id', 0);
        })
        ->where('batch_id', $bat['id'])
        ->where('frequency', 'Yearly')
        ->where('Title', '!=', 'Visa Renewal')
        ->get();

      foreach ($yearly as $yearfees)
        array_push($feesList, ["Title" => $yearfees['title'], "Amount" => $yearfees['amount']]);
    }
    elseif ($sem == 1)
    {
      $yearly = studentsFinancialsCategories::
        where(function ($q) use ($request) {
          $q->where('level_id', $request['level'])
            ->orWhere('level_id', 0);
        })
        ->where('batch_id', $bat['id'])
        ->where('frequency', 'Yearly')
        ->get();

      foreach ($yearly as $yearfees)
        array_push($feesList, ["Title" => $yearfees['title'], "Amount" => $yearfees['amount']]);
    }

    $transporation = $request['transporation'];
    $visa = $request['visa'];

    if ($transporation) {
      $trans = studentsFinancialsCategories::
        where(function ($q) use ($request) {
          $q->where('level_id', $request['level'])
            ->orWhere('level_id', 0);
        })
        ->where('batch_id', $bat['id'])
        ->where('title', 'Transportation')
        ->first();

      array_push($feesList, ["Title" => $trans['title'], "Amount" => $trans['amount']*4]);
    }

    if ($request['discounts'])
    {
      $tution = studentsFinancialsCategories::where('batch_id', $bat['id'])
        ->where('title', 'Tuition Fees')
        ->where('level_id', $request['level'])
        ->first();

      foreach ($request['discounts'] as $discount) {
        $discount = studentsFinancialsDiscounts::where('title', $discount)
          ->first();

        if ($discount['type'] == "Percentage")
          $discounted = $tution['amount'] * $discount['amount'] / 100;
        else
          $discounted = $discount['amount'];

        array_push($discountsList, ["Title" => $discount['title'],"Amount" => $discounted]);
      }
    }

    $level = levels::where('id', $request['level'])->first();

    $data = ["feesList" => $feesList, "discountsList" => $discountsList, "batch" => $bat, "level" => $level, "sem" => $sem, "newStudent" => $newStudent, "visa" => $visa];

    $pdf = PDF::loadView('studentsFinancials.studentsFeesCalculator', $data);

    return $pdf->download('Student Fees Calculator.pdf');
  }
}