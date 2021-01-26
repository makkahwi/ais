<p hidden>{{$c=1}}</p>

@foreach($relatives as $relative)
  <tr>
    <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
    <td>{{ $relative->eName }}</td>
    <td>{{ $relative->aName }}</td>
    <td>
      @foreach($relative->contacts as $contact)
        - {{ $contact->relation }} <b>OF</b> {{ $contact->user->schoolNo }} {{ $contact->user->name }}<br>
      @endforeach
    </td>
    <td>{{ $relative->email }}</td>
    <td>{{ $relative->phone }}</td>
    <td>{{ $relative->hAddress }}</td>
    <td>
      <div class='btn-group'>

        <!-- Showing Button-->
        <button data-toggle="modal" data-target="#show-big-modal" id="showing" data-ename="{{$relative->eName}}" data-aname="{{$relative->aName}}" data-name="{{$relative->name}}" data-email="{{$relative->email}}" data-phone="{{$relative->phone}}" data-haddress="{{$relative->hAddress}}" data-waddress="{{$relative->wAddress}}" data-passport="{{$relative->passport}}" data-gend="{{$relative->gender}}" data-nat="{{$relative->nation}}" data-ppno="{{$relative->ppno}}" data-ppe="{{ date('d-m-Y', strtotime($relative->ppExpiry)) }}" data-ve="{{ date('d-m-Y', strtotime($relative->visaExpiry)) }}" data-visa="{{$relative->visa}}" data-relation="{{$relative->relation}}" data-job="{{$relative->job}}" data-org="{{$relative->org}}" data-more="{{$relative->more}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

        @can('update', App\Models\relatives::class)
          <!-- Editing Button-->
          <button data-toggle="modal" id="editing" data-target="#edit-big-modal" id="editing" data-id="{{$relative->id}}" data-ename="{{$relative->eName}}" data-aname="{{$relative->aName}}" data-name="{{$relative->name}}" data-email="{{$relative->email}}" data-phone="{{$relative->phone}}" data-haddress="{{$relative->hAddress}}" data-waddress="{{$relative->wAddress}}" data-passport="{{$relative->passport}}" data-gend="{{$relative->gender}}" data-nat="{{$relative->nation}}" data-ppno="{{$relative->ppno}}" data-ppe="{{ date('Y-m-d', strtotime($relative->ppExpiry)) }}" data-ve="{{ date('Y-m-d', strtotime($relative->visaExpiry)) }}" data-visa="{{$relative->visa}}" data-relation="{{$relative->relation}}" data-job="{{$relative->job}}" data-org="{{$relative->org}}" data-more="{{$relative->more}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
        @endcan

        @can('delete', App\Models\relatives::class)
          <!-- Deleting Button-->
          <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$relative->id}}" data-title="{{$relative->eName}} {{$relative->aName}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
        @endcan
            
      </div>
    </td>
  </tr>
@endforeach