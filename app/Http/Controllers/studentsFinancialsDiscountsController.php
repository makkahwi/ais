<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\sems;
use App\Models\levels;
use App\Models\statuses;
use App\Models\classrooms;
use App\Models\studentsFinancialsDiscounts;

class studentsFinancialsDiscountsController extends AppBaseController
{
  public function __construct()
  {
    //
  }

  // Index Page //////////////////////

  public function index(Request $request)
  {
    $this->authorize('viewAny', studentsFinancialsDiscounts::class);

    $currentSem = $this->getCurrentSem();
      
    $levels = levels::all();

    $classrooms = classrooms::with('level')
      ->orderBy('status_id', 'desc')
      ->orderBy('level_id', 'asc')
      ->orderBy('title', 'asc')
      ->get();

    $statuses = statuses::all();

    $studentsFinancialsDiscounts = studentsFinancialsDiscounts::all();

    return view('studentsFinancialsDiscounts.index', compact('currentSem', 'levels', 'classrooms',
                                                      'studentsFinancialsDiscounts', 'statuses'));
  }

  // Create Data ////////////////////////////////////////////

  public function store(Request $request)
  {
    $this->authorize('create', studentsFinancialsDiscounts::class);

    studentsFinancialsDiscounts::create($request->all());
    
    Flash::success('The financial discount was saved successfully<br><br>تم حفظ بيانات الخصم المالي بنجاح');

    return redirect(route('sfDiscounts.index'));
  }

  // Update Data ////////////////////////////////////////////

  public function update(Request $request) // Updating with Modal
  {
    $this->authorize('update', studentsFinancialsDiscounts::class);

    $sfDiscount = studentsFinancialsDiscounts::findOrFail($request->id);

    if (empty($sfDiscount)) {
      Flash::error('The Students\' Financials\' Discount was not found<br><br>بيانات الخصم المالي المطلوبة غير موجودة');
      return redirect(route('sfCategories.index'));
    }

    $sfDiscount->update($request->all());

    Flash::success('The Students\' Financials\' Discount was updated successfully<br><br>تم تحديث بيانات الخصم المالي بنجاح');

    return redirect(route('sfDiscounts.index'));
  }

  // Destroy Data ////////////////////////////////////////////

  public function destroy(Request $request)
  {
    $this->authorize('delete', studentsFinancialsDiscounts::class);

    $id = $request['id'];
    
    $discount = $this->staffRepository->find($id);

    if (empty($discount)) {
      Flash::error('Students Financials Discount not found');
      return redirect(route('sfDiscounts.index'));
    }

    $this->staffRepository->delete($id);

    Flash::success('Students Financials Discount was deleted successfully.');

    return redirect(route('sfDiscounts.index'));
  }
}
