<tr>
    <td>{{ $mark->type->sem->title }}, {{ $mark->type->sem->year->title }}</td>
    <td>{{ $mark->type->classroom->title }}</td>
    <td>{{ $mark->type->course->title }}</td>
    <td>{{ $mark->type->title }}</td>
    <td>{{ $mark->student->user->name }}</td>
    @if ($mark->type->classroom->level_id < 4 || $mark->type->classroom->level_id == 13)
        @if($mark->markValue/$mark->type->max*100 >= 90)
            <td>Excellent ممتاز</td>
        @elseif($mark->markValue/$mark->type->max*100 >= 80)
            <td>Very good جيد جداً</td>
        @elseif($mark->markValue/$mark->type->max*100 >= 70)
            <td>Good جيد</td>
        @elseif($mark->markValue/$mark->type->max*100 >= 60)
            <td>Average متوسط</td>
        @elseif($mark->markValue/$mark->type->max*100 >= 50)
            <td>Satisfactory مقبول</td>
        @else
            <td>Failed راسب</td>
        @endif
    @else
    <td class="table-column">{{ $mark->markValue }} / {{ $mark->type->max }}</td>
    @endif
    <td class="table-column">{{ $mark->note }}</td>
    <td>
        <div class='btn-group'>

            <!-- Showing Button-->
            <button data-toggle="modal" data-target="#show-modal" id="showing" data-mark="{{$mark->type->title}}" data-sem="{{ $mark->type->sem->title }} | {{ $mark->type->sem->year->title }}" data-class="{{$mark->type->classroom->title}}" data-course="{{$mark->type->course->title}}" data-student="{{$mark->student->user->name}}" data-markv="{{$mark->markValue}}" data-fmark="{{$mark->type->max}}" data-note="{{$mark->note}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            @can('update', App\Models\marks::class)
                @if(Auth::user()->role_id <6 || $editby < $mark->created_at)

                    <!-- Editing Button-->
                    <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$mark->id}}" data-type="{{$mark->type_id}}" data-sem="{{ $mark->type->sem_id }}" data-level="{{$mark->type->classroom->level_id}}" data-class="{{$mark->type->classroom_id}}" data-course="{{$mark->type->course_id}}" data-student="{{$mark->studentNo}}" data-markv="{{$mark->markValue}}" data-fmark="{{$mark->type->max}}" data-note="{{$mark->note}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>

                @endif
            @endcan

            @can('delete', App\Models\marks::class)

                <!-- Deleting Button-->
                <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$mark->id}}" data-title="{{$mark->type->classroom->title}} | {{$mark->type->course->title}} | {{$mark->studentNo}} {{$mark->student->user->name}} | {{ $mark->markValue }} / {{ $mark->type->max }} @ {{$mark->type->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

            @endcan

            @can('appeal', [App\Models\marks::class, $mark])

                <!-- Complain Button-->
                <button data-toggle="modal" data-target="#appeal-modal" id="appeal" data-teacher="{{$mark->teacher_id}}" data-id="{{$mark->id}}" data-mark="{{$mark->type->title}}" data-sem="{{ $mark->type->sem->title }}, {{ $mark->type->sem->year->title }}" data-class="{{$mark->type->classroom->title}}" data-course="{{$mark->type->course->title}}" data-student="{{$mark->student->user->name}}" data-student_id="{{$mark->studentNo}}" data-markv="{{$mark->markValue}}" data-fmark="{{$mark->type->max}}" data-note="{{$mark->note}}" class="btn btn-danger btn-xs"><i class="fa fa-edit"></i> Appeal طلب مراجعة</button>
        
            @endcan

        </div>

    </td>
</tr>