<tr>
    <td>{{ $mark->title }} | {{ $mark->title }}</td>
    <td>{{ $mark->title }}</td>
    <td>{{ $mark->title }}</td>
    <td>{{ $mark->name }}</td>
    <td class="table-column">{{ $mark->markValue }}</td>
    <td class="table-column">{{ $mark->max }}</td>
    <td class="table-column">{{ $mark->note }}</td>
    <td>
        <div class='btn-group'>

            <!-- Showing Button-->

            <button data-toggle="modal" data-target="#show-modal" id="showing" data-mark="{{$mark->typeName}}" data-sem="{{ $mark->title }} | {{ $mark->title }}" data-class="{{$mark->title}}" data-course="{{$mark->title}}" data-student="{{$mark->name}}" data-markv="{{$mark->markValue}}" data-fmark="{{$mark->max}}" data-note="{{$mark->note}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            <!-- Editing Button-->

            @if(Auth::user()->role_id < 7 ) <!-- Edit for Super Admin, Principal & V. Principal ---------------->
                <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$mark->mark_id}}" data-mark="{{$mark->typeName}}" data-sem="{{ $mark->semId }}" data-class="{{$mark->classroom_id}}" data-course="{{$mark->course_id}}" data-student="{{$mark->student_id}}" data-markv="{{$mark->markValue}}" data-fmark="{{$mark->max}}" data-note="{{$mark->note}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
            @endif

        </div>

        @if(Auth::user()->role_id < 2 ) 

            <!-- Deleting Button-->
            <form method="post" action="{{ route ('marks.destroy', 1) }}">
                                    
                @csrf
                @method('delete')

                <input type="hidden" name="id" value="{{$mark->mark_id}}" readonly>

                <button type="submit" class="btn btn-danger btn-xs" data-dismiss="modal" onclick="return confirm('Are you sure about deleting -> {{$mark->typeName}} | {{$mark->name}} <- mark record?')"><i class="fa fa-trash-alt"></i></button>

            </form>

        @endif

    </td>
</tr>