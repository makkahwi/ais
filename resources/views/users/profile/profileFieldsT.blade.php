<div class="col-md-4">
  <h3>Staff Data بيانات الموظف<br><br></h3>
</div>

<div class="col-md-4">
  <a data-toggle="modal" data-target="#update-emodal" id="updatee"
  data-id="{{$teacher->staffNo}}" data-status="{{$teacher->user->status->title}}"
  data-ename="{{$teacher->eName}}" data-aname="{{$teacher->aName}}"
  data-gender="{{$teacher->user->contact->gender}}" data-dob="{{ date('Y-m-d', strtotime($teacher->user->contact->dob)) }}"
  data-email="{{$teacher->user->contact->email}}" data-phone="{{$teacher->user->contact->phone}}"
  data-address="{{$teacher->user->contact->address}}" data-ppe="{{ date('Y-m-d', strtotime($teacher->user->contact->ppExpiry)) }}"
  data-nation="{{$teacher->user->contact->nation}}" data-ppno="{{$teacher->user->contact->ppno}}"
  data-photo="{{$teacher->user->contact->photo}}" data-passport="{{$teacher->user->contact->passport}}"
  data-visa="{{$teacher->user->contact->visa}}" data-doc1="{{$teacher->user->contact->doc1}}"
  data-doc2="{{$teacher->user->contact->doc2}}" data-doc3="{{$teacher->user->contact->doc3}}"
  class="btn btn-danger"><i class="fas fa-edit"></i> Request staff data update / correction</a>
</div>

<!-- Matricno Field -->
<div class="form-group col-md-2">
  <label for="matricNo">@include('labels.staffno')</label>
  <input type="text" class="form-control" value="{{$teacher->staffNo}}" readonly>
</div>

<!-- status Field -->
<div class="form-group col-md-2">
  <label for="status">@include('labels.status')</label>
  <input type="text" class="form-control" value="{{$teacher->user->status->title}}" readonly>
</div>

<!-- ename Field -->
<div class="form-group col-md-4">
  <label for="eName">@include('labels.ename')</label>
  <input type="text" class="form-control" value="{{$teacher->eName}}" readonly>
</div>

<!-- aname Field -->
<div class="form-group col-md-4">
  <label for="aName">@include('labels.aname')</label>
  <input type="text" class="form-control" value="{{$teacher->aName}}" readonly>
</div>

<!-- gender Field -->
<div class="form-group col-md-2">
  <label for="gender">@include('labels.gender')</label>
  <input type="text" class="form-control" value="{{$teacher->user->contact->gender}}" readonly>
</div>

<!-- dob Field -->
<div class="form-group col-md-2">
  <label for="dob">@include('labels.dob')</label>
  <input type="text" class="form-control" value="{{ date('d-m-Y', strtotime($teacher->user->contact->dob)) }}" readonly>
</div>

<!-- email Field -->
<div class="form-group col-md-4">
  <label for="email">@include('labels.email')</label>
  <input type="text" class="form-control" value="{{$teacher->user->contact->email}}" readonly>
</div>

<!-- phone Field -->
<div class="form-group col-md-4">
  <label for="phone">@include('labels.phone')</label>
  <input type="text" class="form-control" value="{{$teacher->user->contact->phone}}" readonly>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
  <label for="address">@include('labels.address')</label>
  <input type="text" class="form-control" value="{{$teacher->user->contact->address}}" readonly>
</div>

<!-- nation Field -->
<div class="form-group col-md-2">
  <label for="nation">@include('labels.nation')</label>
  <input type="text" class="form-control" value="{{$teacher->user->contact->nation}}" readonly>
</div>

<!-- ppno Field -->
<div class="form-group col-md-2">
  <label for="passno">@include('labels.passno')</label>
  <input type="text" class="form-control" value="{{$teacher->user->contact->ppno}}" readonly>
</div>

<!-- ppexpiry Field -->
<div class="form-group col-md-2">
  <label for="ppe">@include('labels.ppe')</label>
  <input type="text" class="form-control" value="{{ date('d-m-Y', strtotime($teacher->user->contact->ppExpiry)) }}" readonly>
</div>

<!-- photo Field -->
<div class="form-group col-md-2">
  <label for="photo">@include('labels.photo')</label><br>
  <a target="_blank" href="{{$teacher->user->contact->photo}}">{{$teacher->name}} Photo</a>
</div>

<!-- pass Field -->
<div class="form-group col-md-2">
  <label for="pass">@include('labels.pass')</label><br>
  <a target="_blank" href="{{$teacher->user->contact->passport}}">{{$teacher->name}} Passport</a>
</div>

<!-- visa Field -->
<div class="form-group col-md-2">
  <label for="visa">@include('labels.visa')</label><br>
  <a target="_blank" href="{{$teacher->user->contact->visa}}">{{$teacher->name}} Visa</a>
</div>

<!-- certificate Field -->
<div class="form-group col-md-2">
  <label for="doc1">@include('labels.certificate')</label><br>
  <a target="_blank" href="{{$teacher->user->contact->doc1}}">{{$teacher->name}} Study Certificates</a>
</div>

<!-- work Field -->
<div class="form-group col-md-2">
  <label for="doc2">@include('labels.work')</label><br>
  <a target="_blank" href="{{$teacher->user->contact->doc2}}">{{$teacher->name}} Expreiances' Certificates</a>
</div>

<!-- Health Field -->
<div class="form-group col-md-2">
  <label for="doc3">@include('labels.health')</label><br>
  <a target="_blank" href="{{$teacher->user->contact->doc3}}">{{$teacher->name}} Health Insurance</a>
</div>

@if (! empty($teacher->user->contact->relative_id))
@foreach ($relatives as $relative)
@if ($relative->id == $teacher->user->contact->relative_id)
<div class="row">
<div class="col-md-8">
  <h3>Emergency Contact Data | بيانات الاتصال للطوارئ</h3>
</div>

<div class="col-md-4">
  <a data-toggle="modal" data-target="#update-rmodal" id="updater"
  data-id="{{$teacher->staffNo}}" data-status="{{$teacher->user->status->title}}"
  data-ename="{{$relative->eName}}" data-aname="{{$relative->aName}}"
  data-gender="{{$relative->gender}}" data-relation="{{$teacher->user->contact->relation}}"
  data-job="{{$relative->job}}" data-org="{{$relative->org}}"
  data-email="{{$relative->email}}" data-phone="{{$relative->phone}}"
  data-haddress="{{$relative->hAddress}}" data-waddress="{{$relative->wAddress}}"
  data-ppe="{{ date('Y-m-d', strtotime($relative->ppExpiry)) }}"
  data-nation="{{$relative->nation}}" data-ppno="{{$relative->ppno}}"
  class="btn btn-danger"><i class="fas fa-edit"></i> Request relative data update / correction</a>
</div>
</div>

<br><br>

<!-- ename Field -->
<div class="form-group col-md-4">
  <label for="eName">@include('labels.ename')</label>
  <input type="text" class="form-control" value="{{$relative->eName}}" readonly>
</div>

<!-- aname Field -->
<div class="form-group col-md-4">
  <label for="aName">@include('labels.aname')</label>
  <input type="text" class="form-control" value="{{$relative->aName}}" readonly>
</div>

<!-- gender Field -->
<div class="form-group col-md-4">
  <label for="gender">@include('labels.gender')</label>
  <input type="text" class="form-control" value="{{$relative->gender}}" readonly>
</div>

<!-- relation Field -->
<div class="form-group col-md-4">
  <label for="relation">@include('labels.relation')</label>
  <input type="text" class="form-control" value="{{$teacher->user->contact->relation}}" readonly>
</div>

<!-- job Field -->
<div class="form-group col-md-4">
  <label for="job">@include('labels.job')</label>
  <input type="text" class="form-control" value="{{$relative->job}}" readonly>
</div>

<!-- org Field -->
<div class="form-group col-md-4">
  <label for="org">@include('labels.org')</label>
  <input type="text" class="form-control" value="{{$relative->org}}" readonly>
</div>

<!-- email Field -->
<div class="form-group col-md-6">
  <label for="email">@include('labels.email')</label>
  <input type="text" class="form-control" value="{{$relative->email}}" readonly>
</div>

<!-- phone Field -->
<div class="form-group col-md-6">
  <label for="phone">@include('labels.phone')</label>
  <input type="text" class="form-control" value="{{$relative->phone}}" readonly>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
  <label for="address">@include('labels.address')</label>
  <input type="text" class="form-control" value="{{$relative->hAddress}}" readonly>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
  <label for="address">@include('labels.waddress')</label>
  <input type="text" class="form-control" value="{{$relative->wAddress}}" readonly>
</div>

@endif
@endforeach
@endif