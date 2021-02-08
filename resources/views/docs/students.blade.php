@extends('layouts.app')

@section('title')
  System Documentation for Students
@endsection

@section('content')
  <div class="content">
    <div class="box box-primary">
      <div class="box-body">
        
        <div class="table-responsive">
          <table class="table table-striped tableTail" width="100%">
            <tbody>
              <tr style="text-align: justify;">
                <td><h3 style="line-height: 1.5;">Welcome to online information system of<br>{{ config('app.sname') }}</h3></td>
                <td width="5%"></td>
                <td style="direction:rtl;"><h3 style="line-height: 1.5;">أهلاً بكم في نظام المعلومات الإلكتروني الخاص بـ مدرسة الأقصى التكاملية - ماليزيا</h3></td>
                
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;">As <b>Students</b>, this system offer you these options:</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;">يتيح لكم هذ النظام <b>كطلاب</b> بالمدرسة الخيارات التالية:</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To generate & download the student confirmation letter through you profile page<span style="color:red;"> - only in case that your financial status is settled -<span></h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># عمل وتنزيل رسالة تأكيد الطالب من خلال صفحة الملف الشخصي<span style="color:red;"> - فقط في حال تمت تسوية المستحقات المالية المترتبة عليكم للمدرسة -<span></h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the personal data submitted to the school, and to request a data correction in case of any wrong data. The school admission would review the request and update data accordingly.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل البيانات الشخصية المقدمة / المسجلة لدى المدرسة وتقديم طلب للتعديل في حال وجود أي أخطاء فيها, وسيتم مراجعة الطلب من قبل الإدارة وتصحيح البيانات بناء على الطلب.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the courses / subjects you study @ school currently, include their detalis.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل بيانات المواد الدراسية التي تدرسونها حالياً في المدرسة بالتفاصيل.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the weekly timetable of your classroom for the current semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل جدول الحصص الدراسية للشعبة الخاصة بكم وللفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the marks you are earned in current semester in all studied courses / subjects<span style="color:red;"> - only in case that your financial status is settled -<span></h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل العلامات الدراسية للفصل الدراسي الحالي ولكل المواد التي تدرسونها<span style="color:red;"> - فقط في حال تمت تسوية المستحقات المالية المترتبة عليكم للمدرسة -<span></h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To send appeals regarding any mark that you see as unfair, mistaken... etc.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># تقديم طلب لمراجعة أي علامة دراسية غير منصفة, خاطئة... إلخ.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the midterm and final exams timetable for current semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل جدول الامتحانات النصفية والنهائية للفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view & download the final results of each semester / year that you have been in {{ config('app.sname') }}<span style="color:red;"> - only in case that your financial status is settled -<span></h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض وتنزيل النتائج النهائية لكل فصل دراسي / سنة دراسية خلال وجودكم في مدرسة الأقصى التكاملية<span style="color:red;"> - فقط في حال تمت تسوية المستحقات المالية المترتبة عليكم للمدرسة -<span></h4></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
@endsection