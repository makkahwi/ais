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

        $successful = [];

        $failure = [];
        
        foreach($list as $y) {
            
            $time_id = $request['time_id'.$y];
            $course_id = $request['course_id'.$y];
            $teacher_id = $request['teacher_id'.$y];

            $sches = sches::firstOrCreate(['sem_id' => $request['sem_id'], 'classroom_id' => $request['classroom_id'],
            'day_id' => $request['day_id'], 'time_id' => $time_id, 'status_id' => $request['status_id']],
            ['course_id' => $course_id, 'teacher_id' => $teacher_id]);
    
            if($sches->wasRecentlyCreated){
                array_push($successful, $time_id);
            }
            else {
                array_push($failure, $time_id);
            }
        }

        if(empty($failure)){
            Flash::success('All Class(es) were saved successfully<br><br>تم حفظ كل بيانات الحصة / الحصص الدراسية بنجاح');
        }
        elseif (empty($successful)){
            Flash::error('All Class(es) data clashes with existed ones<br><br>كل بيانات الحصة / الحصص الدراسية المدخلة تتعارض مع بيانات موجودة بالفعل');
        }
        else {
            Flash::success('Class(es) '.implode(' & ', $successful).' were saved successfully<br><br>تم حفظ بيانات الحصة / الحصص الدراسية '.implode(' و ', $successful).' بنجاح');

            Flash::error('Class(es) '.implode(' & ', $failure).' data clashes with existed ones<br><br>بيانات الحصة / الحصص الدراسية '.implode(' و ', $failure).' المدخلة تتعارض مع بيانات موجودة بالفعل');
        }

        // studentsFinancials::create($request->all());
        
        // Flash::success('The financial data was saved successfully<br><br>تم حفظ البيانات المالية بنجاح');

        return redirect(route('sFinancials.index'));
    }
}