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
                    <!--
                    <div class="bg-warning text-black p-5 m-3 rounded" style="text-align: justify;"><h4>Dead parents, in case you have any problems to log in, please contact the school vice principal about it. If you have any issues with portal other than login issue, you may use the form that will appear before you after logging in to communicate with system admin.<br><br></h4>
                    <h4 style="direction: rtl;">الأعزاء أولياء الأمور, في حال وجود أي مشكلة في تسجيل الدخول إلى النظام, نرجو التواصل مع نائب مدير المدرسة بخصوصها. في حال وجود مشاكل أخرى لا تتعلق بتسجيل الدخول, بإمكانكم استخدام نموذج التقييم الذي سيظهر أمامكم بعد تسجيل الدخول للتواصل مع مدير النظام.</h4></div>
                    -->
                    <div class="login100-pic js-tilt" data-tilt>
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('img/logobg.png') }}" alt="IMG">
                        </a>
                    </div>

                    <form method="post" action="{{ url('/login') }}" class="login100-form validate-form">

                        @csrf
                        
                        @include('flash::message')
                        @include('adminlte-templates::common.errors')
                        <span class="login100-form-title">
                            Login
                        </span>

                        <div class="wrap-input100 validate-input has-feedback {{ $errors->has('schoolNo') ? ' has-error' : '' }}">
                            <input class="input100" type="text" class="form-control" name="schoolNo" value="{{ old('schoolNo') }}" placeholder="School No الرقم المدرسي">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            <span class="form-control-feedback"></span>
                        </div>

                        <div class="wrap-input100 has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="input100" type="password" class="form-control" placeholder="Password كلمة المرور" name="password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            <span class="form-control-feedback"></span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="{{ url('/password/reset') }}">Forgot password نسيت كلمة المرور</a>
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