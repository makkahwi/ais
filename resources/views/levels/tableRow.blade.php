<p hidden>{{$c=1}}</p>
        
@foreach($levels as $level)
    <tr>
        <td><b class="theme-main">{{$c}}</b></td> <!-- List Numbering ---------------->
        <td>{{ $level->title }}</td>
        <td class="table-column">{{ $level->description }}</td>
        <td>
            <div class='btn-group'>

                <!-- Showing Button-->
                <button data-toggle="modal" data-target="#show-modal" id="showing" data-level="{{$level->title}}" data-desc="{{ $level->description }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

                @can('update', App\Models\levels::class)

                    <!-- Editing Button-->
                    <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$level->id}}" data-level="{{$level->title}}" data-desc="{{ $level->description }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                
                @endcan

                @can('delete', App\Models\levels::class)

                    <!-- Deleting Button-->
                    <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$level->id}}" data-title="{{$level->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                @endcan

            </div>
        </td>
    </tr>

    <p hidden>{{$c++}}</p>
            
@endforeach