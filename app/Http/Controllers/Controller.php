<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Response;

use App\Models\sches;
use App\Models\sems;
use App\Models\years;
use App\Models\levels;
use App\Models\courses;
use App\Models\studentsFinancialsCategories;
use App\Models\studentsFinancialsDiscounts;


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
        ->where('classroom_id', '=', $classroom_id)
        ->where('status_id', '=', 2)
        ->where('teacher_id', '=', $teacher_id)
        ->where('sems.start', '<=', today())
        ->where('end', '>=', today())
        ->get();

        return Response::json($course);
    }

    public function dynamicClassroomsOfSupervisor(Request $request){ // Dynamic Course Show ///////////////////////////////////////////
       
        $teacher_id = $request->get('teacher_id');

        $level_id = $request->get('level_id');

        $classrooms = classrooms::with('levels')
        ->where('teacher_id', '=', $teacher_id)
        ->where('level_id', '=', $level_id)
        ->where('status_id', '=', 2)
        ->get();

        return Response::json($classrooms);
    }

    public function dynamiclevel_id(Request $request){ // Dynamic Course Show ///////////////////////////////////////////

        $title = $request->get('title');

        $level = levels::where('title', '=', $title)->get();

        return Response::json($level);
    }

    public function dynamictitle(Request $request){ // Dynamic Course Show ///////////////////////////////////////////

        $level_id = $request['level_id'];

        $level = levels::where('id', '=', $level_id)->get();

        return Response::json($level);
    }

    public function dynamicSFCategory(Request $request){ // Dynamic Course Show ///////////////////////////////////////////

        $category_id = $request['category_id'];

        $category = studentsFinancialsCategories::where('id', '=', $category_id)->get();

        return Response::json($category);
    }

    public function dynamicSFDiscount(Request $request){ // Dynamic Course Show ///////////////////////////////////////////

        $discount_id = $request['discount_id'];

        $discount = studentsFinancialsDiscounts::where('id', '=', $discount_id)->get();

        return Response::json($discount);
    }

    public function emailUsers(){ // Dynamic Course Show ///////////////////////////////////////////

        $users = users::all();

        foreach ($users as $u)
            Mail::to($u['email'])->subject('Portal Announcement')->send(new newUser($u->all()));

        Flash::success('All new Emails have been notified');

        return view('home');
    }

    public function calculator(){ // Dynamic Course Show ///////////////////////////////////////////

        return view('calculator.index');
    }
}