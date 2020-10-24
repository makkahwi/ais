@if (Auth::user()->role_id != 7)
Applicants
@else
Profile
@endif