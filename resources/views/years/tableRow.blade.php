<p hidden>{{$c=1}}</p>
        
@foreach($years as $year)
    <tr>
        <td><b class="theme-main">{{$c}}</b></td> <!-- List Numbering ---------------->
        <td>{{ $year->title }}</td>
        <td>
            <div class='btn-group'>

                <!-- Showing Button-->
                <button data-toggle="modal" data-target="#show-modal" id="showing" data-yname="{{$year->title}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

                @can('update', App\Models\years::class)

                    <!-- Edit Button-->
                    <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$year->id}}" data-yname="{{$year->title}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>

                @endcan

                @can('delete', App\Models\years::class)

                    <!-- Deleting Button-->
                    <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$year->id}}" data-title="{{$year->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                @endcan
            </div>
        </td>
    </tr>

    <p hidden>{{$c++}}</p>
@endforeach