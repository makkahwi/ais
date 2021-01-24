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
      <p style="text-align:justify;">We happily received your application for new student. From now on, you can
      <a target="_blank" href="{{ config('app.url') }}/login">Login</a> to our portal
      to follow up your application process using these credentials.<br></p>
    </td>
    <td style="width:30%;"></td>
    <td>
      <p style="text-align:right;">لقد استلمنا طلبكم للالتحاق بالمدرسة. من الآن وصاعداً, يمكنكم
      <a target="_blank" href="{{ config('app.url') }}/login">تسجيل الدخول</a>
      إلى بوابتنا لمتابعة تحديثات طلب الالتحاق عبر بيانات الدخول التالية<br></p>
    </td>
  </tr>
  <tr>
    <td>SchoolNo<br><br></td>
    <td>{{$data['schoolNo']}}<br><br></td>
    <td>الرقم المدرسي<br><br></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>Same as Student Passport Number<br>نفس رقم جواز سفر الطالب</td>
    <td>كلمة المرور</td>
  </tr>
  <tr>
    <td><br><br><br>Below are the data entered by you<br><br></td>
    <td></td>
    <td><br><br><br>أدناه البيانات المدخلة من قبلكم<br><br></td>
  </tr>
  <tr>
    <td colspan=3><h2>Guardian Data بيانات ولي الأمر</h2></td>
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
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Nationality</td>
    <td><b>{{$data['rnation']}}</b></td>
    <td>الجنسية </td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Passport No</td>
    <td><b>{{$data['rppno']}}</b></td>
    <td>رقم جواز السفر</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Passport Expiry</td>
    <td><b>{{$data['rppExpiry']}}</b></td>
    <td>صلاحية جواز السفر</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Visa Expiry</td>
    <td><b>{{$data['rvisaExpiry']}}</b></td>
    <td>صلاحية التأشيرة الماليزية</td>
  </tr>
  <tr>
    <td colspan=3><h2><br><br>Student Data بيانات الطالب</h2></td>
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
    <td>Level</td>
    <td><b>{{$data['level']-1}}</td>
    <td>المستوى الدراسي</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Student Email</td>
    <td><b>{{$data['email']}}</b></td>
    <td>البريد الإلكتروني للطالب</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Student Phone No</td>
    <td><b>{{$data['phone']}}</b></td>
    <td>رقم التلفون للطالب</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Home Address</td>
    <td><b>{{$data['address']}}</b></td>
    <td>عنوان السكن</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Nationality</td>
    <td><b>{{$data['nation']}}</b></td>
    <td>الجنسية</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Passport No</td>
    <td><b>{{$data['ppno']}}</b></td>
    <td>رقم جواز السفر</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Passport Expiry</td>
    <td><b>{{$data['ppExpiry']}}</b></td>
    <td>صلاحية جواز السفر</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Visa Expiry</td>
    <td><b>{{$data['visaExpiry']}}</b></td>
    <td>صلاحية التأشيرة الماليزية</td>
  </tr>
</table>

<br><br>

<p style="text-align: justify;">Thank you for applying to our school, once you are accepted we will email you. We hope you would be accpeted & be part of our big family<br></p>
{{ config('app.name') }}
@endcomponent