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
                        <h4>
                            @include('flash::message')
                            @include('adminlte-templates::common.errors')
                        </h4>
                    </span>

                    <span class="login100-form-title">
                        <br><br>Apply for a job vacancy التقديم لفرصة عمل
                    </span>

                    <table style="color:red;">
                        <tbody>
                            <tr>
                                <th style="padding: 0.5%;"><u>Please make sure those documents are available on your PC / Mobile Phone to be able to apply for a job vacancy</u></th>
                                <th style="text-align: right; padding: 0.5%;"><u>نرجو التأكد من وجود الوثائق التالية على جهاز الكمبيوتر / التلفون الخاص بكم لتتمكنوا من استكمال طلب التقديم لفرصة العمل</u></th>
                            </tr>
                            <tr style="background-color:red; color:white;">
                                <th style="padding: 0.5%;">Your Resume Sheet / CV</th>
                                <th style="text-align: right; padding: 0.5%;">السيرة الذاتية</th>
                            </tr>
                            <tr>
                                <th style="padding: 0.5%;">Copy of Academic Certificates Required</th>
                                <th style="text-align: right; padding: 0.5%;">نسخة من الشهادات الأكاديمية المطلوبة للوظيفة</th>
                            </tr>
                            <tr style="background-color:red; color:white;">
                                <th style="padding: 0.5%;">Copy of Experiences Certificates Required</th>
                                <th style="text-align: right; padding: 0.5%;">نسخة من شهادات الخبرة المطلوبة للوظيفة</th>
                            </tr>
                            <tr>
                                <th style="padding: 0.5%;">Copy of Any Supporting Related Documents / Optional</th>
                                <th style="text-align: right; padding: 0.5%;">نسخة من أي وثائق إضافية ذات صلة بالوظيفة / اختياري</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center p-t-136"></div>

                    <br><br>

                    <form method="post" action="jobApp" enctype="multipart/form-data">
                        @csrf

                        @include('auth.jFields')
                        <br>
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