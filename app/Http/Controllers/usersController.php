<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateusersRequest;
use App\Http\Requests\UpdateusersRequest;
use App\Repositories\usersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Mail;
use App\Mail\requestStaffStudentDataUpdate;

use App\Models\relatives;
use App\Models\contacts;
use App\Models\users;
use App\Models\staff;
use Illuminate\Support\Facades\Hash;

use App\Models\roles;
use App\Models\student;
use App\Models\levels;
use App\Models\sems;
use App\Models\statuses;

use App;

class usersController extends AppBaseController
{
  use Notifiable;
  
  /** @var  usersRepository */
  private $usersRepository;

  public function __construct(usersRepository $usersRepo)
  {
    $this->usersRepository = $usersRepo;
  }

  /**
   * Display a listing of the users.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $currentSem = Sems::with('year')
      ->where('sems.start', '<=', today())
      ->where('end', '>=', today())->first();

    $applicants = student::with('classroom', 'user')->get();

    $users = users::with('role', 'status')->get();

    $teachers = staff::with('user')->get();

    $students = student::with('classroom', 'user')->get();

    $relatives = Relatives::all();

    $status = statuses::all();

    $roles = Roles::all();

    return view('users.index', compact('currentSem', 'roles',
                                'applicants', 'teachers', 'relatives', 'students',
                                'users', 'status'));
  }

  public function requestupdate(Request $request)
  {
    $data = $request->all();

    if (empty($data['gender'])) $data['gender'] = "None";
    if (empty($data['phone'])) $data['phone'] = "None";

    if (empty($data['email'])) $data['email'] = "None";
    if (empty($data['emailNew'])) $data['emailNew'] = "None";
    if (empty($data['phone'])) $data['phone'] = "None";
    if (empty($data['phoneNew'])) $data['phoneNew'] = "None";
    if (empty($data['level'])) $data['level'] = "Staff";
    if (empty($data['classroom'])) $data['classroom'] = "Staff";
    
    if (empty($data['photo'])) $data['photo'] = "None";
    if (empty($data['passport'])) $data['passport'] = "None";
    if (empty($data['visa'])) $data['visa'] = "None";
    if (empty($data['doc1'])) $data['doc1'] = "None";
    if (empty($data['doc2'])) $data['doc2'] = "None";
    if (empty($data['doc3'])) $data['doc3'] = "None";

    // Update Files

    if ($data['photo'] != "None") {
      $splitPath = explode($data['id']."_", $data['photo']);
      $path = $splitPath[0];
    }
    else {
      $random = mt_rand(100, 99999999);
      if ($data['id'] > 999999) {
        $studentNo = $data['id'];
        $path = 'docs/students/'.$studentNo.'-'.$random.'/';
      }
      else {
        $staffNo = $data['id'];
        $path = 'docs/staff/'.$staffNo.'-'.$random.'/';
      }
    }

    if ($files = $request->file('photoNew')) {
      $photo = $data['id'] . "_" . "NewPhoto" . "." . $files->getClientOriginalExtension();
      $files->move($path, $photo);
      $data += ['photoNewf' => $path.$photo];
    }
    else {$data += ['photoNewf' => $data['photo']];}


    $splitPath = explode($data['id']."_", $data['passport']); // Passport

    if ($files = $request->file('passportNew')) {
      $passport = $data['id'] . "_" . "NewPassport" . "." . $files->getClientOriginalExtension();
      $files->move($path, $passport);
      $data += ['passportNewf' => $path.$passport];
    }
    else {$data += ['passportNewf' => $data['passport']];}

    $splitPath = explode($data['id']."_", $data['visa']); // Visa

    if ($files = $request->file('visaNew')) {
      $visa = $data['id'] . "_" . "NewVisa" . "." . $files->getClientOriginalExtension();
      $files->move($path, $visa);
      $data += ['visaNewf' => $path.$visa];
    }
    else {$data += ['visaNewf' => $data['visa']];}

    $splitPath = explode($data['id']."_", $data['doc1']); // Academic_Certificates / School_Certificate

    if ($files = $request->file('doc1New')) {
      $doc1 = $data['id'] . "_" . "NewDoc1" . "." . $files->getClientOriginalExtension();
      $files->move($path, $doc1);
      $data += ['doc1Newf' => $path.$doc1];
    }
    else {$data += ['doc1Newf' => $data['doc1']];}

    $splitPath = explode($data['id']."_", $data['doc2']); // Health_Insurance / Birth_Certificate

    if ($files = $request->file('doc2New')) {
      $doc2 = $data['id'] . "_" . "NewDoc2" . "." . $files->getClientOriginalExtension();
      $files->move($path, $doc2);
      $data += ['doc2Newf' => $path.$doc2];
    }
    else {$data += ['doc2Newf' => $data['doc2']];}

    $splitPath = explode($data['id']."_", $data['doc3']); // Experiance_Certificates

    if ($files = $request->file('doc3New')) {
      $doc3 = $data['id'] . "_" . "NewDoc3" . "." . $files->getClientOriginalExtension();
      $files->move($path, $doc3);
      $data += ['doc3Newf' => $path.$doc3];
    }
    else {$data += ['doc3Newf' => $data['doc3']];}

    $secretary = users::where('role_id', '=', 4)->where('status_id', '=', 2)->get('email');

    Mail::to($secretary[0]['email'])->send(new requestStaffStudentDataUpdate($data));

    Flash::success('The request was sent successfully and data will be updated soon<br><br>تم إرسال الطلب بنجاح وسيتم قريباً تحديث البيانات');

    return redirect(route('users.index'));
  }

  /**
   * Update the specified users in storage.
   *
   * @param int $id
   * @param UpdateusersRequest $request
   *
   * @return Response
   */
  public function update(request $request)
  {
    $this->authorize('update', users::class);

    $password = Hash::make($request['passwords']);

    $request += ['password' => $password];

    $users = $this->usersRepository->update($request->all(), $request['id']);

    Flash::success('Users updated successfully.');

    return redirect(route('users.index'));
  }

  /**
   * Remove the specified users from storage.
   *
   * @param int $id
   *
   * @throws \Exception
   *
   * @return Response
   */
  public function destroy(Request $request)
  {
    $this->authorize('delete', users::class);

    $id = $request['id'];
    
    $users = $this->usersRepository->find($id);

    if (empty($users)) {
      Flash::error('Users not found');

      return redirect(route('users.index'));
    }

    $this->usersRepository->delete($id);

    Flash::success('Users deleted successfully.');

    return redirect(route('users.index'));
  }
}