@include('flash::message')
@include('adminlte-templates::common.errors')

<div class="row col-md-6">
    <h3 style="line-height:1.5;"> {{ Auth::user()->eName }}Welcome to online information system of<br>Al-Aqsa Integrated School - Malaysia</h3><br>
    <h4 style="text-align:justify; line-height:1.5;">You may begin browsing the portal using the menu on your left side (Upper left button for mobile phone)</h4><br>
    <br><br>
    <h4 style="color:red; text-align:justify; line-height:1.5;">Please note that the system is still under testing stage, so in case of having any problems, complaints, comments or you'd like to rate our new portal, please fill up the form below and submit anytime you want</h4><br>
</div>

<div class="row col-md-6" style="text-align:right;">
    <h3 style="line-height: 1.5;"> {{ Auth::user()->aName }}أهلاً بكم في نظام المعلومات الإلكتروني الخاص بـ<br> مدرسة الأقصى التكاملية - ماليزيا</h3><br>
    <h4 style="text-align:right; line-height:1.5;">بإمكانكم البدء باستخدام البوابة من خلال القائمة الموجودة على يسار الشاشة (أعلى يسار الشاشة للهاتف الجوال)</h4><br>
    <br><br>
    <h4 style="color:red; line-height: 1.5;">نرجو أخذ العلم أن هذا النظام ما زال تحت الاختبار, ولذا في حالة وجود أي مشاكل, شكاوى, تعليقات, اقتراحات أو في حال أردتم تقييم نظامنا, نرجو ملء النموذج أدناه وإرساله إلينا في أي وقت</h4><br>
</div>

<div class="row col-md-12">
    @include('home.commentsForm')
</div>