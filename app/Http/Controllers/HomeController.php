<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\evaluationEmail;
use Illuminate\Support\Facades\Mail;

use App\Models\users;
use App\Mail\newUser;

use Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        /*

        $users = users::all();

        foreach ($users as $u)
            if($u['email'] != "principal@aqsa.edu.my")
                Mail::to($u['email'])->send(new newUser($u));

        Flash::success('All Students\' were notified of system launching');
        
        */

        return view('home.index');
    }

    public function evaluate(Request $request)
    {

        $data = $request->all();

        Mail::to('arromicreatives@gmail.com')->send(new evaluationEmail($data));

        Flash::success('The evaluation was sent successfully<br><br>تم إرسال بيانات التقييم بنجاح');

        return view('home.index');
    }
}
