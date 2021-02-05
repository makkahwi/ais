@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<table style="border: none;">
  <tr>
    <td>
      <p class="text-justify">This is an auto generated confirmation email from {{ config('app.name') }}, please do not reply to it. For any concerns, email us at principal@aqsa.edu.my<br> </p>
    </td>
    <td style="width:30%;"></td>
    <td>
      <p class="text-justify" style="direction: rtl;">هذه الرسالة تم إرسالها بشكل آلي من {{ config('app.aname') }} - {{ config('app.saname') }}, نرجو عدم الرد عليها. في حال وجود أي استفسارات, يمنكم التواصل عبر البريد الإلكتروني principal@aqsa.edu.my<br> </p>
    </td>
  </tr>
  <tr>
    <td>
      <p class="text-justify">We happily received your application for a job vacancy<br></p>
    </td>
    <td style="width:30%;"></td>
    <td>
      <p style="text-align:right;">لقد استلمنا طلبكم  للتقديم على فرصة عمل<br></p>
    </td>
  </tr>
  <tr>
    <td>Below are the data entered by you<br><br></td>
    <td></td>
    <td>أدناه البيانات المدخلة من قبلكم<br><br></td>
  </tr>
  <tr>
    <td colspan=3><h2>Applicant Data بيانات المتقدم</h2></td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>English Full Name</td>
    <td><b>{{$data['eName']}}</b></td>
    <td>الاسم الإنجليزي الكامل</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Arabci Full Name</td>
    <td><b>{{$data['aName']}}</b></td>
    <td>الاسم العربي الكامل</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Gender</td>
    <td><b>{{$data['gender']}}</b></td>
    <td>الجنس</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Date of Birth</td>
    <td><b>{{$data['dob']}}</b></td>
    <td>تاريخ الميلاد</td>
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
    <td><b>{{$data['hAddress']}}</b></td>
    <td>عنوان السكن</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Nationality</td>
    <td><b>{{$data['nation']}}</b></td>
    <td>الجنسية </td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Passport No</td>
    <td><b>{{$data['ppno']}}</b></td>
    <td>رقم جواز السفر</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Photo</td>
    <td><b><a href="{{ config('app.url') }}/{{$data['photoo']}}">Link</a></b></td>
    <td>الصورة الشخصية</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>CV</td>
    <td><b><a href="{{ config('app.url') }}/{{$data['cv']}}">Link</a></b></td>
    <td>السيرة الذاتية</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Academic Certificate</td>
    <td><b><a href="{{ config('app.url') }}/{{$data['academic']}}">Link</a></b></td>
    <td>الشهادات الأكاديمية</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Experience Certificate</td>
    <td><b><a href="{{ config('app.url') }}/{{$data['experience']}}">Link</a></b></td>
    <td>شهادات الخبرة</td>
  </tr>
  <tr style="background-color:#004394; color:#ffffff;">
    <td>Additional Documents</td>
    <td><b><a href="{{ config('app.url') }}/{{$data['additional1']}}">Link</a></b></td>
    <td>وثائق إضافية</td>
  </tr>
  <tr style="background-color:#ffffff; color:#004394;">
    <td>Additional Documents</td>
    <td><b><a href="{{ config('app.url') }}/{{$data['additional2']}}">Link</a></b></td>
    <td>وثائق إضافية</td>
  </tr>
  <tr>
    <td colspan="3"><br><br></td>
  </tr>
  <tr>
    <td><p class="text-justify">Thank you for applying to our school, we will contact you soon to have an interview. We hope you would be accpeted & be part of our big family.<br></p></td>
    <td></td>
    <td><p class="text-justify" style="direction: rtl;">نشكركم على التقديم للعمل بمدرستنا, سنتواصل معكم قريباً لترتيب مقابلة العمل. نرجو أن تقبلوا للوظيفة وتكونوا جزءاً من أسرة مدرستنا الكبيرة.<br></p></td>
  </tr>
</table>

<br>

{{ config('app.name') }}
@endcomponent