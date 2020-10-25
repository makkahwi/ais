@component('mail::message')
<img src="{{ asset('img/wLogo.png') }}" alt="" width="100%">

<hr><br>

<h2>This is an auto generated email from {{ config('app.name') }}<br></h2>

<table style="border: none;">
    <tr>
        <th>
            <p style="text-align:justify;">Dear Madam / Sir the guardian of school student <b>{{$data['name']}}</b><br>Good Day to you<br><br>This is to notify you that
            {{ config('app.sname') }} have built a new students portal to help you following your child's academic
            performance and some other uses you could see yourself.<br><br><a target="_blank" href="{{ config('app.url') }}">This is the portal URL</a>
            , and you can sign in to our portal using these credentials.<br></p>
        </th>
        <th style="width:20%;"></th>
        <th>
            <p style="text-align:justify;">عزيزنا ولي الأمر الطالب(ة) بالمدرسة<br><b>{{$data['name']}}</b><br>طاب يومكم<br><br>هذا الإيميل لإبلاغكم بأن
            مدرسة الأقصى التكاملية قامت ببناء بوابة جديدة للطلاب لتساعدكم في متابعة أداء أبنائكم الأكاديمي
            وبعض الأمور الأخرى التي يمكنكم الاطلاع عليها داخل البوابة.<br><br><a target="_blank" href="{{ config('app.url') }}">هذا هو رابط البوابة</a>,
            يمكنكم تسجيل الدخول إلى النظام عبر معلومات الدخول التالية<br></p>
        </th>
    </tr>
    <tr>
        <th>Student Name<br><br></th>
        <th>{{$data['name']}}<br><br></th>
        <th>اسم الطالب(ة)<br><br></th>
    </tr>
    <tr>
        <th>Student No<br><br></th>
        <th>{{$data['schoolNo']}}<br><br></th>
        <th>رقم الطالب(ة)<br><br></th>
    </tr>
    <tr>
        <th>Password</th>
        <th>12345678</th>
        <th>كلمة المرور</th>
    </tr>
    <tr>
        <th><br>You are advised to change that password for data security purpose using the "forgot password" option @ login page.<br><br></th>
        <th></th>
        <th><br>ننصحكم بتغيير كلمة المرور للحفاظ على أمن البيانات, وذلك باستخدام خيار "نسيت كلمة المرور" الموجود في صفحة تسجيل الدخول بالبوابة.<br><br></th>
    </tr>
    <tr>
        <th><br><br>Ater signing in, you can see in the main menu an option called "Documentation". You can start exploring the portal by reading that page which include some hints and guidelines.<br><br>Please take note that this is only the first stage of the system. Later on, we will have more features and data to be included. You can see these coming features within the system. They are listed in the main menu, under "Features soon to have" tab.<br><br></th>
        <th></th>
        <th><br><br>بعد تسجيل الدخول, ستجدون في القائمة الرئيسية في البوابة خيار يسمى "دليل النظام". يمنكم بدء استشكاف البوابة بزيارة تلك الصفحة وقراءة محتواها الذي يشمل بعض الشرح والتوضيح لخصائص البوابة.<br><br>نرجو أخذ العلم بأن ما تم إطلاقه الآن من خصائص في النظام هو مرحلة أولى, وسيتبع ذلك مراحل أخرى من البيانات والخصائص داخل نفس النظام. يمكنكم التعرف على تلك الخصائص التي ستتوفر لاحقاً من خلال القائمة الرئيسية في البوابة, تحت خيار "خصائص ستتوفر قريباً".<br><br></th>
    </tr>
</table>

<br><br>

<p style="text-align: justify;">You may recieve this email multiple times this week. So please ignore them (if they have the same title / subject) and we aplogize for that inconvenience in advance.<br></p>
<p style="text-align: justify;">قد تستلمون هذا الإيميل عدة مرات. يمكنكم تجاهل الإيميلات إذا حملت نفس العنوان, ونعتذر مقدماً عن هذا الازعاج.<br></p>

<p style="text-align: justify;">Thank you and welcome back to Al-Aqsa big family.<br></p>
{{ config('app.name') }}
@endcomponent