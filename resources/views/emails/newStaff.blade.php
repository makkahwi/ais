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
      <p style="text-align:justify;">We happily received your staff registration form. From now on, you can
      <a target="_blank" href="{{ config('app.url') }}/login">Login</a> to our portal using these credentials.<br></p>
    </td>
    <td style="width:30%;"></td>
    <td>
      <p style="text-align:right;">لقد استلمنا طلبكم للتسجيل كموظف بالمدرسة. من الآن وصاعداً, يمكنكم
      <a target="_blank" href="{{ config('app.url') }}/login">تسجيل الدخول</a>
      إلى بوابتنا عبر بيانات الدخول التالية<br></p>
    </td>
  </tr>
  <tr>
    <td>Staff No<br><br></td>
    <td>{{$data['staffNo']}}<br><br></td>
    <td>رقم الموظف<br><br></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>Same as Staff Passport Number<br>نفس رقم جواز سفر الموظف</td>
    <td>كلمة المرور</td>
  </tr>
  <tr>
    <td><br><br><br>Below are the data entered by you<br><br></td>
    <td></td>
    <td><br><br><br>أدناه البيانات المدخلة من قبلكم<br><br></td>
  </tr>
  <tr>
    <td colspan=3><h2><br><br>Staff Data بيانات الموظف</h2></td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>English Full Name</td>
    <td><b>{{$data['eName']}}</b></td>
    <td>الاسم الإنجليزي الكامل</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Arabic Full Name</td>
    <td><b>{{$data['aName']}}</b></td>
    <td>الاسم العربي الكامل</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Date of Birth</td>
    <td><b>{{$data['dob']}}</b></td>
    <td>تاريخ الميلاد</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Gender</td>
    <td><b>{{$data['gender']}}</b></td>
    <td>الجنس</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Email</td>
    <td><b>{{$data['email']}}</b></td>
    <td>البريد الإلكتروني</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Phone No</td>
    <td><b>{{$data['phone']}}</b></td>
    <td>رقم التلفون</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Home Address</td>
    <td><b>{{$data['address']}}</b></td>
    <td>عنوان السكن</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Nationality</td>
    <td><b>{{$data['nation']}}</b></td>
    <td>الجنسية</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Passport No</td>
    <td><b>{{$data['ppno']}}</b></td>
    <td>رقم جواز السفر</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Passport Expiry</td>
    <td><b>{{$data['ppExpiry']}}</b></td>
    <td>صلاحية جواز السفر</td>
  </tr>
  <tr>
    <br><br><br>
    <td colspan=3><h2>Emergency Contact Data بيانات الاتصال للطوارئ</h2></td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>English Full Name</td>
    <td><b>{{$data['reName']}}</b></td>
    <td>الاسم الإنجليزي الكامل</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Arabci Full Name</td>
    <td><b>{{$data['raName']}}</b></td>
    <td>الاسم العربي الكامل</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Gender</td>
    <td><b>{{$data['rgender']}}</b></td>
    <td>الجنس</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Relation</td>
    <td><b>{{$data['relation']}}</b></td>
    <td>العلاقة</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Job Describtion</td>
    <td><b>{{$data['job']}}</b></td>
    <td>المهنة</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Work Place</td>
    <td><b>{{$data['org']}}</b></td>
    <td>مكان العمل</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Email</td>
    <td><b>{{$data['remail']}}</b></td>
    <td>البريد الإلكتروني</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Phone No</td>
    <td><b>{{$data['rphone']}}</b></td>
    <td>رقم التلفون</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Home Address</td>
    <td><b>{{$data['rhAddress']}}</b></td>
    <td>عنوان السكن</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Work Address</td>
    <td><b>{{$data['rwAddress']}}</b></td>
    <td>عنوان العمل</td>
  </tr>
</table>

<br><br>

<p style="text-align: justify;">Soon your data will be varified and you'll become an active user on our system<br></p>
<p style="text-align: justify;">Thank you and welcome to our big family<br></p>
{{ config('app.name') }}
@endcomponent