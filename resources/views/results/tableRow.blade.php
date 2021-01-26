<tr>
  <td>{{ $marktype->sem->title }}, {{ $marktype->sem->year->title }}</td>
  <td>{{ $classroom->title }}</td>
  <td>{{ $course->title }}</td>
  <td>{{ $marktype->title }}</td>
  <td>{{ $mark->student->user->name }}</td>
  @if ($classroom->level_id < 4 || $classroom->level_id == 13)
    @if($mark->markValue/$marktype->max*100 >= 90)
      <td>Excellent ممتاز</td>
    @elseif($mark->markValue/$marktype->max*100 >= 80)
      <td>Very good جيد جداً</td>
    @elseif($mark->markValue/$marktype->max*100 >= 70)
      <td>Good جيد</td>
    @elseif($mark->markValue/$marktype->max*100 >= 60)
      <td>Average متوسط</td>
    @elseif($mark->markValue/$marktype->max*100 >= 50)
      <td>Satisfactory مقبول</td>
    @else
      <td>Failed راسب</td>
    @endif
  @else
  <td class="table-column">{{ $mark->markValue }} / {{ $marktype->max }}</td>
  @endif
  <td class="table-column">{{ $mark->note }}</td>
  <td>
    <div class='btn-group'>

      <!-- Showing Button-->
      <button data-toggle="modal" data-target="#show-modal" id="showing" data-mark="{{$marktype->title}}" data-sem="{{ $marktype->sem->title }}, {{ $marktype->sem->year->title }}" data-class="{{$classroom->title}}" data-course="{{$course->title}}" data-student="{{$mark->student->user->name}}" data-markv="{{$mark->markValue}}" data-fmark="{{$marktype->max}}" data-note="{{$mark->note}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

      @can('update', App\Models\marks::class)
        @if(Auth::user()->role_id <6 || $editby < $mark->created_at)
          <!-- Editing Button-->
          <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$mark->id}}" data-type="{{$marktype->id}}" data-sem="{{ $marktype->sem_id }}" data-level="{{$classroom->level_id}}" data-class="{{$marktype->classroom_id}}" data-course="{{$marktype->course_id}}" data-student="{{$mark->studentNo}}" data-markv="{{$mark->markValue}}" data-fmark="{{$marktype->max}}" data-note="{{$mark->note}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
        @endif
      @endcan

      @can('delete', App\Models\marks::class)
        <!-- Deleting Button-->
        <button data-toggle="modal" data-target="#delete-modal" id="deleting"
        data-id="{{$mark->id}}"
        data-title="{{$classroom->title}} | {{$course->title}} | {{$mark->studentNo}} {{$mark->student->user->name}} | {{ $mark->markValue }} / {{ $marktype->max }} @ {{$marktype->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
      @endcan

      @can('appeal', [App\Models\marks::class, $mark])
        <!-- Complain Button-->
        <button data-toggle="modal" data-target="#appeal-modal" id="appeal" data-teacher="{{$mark->teacher_id}}" data-id="{{$mark->id}}" data-mark="{{$marktype->title}}" data-sem="{{ $marktype->sem->title }}, {{ $marktype->sem->year->title }}" data-class="{{$classroom->title}}" data-course="{{$course->title}}" data-student="{{$mark->student->user->name}}" data-student_id="{{$mark->studentNo}}" data-markv="{{$mark->markValue}}" data-fmark="{{$marktype->max}}" data-note="{{$mark->note}}" class="btn btn-danger btn-xs"><i class="fa fa-edit"></i> Appeal طلب مراجعة</button>
      @endcan

    </div>

  </td>
</tr>