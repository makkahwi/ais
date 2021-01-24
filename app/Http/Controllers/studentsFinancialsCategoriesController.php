<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\levels;
use App\Models\batches;
use App\Models\statuses;
use App\Models\classrooms;
use App\Models\studentsFinancialsCategories;

class studentsFinancialsCategoriesController extends AppBaseController
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
    
    $levels = levels::all();

    $classrooms = classrooms::with('level')
      ->orderBy('status_id', 'desc')
      ->orderBy('level_id', 'asc')
      ->orderBy('title', 'asc')
      ->get();

    $statuses = statuses::all();

    $batches = batches::with('categories')->orderby('batch', 'desc')->get();

    $studentsFinancialsCategories = studentsFinancialsCategories::all();

    return view('studentsFinancialsCategories.index', compact('currentSem', 'levels', 'classrooms',
                                            'batches', 'studentsFinancialsCategories', 'statuses'));
  }

  public function store(Request $request)
  {
    $this->authorize('create', studentsFinancialsCategories::class);

    $list = $request['list'];
    
    $batch = $request['batch_id'];
    
    foreach($list as $y) {
        
      $frequency = $request['frequency'.$y];
      $title = $request['title'.$y];
      $level = $request['level_id'.$y];
      $amount = $request['amount'.$y];

      studentsFinancialsCategories::create([
        'batch_id' => $batch,
        'frequency'=> $frequency,
        'title'=> $title,
        'level_id' => $level,
        'amount' => $amount,
      ]);
    }
    
    Flash::success('All categories were saved successfully<br><br>تم حفظ كل بيانات التصنيفات المالية بنجاح');
    return redirect(route('sfCategories.index'));
  }

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', studentsFinancialsCategories::class);

    $sfCategory = studentsFinancialsCategories::findOrFail($request->id);

    if (empty($sfCategory)) {
      Flash::error('The Students\' Financials\' Category was not found<br><br>بيانات التصنيف المالي المطلوبة غير موجودة');
      return redirect(route('sfCategories.index'));
    }

    $sfCategory->update($request->all());

    Flash::success('The Students\' Financials\' Category was updated successfully<br><br>تم تحديث بيانات التصنيف المالي بنجاح');

    return redirect(route('sfCategories.index'));
  }
}
