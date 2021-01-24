<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestaffRequest;
use App\Http\Requests\UpdatestaffRequest;
use App\Repositories\staffRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Response;
use Flash;

use Illuminate\Support\Facades\Mail;
use App\Mail\newStaff;
use App\Mail\jobApp;

use App\Models\staff;
use App\Models\users;
use App\Models\roles;
use App\Models\statuses;
use App\Models\contacts;
use App\Models\relatives;

class staffController extends AppBaseController
{
  /** @var  staffRepository */
  private $staffRepository;

  public function __construct(staffRepository $staffRepo)
  {
    $this->staffRepository = $staffRepo;
  }

  /**
   * Display a listing of the staff.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $this->authorize('viewAny', staff::class);

    $statuses = statuses::where('id','<', 5)->where('id','>', 1)->get();

    $staff = staff::with('user')->get();

    return view('staff.index',compact('statuses', 'staff'));
  }

  /**
   * Store a newly created staff in storage.
   *
   * @param CreatestaffRequest $request
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->authorize('create', staff::class);

    $splitToday = explode("-",now());
    $year = ($splitToday[0] % 100);
    $month = $splitToday[1];
    $serial = mt_rand(10, 99);

    $staffNo = $year.$month.$serial;

    // Files Upload

    $random = mt_rand(100, 99999999);
    
    $path = 'docs/staff/'.$staffNo.'-'.$random.'/';

    if ($files = $request->file('photo')) {
      $photo = $staffNo . "_" . "Photo" . "." . $files->getClientOriginalExtension();
      $files->move($path, $photo);
    }

    if ($files = $request->file('passport')) {
      $passport = $staffNo . "_" . "Passport" . "." . $files->getClientOriginalExtension();
      $files->move($path, $passport);
    }

    if ($files = $request->file('visa')) {
      $visa = $staffNo . "_" . "Visa" . "." . $files->getClientOriginalExtension();
      $files->move($path, $visa);
    }

    if ($files = $request->file('doc1')) {
      $academic = $staffNo . "_" . "Academic_Certificate" . "." . $files->getClientOriginalExtension();
      $files->move($path, $academic);
    }

    if ($files = $request->file('doc2')) {
      $work = $staffNo . "_" . "Work_Certificate" . "." . $files->getClientOriginalExtension();
      $files->move($path, $work);
    }
    
    if ($files = $request->file('doc3')) {
      $health = $staffNo . "_" . "Health" . "." . $files->getClientOriginalExtension();
      $files->move($path, $health);
    }
    else
      $health = "none";

    $splitname = explode(" ",$request['reName']);
    $name = $splitname[0];

    $re = relatives::firstOrCreate(['eName' => $request['reName'],'aName' => $request['raName']],
      ['name' => $name,
      'gender' => $request['rgender'],
      'job' => $request['job'],
      'org' => $request['org'],
      'email' => $request['remail'],
      'phone' => $request['rphone'],
      'hAddress' => $request['rhAddress'],
      'wAddress' => $request['rwAddress'],
      'more' => $request['more']]
    );

    if ($re->wasRecentlyCreated)
    {
      $rel = relatives::orderby('updated_at', 'DESC')->first();
    }
    else
    {
      $rel = relatives::where('eName', '=', $request['reName'])
        ->where('aName', '=', $request['raName'])
        ->update(['name' => $name,
        'gender' => $request['rgender'],
        'job' => $request['job'],
        'org' => $request['org'],
        'email' => $request['remail'],
        'phone' => $request['rphone'],
        'hAddress' => $request['rhAddress'],
        'wAddress' => $request['rwAddress'],
        'more' => $request['more']]);

      $rel = Relatives::orderby('updated_at', 'DESC')->first();
    }

    contacts::create([
      'schoolNo' => $staffNo,
      'dob'=>$request['dob'],
      'gender'=>$request['gender'],
      'email' => $request['email'],
      'phone' => $request['phone'],
      'address' => $request['address'],
      'relative_id' => $rel[0]['id'],
      'relation' => $request['relation'],
      'nation' => $request['nation'],
      'ppno' => $request['ppno'],
      'ppExpiry' => $request['ppExpiry'],
      'visaExpiry' => $request['visaExpiry'],
      'photo' => 'docs/staff/'.$staffNo.'-'.$random.'/'.$photo,
      'passport' => 'docs/staff/'.$staffNo.'-'.$random.'/'.$passport,
      'visa' => 'docs/staff/'.$staffNo.'-'.$random.'/'.$visa,
      'doc1' => 'docs/staff/'.$staffNo.'-'.$random.'/'.$academic,
      'doc2' => 'docs/staff/'.$staffNo.'-'.$random.'/'.$work,
      'doc3' => 'docs/staff/'.$staffNo.'-'.$random.'/'.$health,
    ]);
    
    $spliteName = explode(" ",$request['eName']);
    $eName1 = $spliteName[0];
    $eName2 = $spliteName[1];

    users::create([
      'schoolNo' => $staffNo,
      'name' => $eName1." ".$eName2,
      'email' => $request['email'],
      'password' => Hash::make($request['ppno']),
    ]);

    staff::create([
      'staffNo'=>$staffNo,
      'eName'=>$request['eName'],
      'aName'=>$request['aName'],
    ]);
    
    $data = $request->all();

    $data += ['staffNo'=>$staffNo];
    
    Mail::to($request['email'])->send(new newStaff($data));

    Flash::success('Application was saved successfully. You can login using these data<br><br>تم حفظ ملف التسجيل بنجاح. بإمكانكم تسجيل الدخول من خلال المعلومات التالية<br> Staff No رقم الموظف '.$staffNo.'<br>Staff Passport Number as a password رقم جواز الموظف ككلمة مرور');

    return redirect(route('login'));
  }

  public function jobApp()
  {
    return view('auth.jobApp');
  }

  public function jobAppEmail(Request $request)
  {
    $data = $request->all();

    // Files Upload

    $random = mt_rand(100, 99999999);

    if ($files = $request->file('photo')) {
      $path1 = 'docs/jobApp/'.$random.'/';
      $photo = "Photo" . "." . $files->getClientOriginalExtension();
      $files->move($path1, $photo);
    }

    if ($files = $request->file('doc1')) {
      $path2 = 'docs/jobApp/'.$random.'/';
      $doc1 = "CV" . "." . $files->getClientOriginalExtension();
      $files->move($path2, $doc1);
    }

    if ($files = $request->file('doc2')) {
      $path3 = 'docs/jobApp/'.$random.'/';
      $doc2 = "Academic_Certificates" . "." . $files->getClientOriginalExtension();
      $files->move($path3, $doc2);
    }

    if ($files = $request->file('doc3')) {
      $path4 = 'docs/jobApp/'.$random.'/';
      $doc3 = "Experiance_Certificates" . "." . $files->getClientOriginalExtension();
      $files->move($path4, $doc3);
    }

    if ($files = $request->file('doc4')) {
      $path5 = 'docs/jobApp/'.$random.'/';
      $doc4 = "additional_1" . "." . $files->getClientOriginalExtension();
      $files->move($path5, $doc4);
    }

    if ($files = $request->file('doc5')) {
      $path6 = 'docs/jobApp/'.$random.'/';
      $doc5 = "additional_2" . "." . $files->getClientOriginalExtension();
      $files->move($path6, $doc5);
    }

    $splitToday = explode("-",today());
    $year = ($splitToday[0] % 100);
    $month = $splitToday[1];
    $serial = mt_rand(100, 999);

    $staffNo = $year.$month.$serial;

    Staff::create([
      'staffNo' => $staffNo,
      'eName' => $request['eName'],
      'aName' => $request['aName'],
      'dob' => $request['dob'],
      'gender' => $request['gender'],
    ]);

    $data += ['photoo'=>$path1.$photo];

    $data += ['cv'=>$path2.$doc1];

    $data += ['academic'=>$path3.$doc2];

    $data += ['experience'=>$path4.$doc3];

    if ($files = $request->file('doc4'))
    {
      $data += ['additional1'=>$path5.$doc4];
    }
    else
    {
      $data += ['additional1'=>'None'];
    }

    if ($files = $request->file('doc5'))
    {
      $data += ['additional2'=>$path6.$doc5];
    }
    else
    {
      $data += ['additional2'=>'None'];
    }

    $vice = users::where('role_id', '=', 3)->get('email');

    Mail::to($request['email'])->cc($vice[0])->send(new jobApp($data));

    Flash::success('Application was saved successfully, check the email sent to you please<br><br>تم حفظ ملف التقدم بنجاح, نرجو الإطلاع على الإيميل المرسل لكم');

    return view('auth.jobApp');
  }

  public function staffApp()
  {
    return view('auth.staffApp');
  }

  /**
   * Update the specified staff in storage.
   *
   * @param int $id
   * @param UpdatestaffRequest $request
   *
   * @return Response
   */
  public function update($id, UpdatestaffRequest $request)
  {
    $this->authorize('update', staff::class);

    $staff = $this->staffRepository->find($request['id']);

    if (empty($staff))
    {
      Flash::error('Staff not found');
      return redirect(route('staff.index'));
    }

    $staff = $this->staffRepository->update($request->all(), $request['id']);

    $contact = contacts::where('schoolNo', '=', $request['staffNo'])->get('email');

    contacts::where('schoolNo', '=', $request['staffNo'])
      ->update(['dob' => $request['dob'], 'gender' => $request['gender'],
      'email' => $request['email'],  'phone' => $request['phone'],
      'address' => $request['address'], 'nation' => $request['nation'],
      'ppno' => $request['ppno'], 'ppExpiry' => $request['ppExpiry'],
      'photo' => $request['photo'], 'passport' => $request['passport'],
      'visa' => $request['visa'], 'doc1' => $request['doc1'],
      'doc2' => $request['doc2'], 'doc3' => $request['doc3'],
      'visaExpiry' => $request['visaExpiry'],]);

    users::where('schoolNo', '=', $request['staffNo'])
      ->update(['name' => $request['name'], 'email' => $request['email'],
      'status_id' => $request['status'], 'leaveDate' => $request['leaveDate']]);

    Flash::success('The staff data was updated successfully<br><br>تم تحديث بيانات الموظف بنجاح');

    return redirect(route('staff.index'));
  }

  /**
   * Remove the specified staff from storage.
   *
   * @param int $id
   *
   * @throws \Exception
   *
   * @return Response
   */
  public function destroy(Request $request)
  {
    $this->authorize('delete', staff::class);

    $id = $request['id'];
    
    $staff = $this->staffRepository->find($id);

    if (empty($staff)) {
      Flash::error('Staff not found');
      return redirect(route('staff.index'));
    }

    $this->staffRepository->delete($id);

    Flash::success('Staff deleted successfully.');

    return redirect(route('staff.index'));
  }
}
