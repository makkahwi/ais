<div class="col-md-12">

    <div class="col-md-12">
        <h4><u>Student Data بيانات الطالب</u>
        <button class="btn btn-warning pull-right" type="submit"><i class="fas fa-file-download"></i> Download Confirmation Letter</button><br><br></h4>
    </div>

    <!-- Matricno Field -->
    <div class="form-group col-md-2">
        <label for="matricNoSw">@include('labels.matricno')</label>
        <input type="number" min="0" class="form-control" name="schoolNo" id="matricNoSw" readonly>
        @foreach($currentSem as $sem)
        <input hidden name="sem" value="{{$sem->title}}">
        <input hidden name="year" value="{{$sem->year->title}}">
        <input hidden name="start" value="{{$sem->start}}">
        <input hidden name="end" value="{{$sem->end}}">
        @endforeach
    </div>

    <!-- Sstatus Field -->
    <div class="form-group col-md-2">
        <label for="sStatusSw">@include('labels.status')</label>
        <input type="text" class="form-control" name="sStatus" id="sStatusSw" readonly>

    </div>

    <!-- eName Field -->
    <div class="form-group col-md-4">
        <label for="eNameSw">@include('labels.ename')</label>
        <input type="text" class="form-control" name="eName" id="eNameSw" readonly>
    </div>

    <!-- aName Field -->
    <div class="form-group col-md-4">
        <label for="aNameSw">@include('labels.aname')</label>
        <input type="text" class="form-control" name="aName" id="aNameSw" readonly>
    </div>

    <!-- name Field -->
    <div class="form-group col-md-4">
        <label for="nameSw">@include('labels.sname')</label>
        <input type="text" class="form-control" name="name" id="nameSw" readonly>
    </div>

    <!-- dob Field -->
    <div class="form-group col-md-2">
        <label for="dobSw">@include('labels.dob')</label>
        <input type="text" class="form-control" name="dob" id="dobSw" readonly>
    </div>

    <!-- gender Field -->
    <div class="form-group col-md-2">
        <label for="genderSw">@include('labels.gender')</label>
        <input type="text" class="form-control" name="gender" id="genderSw" readonly>
    </div>

    <!-- email Field -->
    <div class="form-group col-md-4">
        <label for="emailSw">Student @include('labels.email') للطالب</label>
        <input type="email" class="form-control" name="email" id="emailSw" readonly>
    </div>
</div>

<div class="col-md-10 no-gutter nopadding">
    <!-- phone Field -->
    <div class="form-group col-md-6">
        <label for="phoneSw">Student @include('labels.phone') للطالب</label>
        <input type="text" class="form-control" name="phone" id="phoneSw" readonly>
    </div>

    <!-- address Field -->
    <div class="form-group col-md-6">
        <label for="addressSw">@include('labels.address')</label>
        <input type="text" class="form-control" name="address" id="addressSw" readonly>
    </div>

    <!-- nation Field -->
    <div class="form-group col-md-2">
        <label for="nationSw">@include('labels.nation')</label>
        <input type="text" class="form-control" name="nation" id="nationSw" readonly>
    </div>

    <!-- ppno Field -->
    <div class="form-group col-md-2">
        <label for="ppnoSw">@include('labels.passno')</label>
        <input type="text" class="form-control" name="passno" id="ppnoSw" readonly>
    </div>

    <!-- ppExpiry Field -->
    <div class="form-group col-md-2">
        <label for="ppExpirySw">@include('labels.ppe')</label>
        <input type="text" class="form-control" name="ppExpiry" id="ppExpirySw" readonly>
    </div>

    <!-- visaExpiry Field -->
    <div class="form-group col-md-2">
        <label for="visaExpirySw">@include('labels.ve')</label>
        <input type="text" class="form-control" name="visaExpiry" id="visaExpirySw" readonly>
    </div>

    <!-- trans Field -->
    <div class="form-group col-md-2">
        <label for="transSw">Transport Type<br>نوع المواصلات</label>
        <select class="form-control" name="trans" id="transSw" readonly>
            <option value="">Choose an Answer اختر إجابة</option>
            <option value="0">Own Transport مواصلات خاصة</option>
            <option value="1">School Bus باص المدرسة</option>
        </select>
        <input hidden name="title" id="titleSw">
    </div>

    <!-- Sclassroom_id Field -->
    <div class="form-group col-md-2">
        <label for="sclassroom_idSw">@include('labels.classroom')</label>
        <input type="text" class="form-control" name="classroom" id="sclassroom_idSw" readonly>
    </div>

    <!-- passport Field -->
    <div class="form-group col-md-3">
        <label for="passportSw">@include('labels.pass')</label>
        <div id="passportSw"></div>
    </div>

    <!-- visa Field -->
    <div class="form-group col-md-3">
        <label for="visaSw">@include('labels.visa')</label>
        <div id="visaSw"></div>
    </div>

    <!-- doc1 Field -->
    <div class="form-group col-md-3">
        <label for="doc1Sw">@include('labels.birth')</label>
        <div id="doc1Sw"></div>
    </div>

    <!-- doc2 Field -->
    <div class="form-group col-md-3">
        <label for="doc2Sw">@include('labels.school')</label>
        <div id="doc2Sw"></div>
    </div>
</div>

<!-- photo Field -->
<div class="form-group col-md-2">
    <label for="photoSw">@include('labels.photo')</label>
    <div id="photo"></div>
    <div id="photoSw"></div>
</div>

<div class="col-md-12">
    <h4><br><br><u>Guardian Data بيانات ولي الأمر</u><br><br></h4>
</div>

<!-- eName Field -->
<div class="form-group col-md-4">
    <label for="reNameSw">@include('labels.ename')</label>
    <input type="text" class="form-control" name="reName" id="reNameSw" readonly>
</div>

<!-- aName Field -->
<div class="form-group col-md-4">
    <label for="raNameSw">@include('labels.aname')</label>
    <input type="text" class="form-control" name="raName" id="raNameSw" readonly>
</div>

<!-- gender Field -->
<div class="form-group col-md-2">
    <label for="rgenderSw">@include('labels.gender')</label>
    <input type="text" class="form-control" name="rgender" id="rgenderSw" readonly>
</div>

<!-- relation Field -->
<div class="form-group col-md-2">
    <label for="relationSw">@include('labels.relation')</label>
    <input type="text" class="form-control" name="relation" id="relationSw" readonly>
</div>

<!-- job Field -->
<div class="form-group col-md-3">
    <label for="jobSw">@include('labels.job')</label>
    <input type="text" class="form-control" name="job" id="jobSw" readonly>
</div>

<!-- org Field -->
<div class="form-group col-md-3">
    <label for="orgSw">@include('labels.org')</label>
    <input type="text" class="form-control" name="org" id="orgSw" readonly>
</div>

<!-- email Field -->
<div class="form-group col-md-3">
    <label for="remailSw">@include('labels.email')</label>
    <input type="email" class="form-control" name="remail" id="remailSw" readonly>
</div>

<!-- phone Field -->
<div class="form-group col-md-3">
    <label for="rphoneSw">@include('labels.phone')</label>
    <input type="text" class="form-control" name="rphone" id="rphoneSw" readonly>
</div>

<!-- h address Field -->
<div class="form-group col-md-6">
    <label for="haddressSw">@include('labels.address')</label>
    <input type="text" class="form-control" name="haddress" id="haddressSw" readonly>
</div>

<!-- w address Field -->
<div class="form-group col-md-6">
    <label for="waddressSw">@include('labels.waddress')</label>
    <input type="text" class="form-control" name="waddress" id="waddressSw" readonly>
</div>

<!-- nation Field -->
<div class="form-group col-md-2">
    <label for="rnationSw">@include('labels.nation')</label>
    <input type="text" class="form-control" name="rnation" id="rnationSw" readonly>
</div>

<!-- ppno Field -->
<div class="form-group col-md-2">
    <label for="rppnoSw">@include('labels.passno')</label>
    <input type="text" class="form-control" name="rppno" id="rppnoSw" readonly>
</div>

<!-- ppExpiry Field -->
<div class="form-group col-md-2">
    <label for="rppExpirySw">@include('labels.ppe')</label>
    <input type="text" class="form-control" name="rppExpiry" id="rppExpirySw" readonly>
</div>

<!-- visaExpiry Field -->
<div class="form-group col-md-2">
    <label for="rvisaExpirySw">@include('labels.ve')</label>
    <input type="text" class="form-control" name="rvisaExpiry" id="rvisaExpirySw" readonly>
</div>

<!-- passport Field -->
<div class="form-group col-md-2">
    <label for="rpassportSw">@include('labels.pass')</label>
    <div id="rpassportSw"></div>
</div>

<!-- visa Field -->
<div class="form-group col-md-2">
    <label for="rvisaSw">@include('labels.visa')</label>
    <div id="rvisaSw"></div>
</div>

<!-- more Field -->
<div class="form-group col-md-12">
    <label for="moreSw">@include('labels.more')</label>
    <textarea type="text" class="form-control" name="more" id="moreSw" readonly></textarea>
</div>