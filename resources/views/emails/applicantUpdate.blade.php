@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an auto generated confirmation email from {{ config('app.name') }}<br> </h2>

<table style="border: none;">
    <tr>
        <th>
            <p style="text-align:justify;">We would like to inform you that updates were made to your application for a new student. You can
            <a target="_blank" href="{{ config('app.url') }}/login">Login</a> to our portal
            to see the updates using these credentials.<br></p>
        </th>
        <th style="width:30%;"></th>
        <th>
            <p style="text-align:right;">نود إشعاركم بوجود تحديث على طلبكم للالتحاق بالمدرسة. يمكنكم
            <a target="_blank" href="{{ config('app.url') }}/login">تسجيل الدخول</a>
            إلى بوابتنا لمطالعة التحديث على طلب الالتحاق عبر بيانات الدخول التالية<br></p>
        </th>
    </tr>
    <tr>
        <th>Student No<br><br></th>
        <th>{{$data['studentNo']}}<br><br></th>
        <th>رقم الطالب<br><br></th>
    </tr>
    <tr>
        <th>Password</th>
        <th>Same as Student Passport Number<br>نفس رقم جواز سفر الطالب</th>
        <th>كلمة المرور</th>
    </tr>
</table>

<br><br>

<p style="text-align: justify;">Thank you for applying to our school.<br></p>
{{ config('app.name') }}
@endcomponent