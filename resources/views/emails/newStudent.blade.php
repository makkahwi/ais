@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an auto generated confirmation email from {{ config('app.name') }}<br> </h2>

<table style="border: none;">
    <tr>
        <th>
            <p style="text-align:justify;">We happily received your application for new student. From now on, you can
            <a target="_blank" href="{{ config('app.url') }}/login">Login</a> to our portal
            to follow up your application process using these credentials.<br></p>
        </th>
        <th style="width:30%;"></th>
        <th>
            <p style="text-align:right;">لقد استلمنا طلبكم للالتحاق بالمدرسة. من الآن وصاعداً, يمكنكم
            <a target="_blank" href="{{ config('app.url') }}/login">تسجيل الدخول</a>
            إلى بوابتنا لمتابعة تحديثات طلب الالتحاق عبر بيانات الدخول التالية<br></p>
        </th>
    </tr>
    <tr>
        <th>SchoolNo<br><br></th>
        <th>{{$data['schoolNo']}}<br><br></th>
        <th>الرقم المدرسي<br><br></th>
    </tr>
    <tr>
        <th>Password</th>
        <th>Same as Student Passport Number<br>نفس رقم جواز سفر الطالب</th>
        <th>كلمة المرور</th>
    </tr>
    <tr>
        <th><br><br><br>Below are the data entered by you<br><br></th>
        <th></th>
        <th><br><br><br>أدناه البيانات المدخلة من قبلكم<br><br></th>
    </tr>
    <tr>
        <th colspan=3><h2>Guardian Data بيانات ولي الأمر</h2></th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>English Full Name</th>
        <th><b>{{$data['reName']}}</b></th>
        <th>الاسم الإنجليزي الكامل</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Arabci Full Name</th>
        <th><b>{{$data['raName']}}</b></th>
        <th>الاسم العربي الكامل</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Gender</th>
        <th><b>{{$data['rgender']}}</b></th>
        <th>الجنس</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Relation</th>
        <th><b>{{$data['relation']}}</b></th>
        <th>العلاقة</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Job Describtion</th>
        <th><b>{{$data['job']}}</b></th>
        <th>المهنة</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Work Place</th>
        <th><b>{{$data['org']}}</b></th>
        <th>مكان العمل</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Email</th>
        <th><b>{{$data['remail']}}</b></th>
        <th>البريد الإلكتروني</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Phone No</th>
        <th><b>{{$data['rphone']}}</b></th>
        <th>رقم التلفون</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Home Address</th>
        <th><b>{{$data['rhAddress']}}</b></th>
        <th>عنوان السكن</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Work Address</th>
        <th><b>{{$data['rwAddress']}}</b></th>
        <th>عنوان العمل</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Nationality</th>
        <th><b>{{$data['rnation']}}</b></th>
        <th>الجنسية </th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Passport No</th>
        <th><b>{{$data['rppno']}}</b></th>
        <th>رقم جواز السفر</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Passport Expiry</th>
        <th><b>{{$data['rppExpiry']}}</b></th>
        <th>صلاحية جواز السفر</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Visa Expiry</th>
        <th><b>{{$data['rvisaExpiry']}}</b></th>
        <th>صلاحية التأشيرة الماليزية</th>
    </tr>
    <tr>
        <th colspan=3><h2><br><br>Student Data بيانات الطالب</h2></th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>English Full Name</th>
        <th><b>{{$data['eName']}}</b></th>
        <th>الاسم الإنجليزي الكامل</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Arabic Full Name</th>
        <th><b>{{$data['aName']}}</b></th>
        <th>الاسم العربي الكامل</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Date of Birth</th>
        <th><b>{{$data['dob']}}</b></th>
        <th>تاريخ الميلاد</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Gender</th>
        <th><b>{{$data['gender']}}</b></th>
        <th>الجنس</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Level</th>
        <th><b>{{$data['level']-1}}</th>
        <th>المستوى الدراسي</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Student Email</th>
        <th><b>{{$data['email']}}</b></th>
        <th>البريد الإلكتروني للطالب</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Student Phone No</th>
        <th><b>{{$data['phone']}}</b></th>
        <th>رقم التلفون للطالب</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Home Address</th>
        <th><b>{{$data['address']}}</b></th>
        <th>عنوان السكن</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Nationality</th>
        <th><b>{{$data['nation']}}</b></th>
        <th>الجنسية</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Passport No</th>
        <th><b>{{$data['ppno']}}</b></th>
        <th>رقم جواز السفر</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Passport Expiry</th>
        <th><b>{{$data['ppExpiry']}}</b></th>
        <th>صلاحية جواز السفر</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Visa Expiry</th>
        <th><b>{{$data['visaExpiry']}}</b></th>
        <th>صلاحية التأشيرة الماليزية</th>
    </tr>
</table>

<br><br>

<p style="text-align: justify;">Thank you for applying to our school, once you are accepted we will email you. We hope you would be accpeted & be part of our big family<br></p>
{{ config('app.name') }}
@endcomponent