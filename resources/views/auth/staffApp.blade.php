<!DOCTYPE html>
<html>

  @include('auth.htmlHead')

  <style>
    th {
      text-align:justify;
      padding: 0.5%;
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
            <br><br>New Staff Registration تسجيل موظف جديد
          </span>

          <table style="color:red;">
            <tbody>
              <tr>
                <th style="padding: 0.5%;"><u>Please make sure those documents are available on your PC / Mobile Phone to be able to complete your registration form</u></th>
                <th style="text-align: right; padding: 0.5%;"><u>نرجو التأكد من وجود الوثائق التالية على جهاز الكمبيوتر / التلفون الخاص بكم لتتمكنوا من استكمال نموذج التسجيل</u></th>
              </tr>
              <tr style="background-color:red; color:white;">
                <th>Your Passport-size Photo</th>
                <th style="direction:rtl;">الصورة الشخصية الخاصة بكم</th>
              </tr>
              <tr>
                <th>Copy of Your Passport / IC Card</th>
                <th style="direction:rtl;">نسخة من جواز سفركم</th>
              </tr>
              <tr style="background-color:red; color:white;">
                <th>Copy of Your Malaysian Visa</th>
                <th style="direction:rtl;">نسخة من تأشيرتكم (الفيزا) الماليزية</th>
              </tr>
              <tr>
                <th style="padding: 0.5%;">Copy of Academic Certificates</th>
                <th style="text-align: right; padding: 0.5%;">نسخة من الشهادات الأكاديمية</th>
              </tr>
              <tr style="background-color:red; color:white;">
                <th style="padding: 0.5%;">Copy of Experiences Certificates</th>
                <th style="text-align: right; padding: 0.5%;">نسخة من شهادات الخبرة</th>
              </tr>
              <tr>
                <th>Copy of Your Health Insurance Policy Card / Letter</th>
                <th style="direction:rtl;">نسخة من رسالة / كرت بوليصة التأمين الصحي</th>
              </tr>
            </tbody>
          </table>

          <div class="text-center p-t-136"></div>

          <br><br>

          <form method="post" action="staffReg" enctype="multipart/form-data">
            @csrf

            @include('auth.tFields')
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