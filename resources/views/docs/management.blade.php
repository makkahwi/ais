@extends('layouts.app')

@section('title')
  System Documentation for Management
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
                <td><h4 style="line-height: 1.5;">As <b>Management (Principal & Vice Principal)</b>, this system offer you these options:</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;">يتيح لكم هذ النظام <b>كإدارة (مدير ونائب مدير)</b> بالمدرسة الخيارات التالية:</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To edit, view & download the data of all applicants.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض, تعديل وتنزيل بيانات المتقدمين للمدرسة.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To create, view, edit & download the data for Academic Years, Semesters, levels & classrooms for the school.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># خلق, استعراض, تعديل وتنزيل بيانات الأعوام الدراسية, الفصول الدراسية, المستويات الدراسية والشعب الدراسية لكل المدرسة.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To create, view, edit & download the courses / subjects for the whole school.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># خلق, استعراض, تعديل وتنزيل بيانات المواد الدراسية لكل مراحل الدراسة بالمدرسة.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To create, view, edit & download the weekly timetable of all classrooms for the current & next semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># خلق, استعراض, تعديل وتنزيل جدول الحصص الدراسية لكل الشعب الدراسية في الفصل الدراسي الحالي والقادم.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To create, view, edit & download the marks for all students in current semester in all studied courses / subjects</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># خلق, استعراض, تعديل وتنزيل العلامات الدراسية للفصل الدراسي الحالي ولكل طلاب المدرسة وفي كل المواد.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To create, view, edit & download the midterm and final exams timetable for current semester.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># خلق, استعراض, تعديل وتنزيل جدول الامتحانات النصفية والنهائية للفصل الدراسي الحالي.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To create, view, edit & download the final results of each semester / year for all students.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># خلق, استعراض, تعديل وتنزيل النتائج النهائية لكل فصل دراسي / سنة دراسية لكل الطلاب.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To edit, view & download the status data of all students and teachers.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض, تعديل وتنزيل بيانات الحالة لكل طلاب ومدرسي المدرسة.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To edit, view & download the personal data of all students and teachers.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض, تعديل وتنزيل البيانات الشخصية لكل طلاب ومدرسي المدرسة.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To generate & download the student confirmation letter for any student.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># عمل وتنزيل رسالة تأكيد الطالب لأي طالب بالمدرسة.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To generate & download the staff confirmation letter for any teacher.</h4></td>
                <td></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># عمل وتنزيل رسالة تأكيد التوظيف لأي معلم بالمدرسة.</h4></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

@endsection