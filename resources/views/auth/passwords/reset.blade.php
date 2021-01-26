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

          <form method="post" action="{{ url('/password/reset') }}" class="login100-form validate-form">

            @csrf
            
            @include('flash::message')
            @include('adminlte-templates::common.errors')
            <span class="login100-form-title">
              Reset your password
            </span>

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="wrap-input100 form-group has-feedback {{ $errors->has('schoolNo') ? ' has-error' : '' }}">
              <input class="input100" type="integer" class="form-control" name="schoolNo" value="{{ old('schoolNo') }}" placeholder="School No الرقم المدرسي">
              <span class="form-control-feedback"></span>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              @if ($errors->has('schoolNo'))
                <span class="help-block">
                <strong>{{ $errors->first('schoolNo') }}</strong>
              </span>
              @endif
            </div>

            <div class="wrap-input100 form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
              <input class="input100" type="password" class="form-control" name="password" placeholder="New Password كلمة المرور الجديدة">
              <span class="form-control-feedback"></span>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>

            <div class="wrap-input100 form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <input class="input100" type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password تأكيد كلمة المرور الجديدة">
              <span class="form-control-feedback"></span>
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
              @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
              @endif
            </div>
            
            <div class="container-login100-form-btn">
              <button class="login100-form-btn">
                Reset Password تغيير كلمة المرور
              </button>
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