<div>
  <div class="col-md-6">
    <br><h4 style="line-height: 1.5;">Dear Applicant.. Welcome to the online information system of<br><b class="theme-main">{{ config('app.sname') }}</b></h4>
    <br><h4><u>You can follow your application process through this portal</u></h4>
    <br><h4 style="text-align: justify; line-height: 1.5;">Access to this portal could be done using your school no: <b style="color:red;">{{ Auth::user()->schoolNo }}</b> and <b style="color:red;">applicant passport number</b> as a password</h4>
    <br><h3 style="text-align:center;">Currently, its status is</h3>

    <h3 style="text-align:center;">
      @if (Auth::user()->status_id == 6 )
        <h3 style="text-align:center; line-height: 1.5;" class="text-warning">Your Application was <b>RECIEVED</b>, and soon to be reviewed and proccessed</h3>
      @elseif (Auth::user()->status_id == 7 )
        <h3 style="text-align:center; line-height: 1.5;" class="text-success">CONGRATULATIONS, your application was <b>ACCEPTED in {{Auth::user()->student->classroom->level->description}} Level</b>, please contact us soon to make the payment & complete your registration proccess</h3>
      @else
        <h3 style="text-align:center; line-height: 1.5;" class="text-danger">We are very sorry, your application was <b>REJECTED</b>. You may contact us to clarify the reasons and the ability to flip the decision</h3>
      @endif
    </h3>
  </div>

  <div class="col-md-6">
    <br><h4 style="text-align:right; line-height: 1.5;">عزيزنا المتقدم(ة).. أهلاً بكم في نظام المعلومات الإلكتروني الخاص بـ<br><b class="theme-main">مدرسة الأقصى التكاملية - ماليزيا</b></h4>
    <br><h4 style="text-align:right;"><u>بإمكانك متابعة مستجدات طلبكم للتقديم إلى المدرسة عبر هذه البوابة</u></h4>
    <br><h4 style="text-align:right; line-height: 1.5;">الدخول إلى هذه البوابة يتم عبر استخدام الرقم المدرسي الخاص بكم: <b style="color:red;">{{ Auth::user()->schoolNo }}</b> وكلمة المرور: <b style="color:red;">رقم جواز المتقدم</b> </h4>
    <br><h3 style="text-align:center;">الآن, الحالة هي</h3>

    <h3 style="text-align:center;">
      @if (Auth::user()->status_id == 6 )
        <h3 style="text-align:center; line-height: 1.5;" class="text-warning"><b>تم استلام طلبكم</b> بنجاح, وستتم قريباً مراجعته ومعالجته</h3>
      @elseif (Auth::user()->status_id == 7 )
        <h3 style="text-align:center; line-height: 1.5;" class="text-success">نبارك لكم <b>قبول طلبكم</b> للالتحاق بالمدرسة في المرحلة الدراسية @if (Auth::user()->student->classroom->level_id > 1) {{Auth::user()->student->classroom->level_id-1}} @else الروضة @endif, نرجو مراجعتنا قريباً لاستكمال إجراءات التسجيل ودفع الرسوم</h3>
      @else
        <h3 style="text-align:center; line-height: 1.5;" class="text-danger">للآسف الشديد, تم <b>رفض طلبكم</b> للانضمام إلى المدرسة. يمكنكم التواصل معنا لاستيضاح أسباب الرفض وإمكانية إعادة التقديم والقبول</h3>
      @endif
    </h3>
  </div>
</div>