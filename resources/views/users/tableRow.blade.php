<p hidden>{{$c=0}}</p>
    
@foreach($users as $user)
  <tr>
    <td><b class="theme-main">{{++$c}}</b></td> <!-- List Numbering ---------------->
    <td>{{ $user->schoolNo }}</td>
    <td>{{ $user->role->title }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if( $user->email_verified_at )
        <i class="fas fa-check-circle"></i>
      @endif
    </td>
    <td class="table-column">...</td>
    <td>{{ $user->status->title }}</td>
    <td>{{ date('d-m-Y', strtotime($user->leaveDate)) }}</td>
    <td>
      <div class='btn-group'>

        <!-- Showing Button-->
        <button data-toggle="modal" data-target="#show-modal" id="showing" data-schoolno="{{$user->schoolNo}}" data-role="{{$user->role->title}}" data-name="{{$user->name}}" data-email="{{$user->email}}" data-password="{{$user->password}}" data-status="{{$user->status->title}}" data-ldate="{{ date('d-m-Y', strtotime($user->leaveDate)) }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>
        
        @can('update', App\Models\users::class)

          <!-- Editing Button-->
          <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$user->id}}" data-schoolno="{{$user->schoolNo}}" data-role="{{$user->role_id}}" data-name="{{$user->name}}" data-email="{{$user->email}}" data-password="{{$user->password}}" data-status="{{$user->status_id}}" data-ldate="{{ date('Y-m-d', strtotime($user->leaveDate)) }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>

        @endcan

        @can('delete', App\Models\users::class)

          <!-- Deleting Button-->
          <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$user->id}}" data-title="{{$user->name}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

        @endcan

      </div>
        
    </td>
  </tr>      
@endforeach