@if (Auth::user()->role_id != 7 )
Students
@else
Profile
@endif