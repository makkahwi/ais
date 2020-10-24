@if (Auth::user()->role_id != 7 )
<i class="fas fa-user-graduate"></i> @include('students.title') الطلاب
@else
Profile الملف الشخصي
@endif