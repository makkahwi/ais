<tr>
    <th>{{ $type->title }}</th>
    <th>{{ $type->sem->title }}, {{ $type->sem->year->title }}</th>
    <th>{{ $type->classroom->title }}</th>
    <th>{{ $type->course->code }} | {{ $type->course->title }}</th>
    <th>{{ $type->max }}</th>
    <th>{{ $type->weight }}%</th>
    <th>{{ date('d-m-Y', strtotime($type->deadline)) }}</th>
    <th>@if ($type->used) Yes @else No @endif</th>
    <th>

        @can('update', App\Models\markstypes::class)

            <!-- Editing Button-->
            <button data-toggle="modal" data-target="#edit-big-modal" id="type-editing" data-id="{{$type->id}}" data-teacher="{{$type->teacher_id}}" data-mark="{{$type->title}}" data-sem="{{ $type->sem_id }}" data-level="{{$type->classroom->level_id}}" data-classroom="{{$type->classroom_id}}" data-course="{{ $type->course_id }}" data-max="{{$type->max}}" data-weight="{{$type->weight}}" data-deadline="{{$type->deadline}}" class='btn btn-warning btn-xs' data-dismiss="modal"><i class="fa fa-edit"></i></button>
        
        @endcan
        
        @can('delete', App\Models\markstypes::class)

            <!-- Deleting Button-->
            <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$type->title}}" data-title="{{$type->course->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

        @endcan
    </th>
</tr>