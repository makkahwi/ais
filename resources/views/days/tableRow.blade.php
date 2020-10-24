<p hidden>{{$c=1}}</p>
        
@foreach($days as $day)
@if ($day->deleted_at == NULL)  <!-- Not to show soft deleted records ---------------->
    <tr>
        <td><b class="theme-main">{{$c}}</b></td> <!-- List Numbering ---------------->
        <td>{{ $day->title }}</td>
        <td>
            <div class='btn-group'>

                <!-- Showing modal-->
                <a data-toggle="modal" data-target="#show-modal" id="showing" data-day="{{$day->title}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></a>

                @can('update', App\Models\days::class)

                    <!-- Editing modal-->
                    <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$day->id}}" data-day="{{$day->title}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                
                @endcan

                @can('delete', App\Models\days::class)

                    <!-- Deleting Button-->
                    <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$day->id}}" data-title="{{$day->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                @endcan

            </div>
        </td>
    </tr>
@endif

<p hidden>{{$c++}}</p>

@endforeach