@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<table style="border: none;">
  <tr>
    <td>
      <p style="text-align:justify;">This is an auto generated confirmation email from {{ config('app.name') }}, please do not reply to it. For any concerns, email us at principal@aqsa.edu.my<br> </p>
    </td>
    <td style="width:30%;"></td>
    <td>
      <p style="text-align:justify; direction: rtl;">هذه الرسالة تم إرسالها بشكل آلي من {{ config('app.aname') }} - {{ config('app.saname') }}, نرجو عدم الرد عليها. في حال وجود أي استفسارات, يمنكم التواصل عبر البريد الإلكتروني principal@aqsa.edu.my<br> </p>
    </td>
  </tr>
  <tr>
    <td>
      <p style="text-align:justify;">We would like to inform you that updates were made to your application for a new student. You can
      <a target="_blank" href="{{ config('app.url') }}/login">Login</a> to our portal
      to see the updates using these credentials.<br></p>
    </td>
    <td></td>
    <td>
      <p style="text-align:right;">نود إشعاركم بوجود تحديث على طلبكم للالتحاق بالمدرسة. يمكنكم
      <a target="_blank" href="{{ config('app.url') }}/login">تسجيل الدخول</a>
      إلى بوابتنا لمطالعة التحديث على طلب الالتحاق عبر بيانات الدخول التالية<br></p>
    </td>
  </tr>
  <tr>
    <td>Student No<br><br></td>
    <td>{{$data['studentNo']}}<br><br></td>
    <td>رقم الطالب<br><br></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>Same as Student Passport Number<br>نفس رقم جواز سفر الطالب</td>
    <td>كلمة المرور</td>
  </tr>
</table>

<br><br>

<p style="text-align: justify;">Thank you for applying to our school.<br></p>
{{ config('app.name') }}
@endcomponent