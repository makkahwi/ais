@foreach($students as $student)
@if ($student->studentNo == Auth::user()->schoolNo)
@if ($student->financial == 1)

    @include('results.tableS')

@else

    <h3 style="text-align: justify; line-height:1.5;">Due to your <span style="color:red;">FINANCIAL unsettled case</span>, you can't see your results. You may contact the school to settle and allow you to see your results.</h3>
    <h3 style="text-align: right; line-height:1.5;">نظراً لعدم تسويتكم <span style="color:red;">للدفعات المالية المترتبة عليكم</span>, لا يمكنكم الاطلاع على النتائج الدراسية الخاصة بكم. بإمكانكم التواصل مع إدارة المدرسة لتسوية الأوضاع المالية والسماح لكم بالاطلاع على النتائج الدراسية</h3>

@endif
@endif
@endforeach