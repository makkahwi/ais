<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Repositories\studentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Response;
use Flash;

use App\Mail\newStudent;
use Illuminate\Support\Facades\Mail;

use App; // Student Confermation Letter PDF Generator ////////////////////////////
use App\Models\referances;
use App\Models\relatives;
use App\Models\student;
use App\Models\contacts;
use App\Models\users;
use PDF;

use App\Models\statuses;
use App\Models\levels;
use App\Models\classrooms;

use App\Models\sches;
use App\Models\sems;

class studentsController extends AppBaseController
{
    /** @var  studentsRepository */
    private $studentsRepository;

    public function __construct(studentsRepository $studentsRepo)
    {
        $this->studentsRepository = $studentsRepo;
    }

    /**
     * Display a listing of the students.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function index(Request $request)
    {
        $currentSem = Sems::with('year')
        ->where('start', '<=', today())
        ->where('end', '>=', today())->first();

        $statuses = statuses::all();
        $levels = Levels::all();
        $relatives = relatives::all();
        $classrooms = Classrooms::with('students', 'students.user.contact.relative', 'students.user.status', 'students.classroom.level')->get();

        return view('students.index', compact('currentSem', 'statuses', 'levels', 'classrooms', 'relatives'));
    }

    public function confLetter(Request $request){ // Student Confermation Letter PDF Generator ////////////////////
        
        $data = $request->all();

        $splitGender = explode(" ",$data['gender']);

        $data += ['ggender' => $splitGender[0]];

        // Referance No

        $splitToday = explode("-",today());

        $splitDate = explode(" ",$splitToday[2]);

        $referances = Referances::where('created_at', '>=', today())
                                ->orderby('created_at', 'desc')->where('type', '=', 'SCL')
                                ->first();

        if (empty($referances))
            $count = 1;
        else
        {
            $splitRef = explode("-",$referances['ref']);
            $count = $splitRef[3]+1;
        }

        $ref = Referances::create([
            'type' => 'SCL',
            'ref' => 'AIS-SCL-'.($splitToday[0] % 100).$splitToday[1].$splitDate[0].'-'.$count
        ]);

        $data += ['ref' => $ref['ref']];

        $student = $request->get('schoolNo');
          
        $pdf = PDF::loadView('users.profile.studentConfirmationLetter', $data);

        $path = 'docs/letters/SCL/';

        if(!File::isDirectory($path)){
            File::makeDirectory($path);
        }

        $pdf->save($path.$ref['ref'].'.pdf');

        return $pdf->download($student.' - Student Confirmation Letter.pdf');
    }

    /**
     * Store a newly created users in storage.
     *
     * @param CreateusersRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        // Generate a Student No

        $splitSem = explode(" ",$request['semName']);
        $sem = $splitSem[1];

        $year = ($request['yearName'] % 100);
        
        $serial = mt_rand(100, 999);

        if($request['level'] < 11){
            $lev = $request['level'] - 1;
            $studentNo = $year.$sem.'0'.$lev.$serial;}
        else{
            $lev = $request['level'] - 1;
            $studentNo = $year.$sem.$lev.$serial;}

        // Files Upload

       $random = mt_rand(100, 99999999);

       $spath = 'docs/students/'.$studentNo.'-'.$random.'/';
       $rpath = 'docs/guardians/'.$request['rppno'].'-'.$request['rppExpiry'].'/';
 
        if ($files = $request->file('photo')) {
           $photo = $studentNo . "_" . "Photo" . "." . $files->getClientOriginalExtension();
           $files->move($spath, $photo);
        }
 
        if ($files = $request->file('passport')) {
            $passport = $studentNo . "_" . "Passport" . "." . $files->getClientOriginalExtension();
            $files->move($spath, $passport);
        }
 
        if ($files = $request->file('visa')) {
            $visa = $studentNo . "_" . "Visa" . "." . $files->getClientOriginalExtension();
            $files->move($spath, $visa);
        }
 
        if ($files = $request->file('doc1')) {
            $birth = $studentNo . "_" . "Birth_Certificate" . "." . $files->getClientOriginalExtension();
            $files->move($spath, $birth);
        }
 
        if ($files = $request->file('doc2')) {
            $school = $studentNo . "_" . "School_Certificate" . "." . $files->getClientOriginalExtension();
            $files->move($spath, $school);
        }
 
        if ($files = $request->file('rpassport')) {
            $rPassport = $request['rppno'] . "_" . "Guardian_Passport" . "." . $files->getClientOriginalExtension();
            $files->move($rpath, $rPassport);
        }
 
        if ($files = $request->file('rvisa')) {
            $rVisa = $request['rppno'] . "_" . "Guardian_Visa" . "." . $files->getClientOriginalExtension();
            $files->move($rpath, $rVisa);
        }

        // Create data

        $splitrName = explode(" ",$request['reName']);
        $rName = $splitrName[0];

        $re = relatives::firstOrCreate(['nation' => $request['rnation'],'ppno' => $request['rppno']],
            ['eName' => $request['reName'],
            'aName' => $request['raName'],
            'name' => $rName,
            'gender' => $request['rgender'],
            'relation' => $request['relation'],
            'job' => $request['job'],
            'org' => $request['org'],
            'email' => $request['remail'],
            'phone' => $request['rphone'],
            'hAddress' => $request['rhAddress'],
            'wAddress' => $request['rwAddress'],
            'more' => $request['more'],
            'ppExpiry' => $request['rppExpiry'],
            'visaExpiry' => $request['rvisaExpiry'],
            'passport' => $rpath.$rPassport,
            'visa' => $rpath.$rVisa]
        );

        if($re->wasRecentlyCreated){
            $rel = relatives::orderby('relatives.updated_at', 'DESC')->first();
        }
        else {
            $rel = relatives::where('nation', '=', $request['rnation'])
            ->where('ppno', '=', $request['rppno'])
            ->update(['eName' => $request['reName'],
            'aName' => $request['raName'],
            'name' => $rName,
            'gender' => $request['rgender'],
            'relation' => $request['relation'],
            'job' => $request['job'],
            'org' => $request['org'],
            'email' => $request['remail'],
            'phone' => $request['rphone'],
            'hAddress' => $request['rhAddress'],
            'wAddress' => $request['rwAddress'],
            'more' => $request['more'],
            'ppExpiry' => $request['rppExpiry'],
            'visaExpiry' => $request['rvisaExpiry'],
            'passport' => $rpath.$rPassport,
            'visa' => $rpath.$rVisa]);

            $rel = relatives::orderby('relatives.updated_at', 'DESC')->first();
        }
        
        contacts::create([
            'schoolNo' => $studentNo,
            'dob'=>$request['dob'],
            'gender'=>$request['gender'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'relative_id' => $rel[0]['id'],
            'nation' => $request['nation'],
            'ppno' => $request['ppno'],
            'ppExpiry' => $request['ppExpiry'],
            'visaExpiry' => $request['visaExpiry'],
            'photo' => $spath.$photo,
            'passport' => $spath.$passport,
            'visa' => $spath.$visa,
            'doc1' => $spath.$birth,
            'doc2' => $spath.$school,
        ]);

        $splitseName = explode(" ",$request['eName']);
        $seName1 = $splitseName[0];
        $seName2 = $splitseName[1];

        Users::create([
            'schoolNo' => $studentNo,
            'name' => $seName1." ".$seName2,
            'email' => $request['remail'],
            'password' => Hash::make($request['ppno']),
        ]);
    
        student::create([
            'studentNo'=> $studentNo,
            'eName'=> $request['eName'],
            'aName'=> $request['aName'],
            'classroom_id'=> $request['level'],
            'trans'=> $request['trans'],
            'visa_id'=> $request['svisa'],
            'financial'=> 0,
        ]);
        
        $data = $request->all();

        $data += ['schoolNo'=>$studentNo];

        Mail::to($request['remail'])->send(new newStudent($data));

        Flash::success('Application was saved successfully. You can login using these data<br>تم حفظ ملف التقدم بنجاح. بإمكانكم تسجيل الدخول من خلال المعلومات التالية<br> Student No الرقم المدرسي '.$studentNo.'<br>Student Passport Number as a password رقم جواز الطالب ككلمة مرور');

        return redirect(route('login'));
    }

    /**
     * Update the specified students in storage.
     *
     * @param int $id
     * @param UpdatestudentsRequest $request
     *
     * @return Response
     */

    public function update($id, UpdatestudentsRequest $request) // Updating with Modal
    {
        $this->authorize('update', student::class);

        $student = $this->studentsRepository->find($request['id']);

        if (empty($student)) {
            Flash::error('The student was not found<br><br>بيانات الطالب المطلوبة غير موجودة');

            return redirect(route('students.index'));
        }

        $student = $this->studentsRepository->update($request->all(), $request['id']);

        contacts::where('schoolNo', '=', $request['studentNo'])
        ->update(['email' => $request['email'], 'phone' => $request['phone'],
        'address' => $request['address'], 'nation' => $request['nation'],
        'dob' => $request['dob'], 'gender' => $request['gender'],
        'ppno' => $request['ppno'], 'ppExpiry' => $request['ppExpiry'],
        'photo' => $request['photo'], 'passport' => $request['passport'],
        'visa' => $request['visa'], 'doc1' => $request['doc1'], 'relation' => $request['relation'],
        'doc2' => $request['doc2'], 'visaExpiry' => $request['visaExpiry']]);

        users::where('schoolNo', '=', $request['studentNo'])
        ->update(['name' => $request['name']]);

        Flash::success('The student data was updated successfully<br><br>تم تحديث بيانات الطالب بنجاح');

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified students from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy(Request $request)
    {
        $this->authorize('delete', Student::class);

        $id = $request['id'];
        
        $students = $this->studentsRepository->find($id);

        if (empty($students)) {
            Flash::error('The student was not found<br><br>بيانات الطالب المطلوبة غير موجودة');

            return redirect(route('students.index'));
        }

        $this->studentsRepository->delete($id);

        Flash::success('The student was deleted successfully<br><br>تم حذف بيانات الطالب بنجاح');

        return redirect(route('students.index'));
    }
}
