@if (Auth::user()->role_id != 7)
<i class="fas fa-user-edit"></i> @include('applicants.title') المتقدمون
@else
Profile الملف الشخصي
@endif