<div class="row">
  <div class="col-md-4">
    <h3>Applicant Data بيانات المتقدم<br><br></h3>
  </div>

  <div class="col-md-4">
    <a data-toggle="modal" data-target="#update-smodal" id="updates"
    data-id="{{$applicant->studentNo}}"
    data-level="{{$applicant->classroom->level->title}}"
    data-classroom="{{$applicant->classroom->title}}"
    data-status="{{$applicant->user->status->title}}"
    data-ename="{{$applicant->eName}}"
    data-aname="{{$applicant->aName}}"
    data-gender="{{$applicant->user->contact->gender}}"
    data-dob="{{ date('Y-m-d', strtotime($applicant->user->contact->dob)) }}"
    data-email="{{$applicant->user->contact->email}}"
    data-phone="{{$applicant->user->contact->phone}}"
    data-address="{{$applicant->user->contact->address}}"
    data-ppe="{{ date('Y-m-d', strtotime($applicant->user->contact->ppExpiry)) }}"
    data-ve="{{ date('Y-m-d', strtotime($applicant->user->contact->visaExpiry)) }}"
    data-nation="{{$applicant->user->contact->nation}}"
    data-ppno="{{$applicant->user->contact->ppno}}"
    data-photo="{{$applicant->user->contact->photo}}"
    data-passport="{{$applicant->user->contact->passport}}"
    data-visa="{{$applicant->user->contact->visa}}"
    data-doc1="{{$applicant->user->contact->doc1}}"
    data-doc2="{{$applicant->user->contact->doc2}}"
    data-doc3="{{$applicant->user->contact->doc3}}"
    class="btn btn-danger"><i class="fas fa-edit"></i> Request applicant data<br>update / correction</a>
  </div>

  <!-- level Field -->
  <div class="form-group col-md-2">
    <label for="level">@include('labels.level')</label>
    <input type="text" class="form-control" name="level" value="{{$applicant->classroom->level->title}}" readonly>
  </div>

  <!-- status Field -->
  <div class="form-group col-md-2">
    <label for="status">@include('labels.status')</label>
    <input type="text" class="form-control" value="{{$applicant->user->status->title}}" readonly>
  </div>

  <!-- Matricno Field -->
  <div class="form-group col-md-4">
    <label for="matricNo">@include('labels.matricno')</label>
    <input type="text" class="form-control" value="{{$applicant->studentNo}}" readonly>
  </div>

  <!-- ename Field -->
  <div class="form-group col-md-4">
    <label for="eName">@include('labels.ename')</label>
    <input type="text" class="form-control" value="{{$applicant->eName}}" readonly>
  </div>

  <!-- aname Field -->
  <div class="form-group col-md-4">
    <label for="aName">@include('labels.aname')</label>
    <input type="text" class="form-control" value="{{$applicant->aName}}" readonly>
  </div>

  <!-- gender Field -->
  <div class="form-group col-md-2">
    <label for="gender">@include('labels.gender')</label>
    <input type="text" class="form-control" value="{{$applicant->user->contact->gender}}" readonly>
  </div>

  <!-- dob Field -->
  <div class="form-group col-md-2">
    <label for="dob">@include('labels.dob')</label>
    <input type="text" class="form-control" value="{{ date('d-m-Y', strtotime($applicant->user->contact->dob)) }}" readonly>
  </div>

  <!-- email Field -->
  <div class="form-group col-md-4">
    <label for="email">@include('labels.email')</label>
    <input type="text" class="form-control" value="{{$applicant->user->contact->email}}" readonly>
  </div>

  <!-- phone Field -->
  <div class="form-group col-md-4">
    <label for="phone">@include('labels.phone')</label>
    <input type="text" class="form-control" value="{{$applicant->user->contact->phone}}" readonly>
  </div>

  <!-- address Field -->
  <div class="form-group col-md-4">
    <label for="address">@include('labels.address')</label>
    <input type="text" class="form-control" value="{{$applicant->user->contact->address}}" readonly>
  </div>

  <!-- nation Field -->
  <div class="form-group col-md-2">
    <label for="nation">@include('labels.nation')</label>
    <input type="text" class="form-control" value="{{$applicant->user->contact->nation}}" readonly>
  </div>

  <!-- ppno Field -->
  <div class="form-group col-md-2">
    <label for="passno">@include('labels.passno')</label>
    <input type="text" class="form-control" value="{{$applicant->user->contact->ppno}}" readonly>
  </div>

  <!-- ppexpiry Field -->
  <div class="form-group col-md-2">
    <label for="ppe">@include('labels.ppe')</label>
    <input type="text" class="form-control" value="{{ date('d-m-Y', strtotime($applicant->user->contact->ppExpiry)) }}" readonly>
  </div>

  <!-- visaexpiry Field -->
  <div class="form-group col-md-2">
    <label for="ve">@include('labels.ve')</label>
    <input type="text" class="form-control" value="{{ date('d-m-Y', strtotime($applicant->user->contact->visaExpiry)) }}" readonly>
  </div>

  <div class="form-group col-md-2">
    <h4 style="line-height: 1.3; text-align:center;">Official Documents<br> الوثائق الرسمية</h4>
  </div>

  <!-- Photo Field -->
  <div class="form-group col-md-2">
    <label for="photo">@include('labels.photo')</label>
    <a download href="{{$applicant->user->contact->photo}}">{{$applicant->user->name}} Photo</a>
  </div>

  <!-- Passport Field -->
  <div class="form-group col-md-2">
    <label for="pass">@include('labels.pass')</label>
    <a download href="{{$applicant->user->contact->passport}}">{{$applicant->user->name}} Passport</a>
  </div>

  <!-- Visa Field -->
  <div class="form-group col-md-2">
    <label for="visa">@include('labels.visa')</label>
    <a download href="{{$applicant->user->contact->visa}}">{{$applicant->user->name}} Visa</a>
  </div>

  <!-- Birth Certificate Field -->
  <div class="form-group col-md-2">
    <label for="doc1">@include('labels.birth')</label>
    <a download href="{{$applicant->user->contact->doc1}}">{{$applicant->user->name}} Birth Certificate</a>
  </div>

  <!-- School Certificate Field -->
  <div class="form-group col-md-2">
    <label for="doc2">@include('labels.school')</label>
    <a download href="{{$applicant->user->contact->doc2}}">{{$applicant->user->name}} School Certificate</a>
  </div>
</div>

@if (! empty($applicant->user->contact->relative_id))
@foreach ($relatives as $relative)
@if ($relative->id == $applicant->user->contact->relative_id)

<div class="col-md-9">
  <h3>Guardian Data | بيانات ولي الأمر<br><br></h3>
</div>

<div class="col-md-3">
  <a data-toggle="modal" data-target="#update-rmodal" id="updater"
  data-id="{{$applicant->studentNo}}" data-level="{{$applicant->classroom->level->title}}"
  data-classroom="{{$applicant->classroom->title}}" data-status="{{$applicant->user->status->title}}"
  data-ename="{{$relative->eName}}" data-aname="{{$relative->aName}}"
  data-gender="{{$relative->gender}}" data-relation="{{$relative->relation}}"
  data-job="{{$relative->job}}" data-org="{{$relative->org}}"
  data-email="{{$relative->email}}" data-phone="{{$relative->phone}}"
  data-haddress="{{$relative->hAddress}}" data-waddress="{{$relative->wAddress}}"
  data-more="{{$relative->more}}"
  data-ppe="{{ date('Y-m-d', strtotime($relative->ppExpiry)) }}"
  data-ve="{{ date('Y-m-d', strtotime($relative->visaExpiry)) }}"
  data-nation="{{$relative->nation}}" data-ppno="{{$relative->ppno}}"
  data-rpassport="{{$relative->passport}}" data-rvisa="{{$relative->visa}}"
  class="btn btn-danger"><i class="fas fa-edit"></i> Request guardian data<br>update / correction</a>
</div>

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
  <input type="text" class="form-control" value="{{$relative->relation}}" readonly>
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
<div class="form-group col-md-4">
  <label for="email">@include('labels.email')</label>
  <input type="text" class="form-control" value="{{$relative->email}}" readonly>
</div>

<!-- phone Field -->
<div class="form-group col-md-4">
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

<!-- more Field -->
<div class="form-group col-md-12">
  <label for="more">@include('labels.more')</label>
  <textarea type="text" class="form-control" value="{{$relative->more}}" readonly></textarea>
</div>

<!-- nation Field -->
<div class="form-group col-md-2">
  <label for="nation">@include('labels.nation')</label>
  <input type="text" class="form-control" value="{{$relative->nation}}" readonly>
</div>

<!-- ppno Field -->
<div class="form-group col-md-2">
  <label for="passno">@include('labels.passno')</label>
  <input type="text" class="form-control" value="{{$relative->ppno}}" readonly>
</div>

<!-- ppexpiry Field -->
<div class="form-group col-md-2">
  <label for="ppe">@include('labels.ppe')</label>
  <input type="text" class="form-control" value="{{ date('d-m-Y', strtotime($relative->ppExpiry)) }}" readonly>
</div>

<!-- visapexpiry Field -->
<div class="form-group col-md-2">
  <label for="ve">@include('labels.ve')</label>
  <input type="text" class="form-control" value="{{ date('d-m-Y', strtotime($relative->visaExpiry)) }}" readonly>
</div>

<!-- passport Field -->
<div class="form-group col-md-2">
  <label for="pass">@include('labels.pass')</label>
  <a download href="{{$relative->passport}}">{{$relative->name}} Passport</a>
</div>

<!-- visa Field -->
<div class="form-group col-md-2">
  <label for="visa">@include('labels.visa')</label>
  <a download href="{{$relative->visa}}">{{$relative->name}} Visa</a>
</div>

@endif
@endforeach
@endif