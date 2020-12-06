<tr>
    <td>{{ $course->title }}</td>
    <td>{{ $course->code }}</td>
    <td>{{ $course->textbook }}</td>
    <td>{{ $course->level->title }}</td>
    <td class="table-column">{{ $course->description }}</td>
               
    @if($course->status_id == 2)
        <td style="background-color:green; color:white;">                    
    @else
        <td style="background-color:red; color:white;"> 
    @endif

        {{ $course->status->title }}</td>
                                
    <td>
        <div class='btn-group'>

            <!-- Showing Button-->
            <button data-toggle="modal" data-target="#show-modal" id="showing" data-name="{{ $course->title }}" data-code="{{ $course->code }}" data-book="{{ $course->textbook }}" data-level="{{ $course->level->title }}" data-desc="{{ $course->description }}" data-status="{{ $course->status->title }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            @can('update', App\Models\courses::class)

                <!-- Editing Button-->
                <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$course->id}}" data-name="{{ $course->title }}" data-code="{{ $course->code }}" data-book="{{ $course->textbook }}" data-level="{{ $course->level_id }}" data-desc="{{ $course->description }}" data-status="{{ $course->status_id }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>

            @endcan

            @can('delete', App\Models\courses::class)

                <!-- Deleting Button-->
                <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$course->id}}" data-title="{{ $course->code }} | {{$course->title}} | {{ $course->level->title }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

            @endcan
            
        </div>
    </td>
</tr>