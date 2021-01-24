@if (Auth::user()->role_id < 6)
<i class="fas fa-users"></i> @include('users.title') المستخدمون
@else
<i class="fas fa-user"></i> @include('users.title') الملف الشخصي
@endif