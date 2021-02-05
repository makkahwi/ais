@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<table style="border: none;">
  <tr>
    <td>
      <p class="text-justify">This is an auto generated confirmation email from {{ config('app.name') }}, {{ config('app.saname') }}, please do not reply to it. For any concerns, email us at principal@aqsa.edu.my<br> </p>
    </td>
    <td style="width:15%;"></td>
    <td>
      <p class="text-justify" style="direction: rtl;">هذه الرسالة تم إرسالها بشكل آلي من {{ config('app.aname') }}, {{ config('app.saname') }}, نرجو عدم الرد عليها. في حال وجود أي استفسارات, يمنكم التواصل عبر البريد الإلكتروني principal@aqsa.edu.my<br> </p>
    </td>
  </tr>

  <tr>
    <td>
      <p class="text-justify">Dear Madam / Sir the guardian of school student <b>{{$data->studentNo}} | {{$data->user->name}}</b><br>Good Day to you</p>
    </td>
    <td></td>
    <td>
      <p class="text-justify" style="direction: rtl;">عزيزنا ولي الأمر الطالب(ة) بالمدرسة<br><b>{{$data->studentNo}} | {{$data->user->name}}</b><br>طاب يومكم</p>
    </td>
  </tr>

  <tr>
    <td>
      <p class="text-justify"><br><br>This is to notify you that we have issued the semester results for your daughter / son. You may login and see those results.<br><br>In case your financial status is not settled, you would be required to settle that with school managment before viewing the results.</p>
    </td>
    <td></td>
    <td>
      <p class="text-justify" style="direction: rtl;"><br><br>هذا الإيميل لإبلاغكم بأن إدارة المدرسة قامت بإصدار واعتماد النتيجة النهائية للفصل الدراسي الحالي. بإمكانكم تسجيل الدخول إلى بوابة الأقصى لاستعراض النتيجة.<br><br>في حال وجود مستحقات مالية للمدرسة عليكم, نرجو منكم التواصل مع إدارة المدرسة لتسويتها لتتمكنوا من استعراض النتيجة النهائية.</p>
    </td>
  </tr>

  <tr>
    <td>
      <p class="text-justify"><br><br><a target="_blank" href="{{ config('app.url') }}">This is the portal URL</a></p>
    </td>
    <td></td>
    <td>
      <p class="text-justify" style="direction: rtl;"><br><br><a target="_blank" href="{{ config('app.url') }}">هذا هو رابط البوابة</a></p>
    </td>
  </tr>
</table>

<br><br>

<p class="texts"><b>THANK YOU</b><br>Academic Management & Admission<br>{{ config('app.sname') }}<br><br><br></p>
@endcomponent