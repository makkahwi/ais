@extends('layouts.app')

@section('title')
  System Documentation for Applicants
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
                <td><h4 style="line-height: 1.5;">As <b>Applicants</b>, this system offer you these options:</h4></td>
                <td width="10%"></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;">يتيح لكم هذ النظام <b>كمتقدمين</b> للمدرسة الخيارات التالية:</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To apply to the school through filling out the registration form and uploading the neccssary documents.</h4></td>
                <td width="10%"></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># التقديم للمدرسة من خلال النظام وتسليم كافة البيانات والوئاثق اللازمة للبت في طلب القبول.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To follow the application updates through the home page which include the current status of the application, which might be...<br>- Applicant is under review and process and soon to be updated.<br>- Applicants was approved, and you may visit the school to complete the registration process and pay fees.<br>- Application was rejected for some reason and you may contact school admission to clarify.</h4></td>
                <td width="10%"></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># متابعة تطورات طلب التقديم من خلال استعراض الصفحة الرئيسية التي يظهر فيها حالة الطلب الراهنة, والتي تشمل...<br>- الطلب ما زال في طور المراجعة والدراسة.<br>- تم قبول الطلب, ويجب عليكم زيارة المدرسة لدفع الرسوم واستكمال الإجراءات.<br>- تم رفض الطلب لسبب ما, ويمكنكم مراجعة المدرسة لاستيضاح الأسباب.</h4></td>
              </tr>
              <tr style="text-align: justify;">
                <td><h4 style="line-height: 1.5;"># To view the personal data submitted to the school, and to request a data correction in case of any wrong data. The school admission would review the request and update data accordingly.</h4></td>
                <td width="10%"></td>
                <td style="direction:rtl;"><h4 style="line-height: 1.5;"># استعراض البيانات الشخصية المقدمة / المسجلة إلى المدرسة وتقديم طلب للتعديل في حال وجود أي أخطاء فيها, وسيتم مراجعة الطلب من قبل الإدارة وتصحيح البيانات بناء على الطلب.</h4></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
@endsection