<!DOCTYPE html>
<html>

    @include('auth.htmlHead')

    <style>
        th {
            text-align:justify;
            padding: 0.5%;
        }
        select {
            margin: auto;
            padding: auto;
            position: relative;
        }
    </style>

    <body class="hold-transition">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                    <a style="text-align:center;" href="{{ url('/') }}" data-tilt>
                        <img src="{{ asset('img/logobgfull.png') }}" width="100%" alt="IMG">
                    </a>

                    <span class="login100-form-title">
                        <br><br>Apply for a new student التقديم لطالب جديد
                    </span>


                    <table style="color:red;">
                        <tbody>
                            <tr>
                                <th><u>Please make sure those documents are available on your PC / Mobile Phone to be able to apply for your child</u></th>
                                <th style="direction:rtl;"><u>نرجو التأكد من وجود الوثائق التالية على جهاز الكمبيوتر / التلفون الخاص بكم لتتمكنوا من استكمال طلب التقديم لطفلكم</u></th>
                            </tr>
                                <tr style="background-color:red; color:white;">
                                <th>Copy of Guardian Passport / IC Card</th>
                                <th style="direction:rtl;">نسخة من جواز سفر ولي الأمر</th>
                            </tr>
                            <tr>
                                <th>Copy of Guardian Malaysian Visa</th>
                                <th style="direction:rtl;">نسخة من التأشيرة (الفيزا) الماليزية لولي الأمر</th>
                            </tr>
                                <tr style="background-color:red; color:white;">
                                <th>Child Passport-size Photo</th>
                                <th style="direction:rtl;">الصورة الشخصية للطفل</th>
                            </tr>
                            <tr>
                                <th>Copy of Child Passport / IC Card</th>
                                <th style="direction:rtl;">نسخة من جواز سفر الطفل</th>
                            </tr>
                                <tr style="background-color:red; color:white;">
                                <th>Copy of Child Malaysian Visa</th>
                                <th style="direction:rtl;">نسخة من التأشيرة (الفيزا) الماليزية للطفل</th>
                            </tr>
                            <tr>
                                <th>Copy of Child Birth Certificate</th>
                                <th style="direction:rtl;">نسخة من شهادة ميلاد الطفل</th>
                            </tr>
                                <tr style="background-color:red; color:white;">
                                <th>Copy of Child's Previous School Certificate</th>
                                <th style="direction:rtl;">نسخة من شهادة المدرسة السابقة للطفل</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center p-t-136"></div>

                    <br><br>

                    <form method="post" action="newStudentRegister" enctype="multipart/form-data">
                        @csrf

                        @include('auth.rFields')
                        <br>
                        @include('auth.sFields')
                    </form>
                </div>
            </div>
        </div>


        <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
        <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>