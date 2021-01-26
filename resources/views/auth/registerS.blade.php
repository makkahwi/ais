<!DOCTYPE html>
<html>

  @include('auth.htmlHead')

  <body class="hold-transition">
    <div class="modal-dialog">
      <div class="register-logo">
        <a style="color:#fff;" href="{{ url('/') }}"><b>@include('titles')</b></a>
      </div>

      <div class="register-box-body">
        <h4 class="login-box-msg"><u>Apply for a new student التقديم لطالب جديد</u></h4>

        <form method="post" action="{{ url('/register') }}">
          @csrf

          @include('auth.sFields')
        </form>

        <a href="{{ url('/login') }}" class="text-center">I already Applied / Registered</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
