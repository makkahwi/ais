@if (Auth::user()->role_id < 6)
@include('users.title') المستخدمون
@else
@include('users.title') الملف الشخصي
@endif