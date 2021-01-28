@foreach($classroom->students as $student)
  <tr>
    <td>
      {{$sem->title}}, {{$sem->year->title}}
    </td>
    <td>
      {{$classroom->title}}
    </td>
    <td>
      {{$student->user->name}}
    </td>
    <td>
      @foreach($student->marks as $mark)
        @if($mark->type->course_id == 0 && $mark->type->sem_id == $sem->id)
          {{ $mark->markValue }}
          @break
        @endif
      @endforeach
    </td>
    <td>
      <div class='btn-group'>

        <!-- Showing Button-->
        <button data-toggle="modal" data-target="#show-modal" id="showing" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

      </div>
    </td>
  </tr>
@endforeach