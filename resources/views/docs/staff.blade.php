@extends('layouts.app')

@section('title')
  System Documentation for Teachers
@endsection

@section('content')
  <div class="content">
    <div class="box box-primary">
      <div class="box-body">
        
        <div class="table-responsive">
          <table class="table tableTail" width="100%">
            <tbody>
              <tr style="text-align: justify;">
                <td><h3 style="line-height: 1.5;">Welcome to online information system of<br>{{ config('app.sname') }}</h3></td>
                <td width="5%"></td>
                <td style="direction:rtl;"><h3 style="line-height: 1.5;">أهلاً بكم في نظام المعلومات الإلكتروني الخاص بـ مدرسة الأقصى التكاملية - ماليزيا</h3></td>
                
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;">As <b>Teachers</b>, this system offer you these options:</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;">يتيح لكم هذ النظام <b>كمعلمين</b> بالمدرسة الخيارات التالية:</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the personal data submitted to the school, and to request a data correction in case of any wrong data. The school admission would review the request and update data accordingly.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل البيانات الشخصية المقدمة / المسجلة لدى المدرسة وتقديم طلب للتعديل في حال وجود أي أخطاء فيها, وسيتم مراجعة الطلب من قبل الإدارة وتصحيح البيانات بناء على الطلب.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the classrooms of the school with their detalis.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل بيانات الشعب الدراسية الحالية في المدرسة بالتفاصيل.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the lists of students' names @ classrooms you teach.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل قوائم بأسماء الطلاب للشعب التي تدرّسونها.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the courses / subjects you teach @ school currently with their detalis.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل بيانات المواد الدراسية التي تدرّسونها حالياً في المدرسة بالتفاصيل.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the weekly timetable of courses / subjects and classrooms you teach for the current semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل جدول الحصص الدراسية للمواد والشعب التي تدرّسونها في الفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To create, view, edit & download the marks for courses / subjects and classrooms you teach<span style="color:red;"><br>Based on Managment Request, the system allows you to edit marks only within the first 24 hours after inserting them into the portal. After 24 hours, only school managment will be able to edit the inserted mark data.<span></h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># ادخال, استعراض, تعديل وتنزيل العلامات الدراسية للفصل الدراسي الحالي لكل المواد والشعب التي تدرّسونها<span style="color:red;"><br>بناء على طلب إدارة المدرسة, النظام سيسمح لكم بتعديل بيانات العلامات خلال أول 24 ساعة بعد إدخال العلامات. بعد ذلك, لا يمكن تعديل بيانات العلامات الدراسية إلا من خلال إدارة المدرسة.<span></h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To receive appeals regarding any mark of any student that their guardian see as unfair, mistaken... etc.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استقبال طلبات المراجعة لأي علامة دراسية يتقدم بها ولي أمر الطالب باعتبارها غير منصفة, خاطئة... إلخ.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download your midterm and final exams timetable for current semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل جدول الامتحانات النصفية والنهائية للفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr><td></td><td><br><br><br></td><td></td></tr>

              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;">As a <b>Classroom supervisors</b>, this system offer you these options:</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;">يتيح لكم هذ النظام <b>كمشرفي شعب</b> بالمدرسة الخيارات التالية:</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the lists of students' names & contacts @ classrooms you supervise.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل قوائم بأسماء وعناوين الاتصال لطلاب الشعبة الخاصة بكم للفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the courses / subjects that your supervised classrooms study.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل بيانات المواد الدراسية للشعب الخاصة بكم بالتفاصيل.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the weekly timetable of courses / subjects of classrooms you supervise for the current semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل جدول الحصص الدراسية للشعبة الخاصة بكم وللفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view download all marks for all students in courses / subjects they study in the classroom you supervise.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل العلامات لكل المواد الدراسية ولكل طلاب الشعبة الخاصة بكم للفصل الدراسي الحالي</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the midterm and final exams timetable for classroom you supervise this current semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل جدول الامتحانات النصفية والنهائية للشعبة الدراسية الخاصة بكم وللفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the final results of each semester / year for each student of your supervised classroom.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل النتائج النهائية لكل فصل دراسي / سنة دراسية في مدرسة الأقصى التكاملية لكل طلبة الشعبة الخاصة بكم</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"><span style="color:red;"><br>Please always remember that there is no option to delete any data in the portal. Only the system admin who do have the ability to delete any records.<span></h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"><span style="color:red;"><br>نرجو دائماً تذكر أن النظام لا يحوي خياراً لحذف أو إلغاء أي معلومة. فقط مدير النظام هو الوحيد المخول بذلك.<span></h4></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
@endsection