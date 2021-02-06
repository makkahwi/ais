<p hidden>{{$c=0}}</p>

@foreach($times as $time)
  <tr>
    <td><b class="theme-main">{{++$c}}</b></td> <!-- List Numbering ---------------->
    <td>{{ $time->title }}</td>
    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$time->start)->format('h:i a')}}</td>
    <td>{{\Carbon\Carbon::createFromFormat('H:i:s',$time->end)->format('h:i a')}}</td>
    <td>
      <div class='btn-group'>

        <!-- Showing Button-->
        <button data-toggle="modal" data-target="#show-modal" id="showing" data-tname="{{$time->title}}" data-stime="{{$time->start}}" data-etime="{{$time->end}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

        @can('update', App\Models\times::class)
          <!-- Editing Button-->
          <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$time->id}}" data-tname="{{$time->title}}" data-stime="{{$time->start}}" data-etime="{{$time->end}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
        @endcan

        @can('delete', App\Models\times::class)
          <!-- Deleting Button-->
          <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$time->id}}" data-title="{{$time->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
        @endcan

      </div>
        
    </td>
  </tr>
@endforeach