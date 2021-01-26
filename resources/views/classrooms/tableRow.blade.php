<p hidden>{{$c=1}}</p>
          
@foreach($classrooms as $classroom)
  @can('view', [App\Models\classrooms::class, $classroom])
    @if($classroom->supervisor_id ==  Auth::user()->schoolNo) <!-- Highlight Supervised Classroom -->
      <tr class="theme-main" style="font-weight:bold;">
    @else
      <tr>
    @endif

        <td><b class="theme-main">{{$c}}</b></td> <!-- List Numbering ---------------->
        <td>{{ $classroom->title }}</td>
        <td>{{ $classroom->level->title }}</td>
        <td>{{ $classroom->roomNo }}</td>
        <td>{{ $classroom->capacity }}</td>
        <td>
          <p hidden>{{$xyz=0}}</p>

          @foreach($classroom->students as $student)
            <p hidden>{{$xyz++}}</p>
          @endforeach
        </td>
        <td>{{$xyz}}</td>
        <td class="table-column">{{ $classroom->description }}</td>
        <td>{{ $classroom->supervisor->user->name }}</td>
        @can('update', App\Models\classrooms::class)
          @if($classroom->status_id == 2)
            <td style="background-color:green; color:white;">                    
          @else
            <td style="background-color:red; color:white;"> 
          @endif

            {{ $classroom->status->title }}</td>
        @endcan      
        <td>
          <div class='btn-group'>

            <!-- Showing Button-->
            <button data-toggle="modal" data-target="#show-modal" id="showing" data-name="{{ $classroom->title }}" data-level="{{ $classroom->level->title }}" data-room="{{ $classroom->roomNo }}" data-capacity="{{ $classroom->capacity }}" data-count="{{ $xyz }}" data-desc="{{ $classroom->description }}" data-teacher="{{ $classroom->supervisor->user->name }}" data-status="{{ $classroom->status->title }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            @can('update', App\Models\classrooms::class)
              <!-- Editing Button-->
              <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$classroom->id}}" data-name="{{ $classroom->title }}" data-level="{{ $classroom->level_id }}" data-room="{{ $classroom->roomNo }}" data-capacity="{{ $classroom->capacity }}" data-desc="{{ $classroom->description }}" data-teacher="{{ $classroom->supervisor_id }}" data-status="{{ $classroom->status_id }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
            @endcan
        
            @can('delete', App\Models\classrooms::class)
              <!-- Deleting Button-->
              <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$classroom->id}}" data-title="{{$classroom->title}} of {{ $classroom->level->title }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
            @endcan

          </div>
        </td>
      </tr>

    <p hidden>{{$c++}}</p>
  @endcan
@endforeach