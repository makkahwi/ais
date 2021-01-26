@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7" style="margin-top: 2%">
        <div class="box">
          <h3 class="box-title" style="padding: 2%">Verify Your Email Address تأكيد بريدك الإلكتروني</h3>

          <div class="box-body">
            @if (session('resent'))
              <div class="alert alert-success" role="alert">A new verification link has been sent to your email address<br>تم إرسال رابط تأكيد جديد لعنوان بريدكم الإلكتروني</div>
            @endif
            <p>Before proceeding, please check your email for a verification link.If you did not receive the email<br>
              قبل المتابعة, نرجو مراجعة بريدكم الإلكتروني ورابط التأكيد المرسل إليكم. في حال عدم توفر الرسالة أو الرابط</p>
            <form class="d-inline" method="post" action="{{ route('verification.resend') }}">
              @csrf
              <button type="submit" class="btn btn-link">
                click here to request another اضغط هنا للإرسال مرة أخرى
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection