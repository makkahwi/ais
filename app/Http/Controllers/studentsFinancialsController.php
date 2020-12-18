<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Models\users;

use App\Models\sems;
use App\Models\levels;
use App\Models\statuses;
use App\Models\classrooms;
use App\Models\studentsFinancials;
use App\Models\studentsFinancialsCategories;
use App\Models\studentsFinancialsDiscounts;

class studentsFinancialsController extends AppBaseController
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
        
        $levels = levels::all();

        $cnSem = sems::with('year')
        ->where('end', '>=', today())->get();

        $sfCategories = studentsFinancialsCategories::all();
        $sfDiscounts = studentsFinancialsDiscounts::all();

        $classrooms = classrooms::with('level', 'students.dues', 'students.payments')
        ->orderBy('status_id', 'desc')
        ->orderBy('level_id', 'asc')
        ->orderBy('title', 'asc')
        ->get();

        $statuses = statuses::all();

        $studentsFinancials = studentsFinancials::all();

        return view('studentsFinancials.index', compact('currentSem', 'levels', 'classrooms', 'cnSem',
                                    'sfDiscounts', 'sfCategories', 'studentsFinancials', 'statuses'));
    }

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

        Flash::success('All financial due(s) were saved successfully<br><br>تم حفظ كل بيانات المستحقات المالية بنجاح');

        // studentsFinancials::create($request->all());
        
        // Flash::success('The financial data was saved successfully<br><br>تم حفظ البيانات المالية بنجاح');

        return redirect(route('sFinancials.index'));
    }
}