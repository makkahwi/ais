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
      <p style="text-align:justify;">Dear Madam / Sir the guardian of school student <b>{{$data['name']}}</b><br>Good Day to you<br><br>This is to notify you that
      {{ config('app.sname') }} have built a new students portal to help you following your child's academic
      performance and some other uses you could see yourself.<br><br><a target="_blank" href="{{ config('app.url') }}">This is the portal URL</a>
      , and you can sign in to our portal using these credentials.<br></p>
    </td>
    <td style="width:20%;"></td>
    <td>
      <p style="text-align:justify;">عزيزنا ولي الأمر الطالب(ة) بالمدرسة<br><b>{{$data['name']}}</b><br>طاب يومكم<br><br>هذا الإيميل لإبلاغكم بأن
      مدرسة الأقصى التكاملية قامت ببناء بوابة جديدة للطلاب لتساعدكم في متابعة أداء أبنائكم الأكاديمي
      وبعض الأمور الأخرى التي يمكنكم الاطلاع عليها داخل البوابة.<br><br><a target="_blank" href="{{ config('app.url') }}">هذا هو رابط البوابة</a>,
      يمكنكم تسجيل الدخول إلى النظام عبر معلومات الدخول التالية<br></p>
    </td>
  </tr>
  <tr>
    <td>Student Name<br><br></td>
    <td>{{$data['name']}}<br><br></td>
    <td>اسم الطالب(ة)<br><br></td>
  </tr>
  <tr>
    <td>Student No<br><br></td>
    <td>{{$data['schoolNo']}}<br><br></td>
    <td>رقم الطالب(ة)<br><br></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>12345678</td>
    <td>كلمة المرور</td>
  </tr>
  <tr>
    <td><br>You are advised to change that password for data security purpose using the "forgot password" option @ login page.<br><br></td>
    <td></td>
    <td><br>ننصحكم بتغيير كلمة المرور للحفاظ على أمن البيانات, وذلك باستخدام خيار "نسيت كلمة المرور" الموجود في صفحة تسجيل الدخول بالبوابة.<br><br></td>
  </tr>
  <tr>
    <td><br><br>Ater signing in, you can see in the main menu an option called "Documentation". You can start exploring the portal by reading that page which include some hints and guidelines.<br><br>Please take note that this is only the first stage of the system. Later on, we will have more features and data to be included. You can see these coming features within the system. They are listed in the main menu, under "Features soon to have" tab.<br><br></td>
    <td></td>
    <td><br><br>بعد تسجيل الدخول, ستجدون في القائمة الرئيسية في البوابة خيار يسمى "دليل النظام". يمنكم بدء استشكاف البوابة بزيارة تلك الصفحة وقراءة محتواها الذي يشمل بعض الشرح والتوضيح لخصائص البوابة.<br><br>نرجو أخذ العلم بأن ما تم إطلاقه الآن من خصائص في النظام هو مرحلة أولى, وسيتبع ذلك مراحل أخرى من البيانات والخصائص داخل نفس النظام. يمكنكم التعرف على تلك الخصائص التي ستتوفر لاحقاً من خلال القائمة الرئيسية في البوابة, تحت خيار "خصائص ستتوفر قريباً".<br><br></td>
  </tr>
  <tr>
    <td><br><br>Please note this email address is for temporary use, for any cvommunication with school please email us @ principal@aqsa.edu.my<br><br></td>
    <td></td>
    <td><br><br>نرجو الملاحظة بان عنوان البريد المستخدم لارسال هذه الرسالة اليكم هو عنوان مؤقثت. للتواصل مع المدرسة, بامكانكم المراسة على الايميل principal@aqsa.edu.my<br><br></td>
  </tr>
</table>
<br><br>

<p style="text-align: justify;">You may recieve this email multiple times this week. So please ignore them (if they have the same title / subject) and we aplogize for that inconvenience in advance.<br></p>
<p style="text-align: justify;">قد تستلمون هذا الإيميل عدة مرات. يمكنكم تجاهل الإيميلات إذا حملت نفس العنوان, ونعتذر مقدماً عن هذا الازعاج.<br></p>

<p style="text-align: justify;">Thank you and welcome back to Al-Aqsa big family.<br></p>
{{ config('app.name') }}
@endcomponent