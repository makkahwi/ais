@if (Auth::user()->role_id == 8)

  @foreach($applicants as $applicant)
    
    @if ($applicant->studentNo == Auth::user()->schoolNo) 

      @include('users.profile.profileFieldsA')

    @endif
        
  @endforeach

@elseif (Auth::user()->role_id == 7)

  @foreach($students as $student)
    
    @if ($student->studentNo == Auth::user()->schoolNo) 

      <form action="{{route('confLetter')}}">

        @include('users.profile.profileFieldsS')

      </form>

    @endif
        
  @endforeach

@else

  @foreach($teachers as $teacher)
    
    @if ($teacher->staffNo == Auth::user()->schoolNo) 

      @include('users.profile.profileFieldsT')

    @endif
        
  @endforeach
  
@endif

@include('users.profile.updateSModal')

@include('users.profile.updateRModal')

@include('users.profile.updateEModal')