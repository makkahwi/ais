<p hidden>{{$c=1}}</p>
        
@foreach($roles as $role)
    @if ($role->deleted_at == NULL)  <!-- Not to show soft deleted records ---------------->
        <tr>
            <td><b class="theme-main">{{$c}}</b></td> <!-- List Numbering ---------------->
            <td>{{ $role->title }}</td>
            <td>{{ $role->description }}</td>
            <td>
                <div class='btn-group'>

                    <!-- Showing Button-->
                    <button data-toggle="modal" data-target="#show-modal" id="showing" data-name="{{$role->title}}" data-desc="{{$role->description}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

                    @can('update', App\Models\roles::class)

                        <!-- Editing Button-->
                        <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$role->id}}" data-name="{{$role->title}}" data-desc="{{$role->description}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                    
                    @endcan

                    @can('delete', App\Models\roles::class)

                        <!-- Deleting Button-->
                        <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$role->id}}" data-title="{{$role->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                    @endcan

                </div>
                    
            </td>
        </tr>
    @endif

<p hidden>{{$c++}}</p>

@endforeach