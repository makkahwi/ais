<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\evaluationEmail;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\newUser;

use App\Models\users;

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
    // $users = users::all();

    // foreach ($users as $u)
    //   if($u['email'] != "principal@aqsa.edu.my")
    //     if($u['role_id'] == 7)
    //       Mail::to($u['email'])->send(new newUser($u));

    // Flash::success('All Students\' were notified of system launching');

    return view('home.index');
  }

  public function evaluate(Request $request)
  {
    $data = $request->all();

    Mail::to('arromi.creatives@gmail.com')->send(new evaluationEmail($data));

    Flash::success('The evaluation was sent successfully<br><br>تم إرسال بيانات التقييم بنجاح');

    return view('home.index');
  }
}
