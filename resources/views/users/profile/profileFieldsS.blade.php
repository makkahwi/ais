<div class="row">
    <div class="col-md-4">
        <h3>Student Data بيانات الطالب<br><br></h3>
    </div>

    <div class="col-md-2">
        <a data-toggle="modal" data-target="#update-smodal" id="updates"
        data-id="{{$student->studentNo}}" data-level="{{$student->classroom->level->title}}"
        data-classroom="{{$student->classroom->title}}" data-status="{{$student->user->status->title}}"
        data-ename="{{$student->eName}}" data-aname="{{$student->aName}}"
        data-gender="{{$student->user->contact->gender}}" data-dob="{{ date('Y-m-d', strtotime($student->user->contact->dob)) }}"
        data-email="{{$student->user->contact->email}}" data-phone="{{$student->user->contact->phone}}"
        data-address="{{$student->user->contact->address}}"
        data-ppe="{{ date('Y-m-d', strtotime($student->user->contact->ppExpiry)) }}"
        data-ve="{{ date('Y-m-d', strtotime($student->user->contact->visaExpiry)) }}"
        data-nation="{{$student->user->contact->nation}}" data-ppno="{{$student->user->contact->ppno}}"

        data-photo="{{$student->user->contact->photo}}" data-passport="{{$student->user->contact->passport}}"
        data-visa="{{$student->user->contact->visa}}" data-doc1="{{$student->user->contact->doc1}}"
        data-doc2="{{$student->user->contact->doc2}}" data-doc3="{{$student->user->contact->doc3}}"
        class="btn btn-danger"><i class="fas fa-edit"></i> Request student data<br>update / correction</a>
    </div>

    <div class="col-md-2">
        @if(Auth::user()->status_id == 2 && $student->financial == 0)
            <button class="btn btn-warning pull-right submitbutton" type="submit"><i class="fas fa-print"></i> Download<br>Confirmation Letter</button>
            <h1 style="text-align:center;"><div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div></h1>
        @endif
    </div>

    <div class="form-group col-md-2">
        <label for="level">@include('labels.level')</label>
        <input type="text" class="form-control" name="level" value="{{$student->classroom->level->title}}" readonly>
        <input hidden name="title" value="{{$student->classroom->level->description}}">
        @foreach($currentSem as $sem)
        <input hidden name="sem" value="{{$sem->title}}">
        <input hidden name="year" value="{{$sem->year->title}}">
        <input hidden name="start" value="{{$sem->start}}">
        <input hidden name="end" value="{{$sem->end}}">
        @endforeach
    </div>

    <div class="form-group col-md-2">
        <label for="classroom">@include('labels.classroom')</label>
        <input type="text" class="form-control" name="classroom" value="{{$student->classroom->title}}" readonly>
    </div>

    <!-- Matricno Field -->
    <div class="form-group col-md-2">
        <label for="schoolNo">@include('labels.matricno')</label>
        <input type="text" class="form-control" name="schoolNo" value="{{$student->studentNo}}" readonly>
    </div>

    <!-- status Field -->
    <div class="form-group col-md-2">
        <label for="status">@include('labels.status')</label>
        <input type="text" class="form-control" name="status" value="{{$student->user->status->title}}" readonly>
    </div>

    <!-- ename Field -->
    <div class="form-group col-md-4">
        <label for="eName">@include('labels.ename')</label>
        <input type="text" class="form-control" style="text-transform:capitalize;" name="eName" value="{{$student->eName}}" readonly>
    </div>

    <!-- aname Field -->
    <div class="form-group col-md-4">
        <label for="aName">@include('labels.aname')</label>
        <input type="text" class="form-control" style="text-transform:capitalize;" name="aName" value="{{$student->aName}}" readonly>
    </div>

    <!-- gender Field -->
    <div class="form-group col-md-2">
        <label for="gender">@include('labels.gender')</label>
        <input type="text" class="form-control" name="gender" value="{{$student->user->contact->gender}}" readonly>
    </div>

    <!-- dob Field -->
    <div class="form-group col-md-2">
        <label for="dob">@include('labels.dob')</label>
        <input type="text" class="form-control" name="dob" value="{{ date('d-m-Y', strtotime($student->user->contact->dob)) }}" readonly>
    </div>

    <!-- email Field -->
    <div class="form-group col-md-4">
        <label for="email">@include('labels.email')</label>
        <input type="text" class="form-control" name="email" value="{{$student->user->contact->email}}" readonly>
    </div>

    <!-- phone Field -->
    <div class="form-group col-md-2">
        <label for="phone">@include('labels.phone')</label>
        <input type="text" class="form-control" name="phone" value="{{$student->user->contact->phone}}" readonly>
    </div>

    <!-- trans Field -->
    <div class="form-group col-md-2">
        <label for="trans">Transportation Type<br>نوع المواصلات</label>
        @if ($student->trans == 0)
            <input type="text" class="form-control" name="trans" value="Own Transportation المواصلات الخاصة" readonly>
        @else
            <input type="text" class="form-control" name="trans" value="School Bus باص المدرسة" readonly>
        @endif
    </div>

    <!-- address Field -->
    <div class="form-group col-md-4">
        <label for="address">@include('labels.address')</label>
        <input type="text" class="form-control" name="address" value="{{$student->user->contact->address}}" readonly>
    </div>

    <!-- nation Field -->
    <div class="form-group col-md-2">
        <label for="nation">@include('labels.nation')</label>
        <input type="text" class="form-control" name="nation" value="{{$student->user->contact->nation}}" readonly>
    </div>

    <!-- ppno Field -->
    <div class="form-group col-md-2">
        <label for="passno">@include('labels.passno')</label>
        <input type="text" class="form-control" name="passno" value="{{$student->user->contact->ppno}}" readonly>
    </div>

    <!-- ppexpiry Field -->
    <div class="form-group col-md-2">
        <label for="ppe">@include('labels.ppe')</label>
        <input type="text" class="form-control" name="ppe" value="{{ date('d-m-Y', strtotime($student->user->contact->ppExpiry)) }}" readonly>
    </div>

    <!-- visaexpiry Field -->
    <div class="form-group col-md-2">
        <label for="ve">@include('labels.ve')</label>
        <input type="text" class="form-control" name="ve" value="{{ date('d-m-Y', strtotime($student->user->contact->visaExpiry)) }}" readonly>
    </div>

    <div class="form-group col-md-2">
        <h4 style="line-height: 1.3; text-align:center;">Official Documents<br> الوثائق الرسمية</h4>
    </div>

    <!-- Photo Field -->
    <div class="form-group col-md-2">
        <label for="photo">@include('labels.photo')</label><br>
        <a href="{{$student->user->contact->photo}}" download>{{$student->user->name}} Photo</a>
    </div>

    <!-- Passport Field -->
    <div class="form-group col-md-2">
        <label for="pass">@include('labels.pass')</label><br>
        <a href="{{$student->user->contact->passport}}" download>{{$student->user->name}} Passport</a>
    </div>

    <!-- Visa Field -->
    <div class="form-group col-md-2">
        <label for="visa">@include('labels.visa')</label><br>
        <a href="{{$student->user->contact->visa}}" download>{{$student->user->name}} Visa</a>
    </div>

    <!-- Birth Certificate Field -->
    <div class="form-group col-md-2">
        <label for="doc1">@include('labels.birth')</label><br>
        <a href="{{$student->user->contact->doc1}}" download>{{$student->user->name}} Birth Certificate</a>
    </div>

    <!-- School Certificate Field -->
    <div class="form-group col-md-2">
        <label for="doc2">@include('labels.school')</label><br>
        <a href="{{$student->user->contact->doc2}}" download>{{$student->user->name}} School Certificate</a>
    </div>
</div>

@if (! empty($student->user->contact->relative_id))
@foreach ($relatives as $relative)
@if ($relative->id == $student->user->contact->relative_id)

<div class="col-md-8">
    <h3>Guardian Data | بيانات ولي الأمر</h3>
</div>

<div class="col-md-4">
    <a data-toggle="modal" data-target="#update-rmodal" id="updater"
    data-id="{{$student->studentNo}}" data-level="{{$student->classroom->level->title}}"
    data-classroom="{{$student->classroom->title}}" data-status="{{$student->user->status->title}}"
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
    class="btn btn-danger"><i class="fas fa-edit"></i> Request guardian data update / correction</a>
</div>

<!-- ename Field -->
<div class="form-group col-md-6">
    <label for="eName">@include('labels.ename')</label>
    <input type="text" class="form-control" name="" value="{{$relative->eName}}" readonly>
</div>

<!-- aname Field -->
<div class="form-group col-md-6">
    <label for="aName">@include('labels.aname')</label>
    <input type="text" class="form-control" name="" value="{{$relative->aName}}" readonly>
</div>

<!-- gender Field -->
<div class="form-group col-md-2">
    <label for="gender">@include('labels.gender')</label>
    <input type="text" class="form-control" name="" value="{{$relative->gender}}" readonly>
</div>

<!-- relation Field -->
<div class="form-group col-md-2">
    <label for="relation">@include('labels.relation')</label>
    <input type="text" class="form-control" name="" value="{{$relative->relation}}" readonly>
</div>

<!-- job Field -->
<div class="form-group col-md-4">
    <label for="job">@include('labels.job')</label>
    <input type="text" class="form-control" name="" value="{{$relative->job}}" readonly>
</div>

<!-- org Field -->
<div class="form-group col-md-4">
    <label for="org">@include('labels.org')</label>
    <input type="text" class="form-control" name="" value="{{$relative->org}}" readonly>
</div>

<!-- email Field -->
<div class="form-group col-md-6">
    <label for="email">@include('labels.email')</label>
    <input type="text" class="form-control" name="" value="{{$relative->email}}" readonly>
</div>

<!-- phone Field -->
<div class="form-group col-md-6">
    <label for="phone">@include('labels.phone')</label>
    <input type="text" class="form-control" name="" value="{{$relative->phone}}" readonly>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
    <label for="address">@include('labels.address')</label>
    <input type="text" class="form-control" name="" value="{{$relative->hAddress}}" readonly>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
    <label for="address">@include('labels.waddress')</label>
    <input type="text" class="form-control" name="" value="{{$relative->wAddress}}" readonly>
</div>

<!-- more Field -->
<div class="form-group col-md-12">
    <label for="more">@include('labels.more')</label>
    <textarea type="text" class="form-control" readonly>{{$relative->more}}</textarea>
</div>

<!-- nation Field -->
<div class="form-group col-md-2">
    <label for="nation">@include('labels.nation')</label>
    <input type="text" class="form-control" name="" value="{{$relative->nation}}" readonly>
</div>

<!-- ppno Field -->
<div class="form-group col-md-2">
    <label for="passno">@include('labels.passno')</label>
    <input type="text" class="form-control" name="" value="{{$relative->ppno}}" readonly>
</div>

<!-- ppexpiry Field -->
<div class="form-group col-md-2">
    <label for="ppe">@include('labels.ppe')</label>
    <input type="text" class="form-control" name="" value="{{ date('d-m-Y', strtotime($relative->ppExpiry)) }}" readonly>
</div>

<!-- visaexpiry Field -->
<div class="form-group col-md-2">
    <label for="ve">@include('labels.ve')</label>
    <input type="text" class="form-control" name="" value="{{ date('d-m-Y', strtotime($relative->visaExpiry)) }}" readonly>
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