<p hidden>{{$c=0}}</p>

@foreach($staff as $staff)
  <tr>
    <td><b class="theme-main">{{++$c}}</b></td> <!-- List Numbering ---------------->
    <td>{{ $staff->staffNo }}</td>
    <td>{{ $staff->user->name }}</td>
    <td>{{ $staff->user->role->title }}</td>
    <td>{{ $staff->user->contact->email }}</td>
    <td>{{ $staff->user->contact->phone }}</td>
    <td>
      @if( $staff->user->status_id == 2)
      <span class="bg-success" style="padding:3%;">
      @else
      <span class="bg-danger" style="padding:3%;">
      @endif
      {{ $staff->user->status->title }}
      </span>
    </td>
    <td>
      <div class='btn-group'>

        <!-- Showing Button-->
        <button data-toggle="modal" data-target="#show-big-modal" id="showing" data-ename="{{$staff->eName}}" data-aname="{{$staff->aName}}" data-staffno="{{ $staff->staffNo }}" data-role="{{$staff->user->role->title}}" data-dob="{{ date('d-m-Y', strtotime($staff->user->contact->dob)) }}" data-email="{{$staff->user->contact->email}}" data-phone="{{$staff->user->contact->phone}}" data-gend="{{$staff->user->contact->gender}}" data-status="{{$staff->user->status->title}}" data-address="{{$staff->user->contact->address}}" data-nat="{{$staff->user->contact->nation}}" data-ppno="{{$staff->user->contact->ppno}}" data-ppe="{{ date('d-m-Y', strtotime($staff->user->contact->ppExpiry)) }}" data-ve="{{ date('d-m-Y', strtotime($staff->user->contact->visaExpiry)) }}" data-ldate="{{ date('d-m-Y', strtotime($staff->user->leaveDate)) }}" data-photo="{{$staff->user->contact->photo}}" data-passport="{{$staff->user->contact->passport}}" data-visa="{{$staff->user->contact->visa}}" data-doc1="{{$staff->user->contact->doc1}}" data-doc2="{{$staff->user->contact->doc2}}" data-doc3="{{$staff->user->contact->doc3}}" data-rename="{{$staff->user->contact->relative->eName}}" data-raname="{{$staff->user->contact->relative->aName}}" data-relation="{{$staff->user->contact->relation}}" data-job="{{$staff->user->contact->relative->job}}" data-org="{{$staff->user->contact->relative->org}}" data-remail="{{$staff->user->contact->relative->email}}" data-rphone="{{$staff->user->contact->relative->phone}}" data-haddress="{{$staff->user->contact->relative->hAddress}}" data-waddress="{{$staff->user->contact->relative->wAddress}}" data-more="{{$staff->user->contact->relative->more}}" data-rgend="{{$staff->user->contact->relative->gender}}" data-rnat="{{$staff->user->contact->relative->nation}}" data-rppno="{{$staff->user->contact->relative->ppno}}" data-rppe="{{ date('d-m-Y', strtotime($staff->user->contact->relative->ppExpiry)) }}" data-rve="{{ date('d-m-Y', strtotime($staff->user->contact->relative->visaExpiry)) }}" data-rpassport="{{$staff->user->contact->relative->passport}}" data-rvisa="{{$staff->user->contact->relative->visa}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

        @can('update', App\Models\staff::class)
          <!-- Editing Button-->
          <button data-toggle="modal" data-target="#edit-big-modal" id="editing" data-id="{{$staff->id}}" data-name="{{$staff->user->name}}" data-ename="{{$staff->eName}}" data-aname="{{$staff->aName}}" data-staffno="{{ $staff->staffNo }}" data-role="{{$staff->user->role_id}}" data-dob="{{ date('Y-m-d', strtotime($staff->user->contact->dob)) }}" data-email="{{$staff->user->contact->email}}" data-phone="{{$staff->user->contact->phone}}" data-gend="{{$staff->user->contact->gender}}" data-status="{{$staff->user->status_id}}" data-address="{{$staff->user->contact->address}}" data-nat="{{$staff->user->contact->nation}}" data-ppno="{{$staff->user->contact->ppno}}" data-ppe="{{ date('Y-m-d', strtotime($staff->user->contact->ppExpiry)) }}" data-ve="{{ date('Y-m-d', strtotime($staff->user->contact->visaExpiry)) }}"  data-ldate="{{ date('Y-m-d', strtotime($staff->user->leaveDate)) }}" data-photo="{{$staff->user->contact->photo}}" data-passport="{{$staff->user->contact->passport}}" data-visa="{{$staff->user->contact->visa}}" data-doc1="{{$staff->user->contact->doc1}}" data-doc2="{{$staff->user->contact->doc2}}" data-doc3="{{$staff->user->contact->doc3}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
        @endcan

        @can('delete', App\Models\staff::class)
          <!-- Deleting Button-->
          <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$staff->id}}" data-title="{{ $staff->staffNo }} | {{$staff->eName}} {{$staff->aName}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
        @endcan

      </div>
    </td>
  </tr>
@endforeach