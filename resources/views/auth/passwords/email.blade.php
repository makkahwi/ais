<!DOCTYPE html>
<html>
  
  @include('auth.htmlHead')

  <style>
    .input100{
      padding: 0 20px 0 50px;
    }
  </style>

  <body class="hold-transition">
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <a href="{{ url('/') }}">
              <img src="{{ asset('img/logobg.png') }}" alt="IMG">
            </a>
          </div>

          <form method="post" action="{{ url('/password/email') }}" class="login100-form validate-form">

            @csrf

            <span class="login100-form-title">
              Forgot Your Password?
            </span>

            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <div class="wrap-input100 has-feedback {{ $errors->has('schoolNo') ? ' has-error' : '' }}">
              <input class="input100" type="integer" class="form-control" name="schoolNo" value="{{ old('schoolNo') }}" placeholder="School No الرقم المدرسي">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              @if ($errors->has('schoolNo'))
                <span class="help-block">
                  <b>{{ $errors->first('schoolNo') }}</b>
                </span>
              @endif
            </div>
            
            <div class="container-login100-form-btn">
              <button class="login100-form-btn">
                Send Link إرسال الرابط
              </button>
            </div>

            <div class="text-center p-t-12">
              <a class="txt2" href="{{ url('/login') }}">Login تسجيل الدخول</a>
            </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="#">
                <a href="{{ url('/register') }}">New student application التقديم لطالب جديد</a>
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>


    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script >
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>