@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an auto generated confirmation email from {{ config('app.name') }}<br> </h2>

<table style="border: none;">
    <tr>
        <th>
            <p style="text-align:justify;">We happily received your application for a job vacancy<br></p>
        </th>
        <th style="width:30%;"></th>
        <th>
            <p style="text-align:right;">لقد استلمنا طلبكم  للتقديم على فرصة عمل<br></p>
        </th>
    </tr>
    <tr>
        <th>Below are the data entered by you<br><br></th>
        <th></th>
        <th>أدناه البيانات المدخلة من قبلكم<br><br></th>
    </tr>
    <tr>
        <th colspan=3><h2>Applicant Data بيانات المتقدم</h2></th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>English Full Name</th>
        <th><b>{{$data['eName']}}</b></th>
        <th>الاسم الإنجليزي الكامل</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Arabci Full Name</th>
        <th><b>{{$data['aName']}}</b></th>
        <th>الاسم العربي الكامل</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Gender</th>
        <th><b>{{$data['gender']}}</b></th>
        <th>الجنس</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Date of Birth</th>
        <th><b>{{$data['dob']}}</b></th>
        <th>تاريخ الميلاد</th>
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
        <th><b>{{$data['hAddress']}}</b></th>
        <th>عنوان السكن</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Nationality</th>
        <th><b>{{$data['nation']}}</b></th>
        <th>الجنسية </th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Passport No</th>
        <th><b>{{$data['ppno']}}</b></th>
        <th>رقم جواز السفر</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Photo</th>
        <th><b><a href="{{ config('app.url') }}/{{$data['photoo']}}">Link</a></b></th>
        <th>الصورة الشخصية</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>CV</th>
        <th><b><a href="{{ config('app.url') }}/{{$data['cv']}}">Link</a></b></th>
        <th>السيرة الذاتية</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Academic Certificate</th>
        <th><b><a href="{{ config('app.url') }}/{{$data['academic']}}">Link</a></b></th>
        <th>الشهادات الأكاديمية</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Experience Certificate</th>
        <th><b><a href="{{ config('app.url') }}/{{$data['experience']}}">Link</a></b></th>
        <th>شهادات الخبرة</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Additional Documents</th>
        <th><b><a href="{{ config('app.url') }}/{{$data['additional1']}}">Link</a></b></th>
        <th>وثائق إضافية</th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Additional Documents</th>
        <th><b><a href="{{ config('app.url') }}/{{$data['additional2']}}">Link</a></b></th>
        <th>وثائق إضافية</th>
    </tr>
    <tr>
        <th colspan="3"><br><br></th>
    </tr>
    <tr>
        <th><p style="text-align: justify;">Thank you for applying to our school, we will contact you soon to have an interview. We hope you would be accpeted & be part of our big family.<br></p></th>
        <th></th>
        <th><p style="text-align: justify; direction:rtl;">نشكركم على التقديم للعمل بمدرستنا, سنتواصل معكم قريباً لترتيب مقابلة العمل. نرجو أن تقبلوا للوظيفة وتكونوا جزءاً من أسرة مدرستنا الكبيرة.<br></p></th>
    </tr>
</table>

<br>

{{ config('app.name') }}
@endcomponent