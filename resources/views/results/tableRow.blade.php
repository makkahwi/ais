@foreach($classroom->students as $student)
  @can('view', [App\Models\student::class, $student])
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
      <p hidden>{{ $value = 0 }}</p>
      <p hidden>{{ $grade = '-' }}</p>
      @foreach($student->marks as $mark)
        @if($mark->type->course_id == 0 && $mark->type->sem_id == $sem->id)
          <p hidden>{{ $value = $mark->markValue }}</p>
          <p hidden>{{ $grade = $mark->note }}</p>
          @break
        @endif
      @endforeach
      <td>
        {{$value}}
      </td>
      <td>
        {{$grade}}
      </td>
      <td>
        <div class='btn-group'>

          <!-- Showing Button-->
          <button data-toggle="modal" id="showing" data-target="#show-modal" data-sem="{{$sem->id}}" data-semester="{{$sem->title}}, {{$sem->year->title}}" data-studentno="{{$student->studentNo}}" data-student="{{$student->studentNo}} | {{$student->user->name}}" data-value="{{$value}}" data-grade="{{$grade}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

        </div>
      </td>
    </tr>
  @endcan
@endforeach