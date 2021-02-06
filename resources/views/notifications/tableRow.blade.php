<p hidden>{{$c=0}}</p>

@foreach($notifications as $notification)
  <tr>
      <td><b class="theme-main">{{++$c}}</b></td> <!-- List Numbering ---------------->
      <td>{{ $notification->created_at->format('d-m-y') }}</td>
      <td>{{ $notification->notifiable_id }}</td>
      <td>{{ $notification->data }}</td>
      <td>
          <div class='btn-group'>

              <!-- Showing Button-->
              <button data-toggle="modal" data-target="#show-big-modal" id="showing" data-ename="{{$notification->reName}}" data-aname="{{$notification->raName}}" data-name="{{$notification->rName}}" data-email="{{$notification->rEmail}}" data-phone="{{$notification->rPhone}}" data-haddress="{{$notification->rhAddress}}" data-waddress="{{$notification->rwAddress}}" data-passport="{{$notification->rPassport}}" data-gend="{{$notification->rGender}}" data-nat="{{$notification->rNation}}" data-ppno="{{$notification->rppno}}" data-ppe="{{$notification->rppExpiry}}" data-visa="{{$notification->rVisa}}" data-relation="{{$notification->relation}}" data-job="{{$notification->job}}" data-org="{{$notification->org}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

              <!-- Editing Button-->
              @if(Auth::user()->role_id < 4 ) <!-- Edit for Super Admin, Principal & V. Principal ---------------->
                  <button data-toggle="modal" data-target="#edit-big-modal" id="editing" data-id="{{$notification->rId}}" data-ename="{{$notification->reName}}" data-aname="{{$notification->raName}}" data-name="{{$notification->rName}}" data-email="{{$notification->rEmail}}" data-phone="{{$notification->rPhone}}" data-haddress="{{$notification->rhAddress}}" data-waddress="{{$notification->rwAddress}}" data-passport="{{$notification->rPassport}}" data-gend="{{$notification->rGender}}" data-nat="{{$notification->rNation}}" data-ppno="{{$notification->rppno}}" data-ppe="{{$notification->rppExpiry}}" data-visa="{{$notification->rVisa}}" data-relation="{{$notification->relation}}" data-job="{{$notification->job}}" data-org="{{$notification->org}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
              @endif
                      
          </div>
      </td>
  </tr>
@endforeach