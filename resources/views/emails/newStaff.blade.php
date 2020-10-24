@component('mail::message')
<img src="{{ asset('img/wLogo.png') }}" alt="" width="100%">

<hr><br>

<h2>This is an auto generated confirmation email from {{ config('app.name') }}<br> </h2>

<table style="border: none;">
    <tr>
        <th>
            <p style="text-align:justify;">We happily received your staff registration form. From now on, you can
            <a target="_blank" href="{{ config('app.url') }}/login">Login</a> to our portal using these credentials.<br></p>
        </th>
        <th style="width:30%;"></th>
        <th>
            <p style="text-align:right;">لقد استلمنا طلبكم للتسجيل كموظف بالمدرسة. من الآن وصاعداً, يمكنكم
            <a target="_blank" href="{{ config('app.url') }}/login">تسجيل الدخول</a>
            إلى بوابتنا عبر بيانات الدخول التالية<br></p>
        </th>
    </tr>
    <tr>
        <th>Staff No<br><br></th>
        <th>{{$data['staffNo']}}<br><br></th>
        <th>رقم الموظف<br><br></th>
    </tr>
    <tr>
        <th>Password</th>
        <th>Same as Staff Passport Number<br>نفس رقم جواز سفر الموظف</th>
        <th>كلمة المرور</th>
    </tr>
    <tr>
        <th><br><br><br>Below are the data entered by you<br><br></th>
        <th></th>
        <th><br><br><br>أدناه البيانات المدخلة من قبلكم<br><br></th>
    </tr>
    <tr>
        <th colspan=3><h2><br><br>Staff Data بيانات الموظف</h2></th>
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
        <th>Email</th>
        <th><b>{{$data['email']}}</b></th>
        <th>البريد الإلكتروني</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Phone No</th>
        <th><b>{{$data['phone']}}</b></th>
        <th>رقم التلفون</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Home Address</th>
        <th><b>{{$data['address']}}</b></th>
        <th>عنوان السكن</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Nationality</th>
        <th><b>{{$data['nation']}}</b></th>
        <th>الجنسية</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Passport No</th>
        <th><b>{{$data['ppno']}}</b></th>
        <th>رقم جواز السفر</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Passport Expiry</th>
        <th><b>{{$data['ppExpiry']}}</b></th>
        <th>صلاحية جواز السفر</th>
    </tr>
    <tr>
        <th colspan=3><h2>Emergency Contact Data بيانات الاتصال للطوارئ</h2></th>
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
        <th><b>{{$data['rGender']}}</b></th>
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
        <th><b>{{$data['rEmail']}}</b></th>
        <th>البريد الإلكتروني</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Phone No</th>
        <th><b>{{$data['rPhone']}}</b></th>
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
</table>

<br><br>

<p style="text-align: justify;">Soon your data will be varified and you'll become an active user on our system<br></p>
<p style="text-align: justify;">Thank you and welcome to our big family<br></p>
{{ config('app.name') }}
@endcomponent