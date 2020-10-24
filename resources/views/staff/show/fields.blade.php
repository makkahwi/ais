<div class="col-md-12">
    <h4><u>Staff Data بيانات الموظف</u><br><br></h4>
</div>
    
<!-- staffNo Field -->
<div class="form-group col-md-2">
    <label for="staffNoSw">@include('labels.staffno')</label>
    <input type="text" class="form-control" name="staffNoSw" id="staffNoSw" readonly>
</div>

<!-- Role Field -->
<div class="form-group col-md-2">
    <label for="roleSw">@include('labels.role')</label>
    <input type="text" class="form-control" name="roleSw" id="roleSw" readonly>
</div>

<!-- Name Field -->
<div class="form-group col-md-3">
    <label for="eNameSw">@include('labels.ename')</label>
    <input type="text" class="form-control" name="eNameSw" id="eNameSw" readonly>
</div>

<!-- Name Field -->
<div class="form-group col-md-3">
    <label for="aNameSw">@include('labels.aname')</label>
    <input type="text" class="form-control" name="aNameSw" id="aNameSw" readonly>
</div>

<!-- Gender Field -->
<div class="form-group col-md-2">
    <label for="gendSw">@include('labels.gender')</label>
    <input type="text" class="form-control" name="gendSw" id="gendSw" readonly>
</div>

<!-- DOB Field -->
<div class="form-group col-md-2">
    <label for="dobSw">@include('labels.dob')</label>
    <input type="text" class="form-control" name="dobSw" id="dobSw" readonly>
</div>

<!-- Email Field -->
<div class="form-group col-md-3">
    <label for="emailSw">@include('labels.email')</label>
    <input type="text" class="form-control" name="emailSw" id="emailSw" readonly>
</div>

<!-- Phone Field -->
<div class="form-group col-md-3">
    <label for="phoneSw">@include('labels.phone')</label>
    <input type="text" class="form-control" name="phoneSw" id="phoneSw" readonly>
</div>

<!-- Roomno Field -->
<div class="form-group col-md-4">
    <label for="addressSw">@include('labels.address')</label>
    <input type="text" class="form-control" name="addressSw" id="addressSw" readonly>
</div>

<!-- Nationality Field -->
<div class="form-group col-md-2">
    <label for="natSw">@include('labels.nation')</label>
    <input type="text" class="form-control" name="natSw" id="natSw" readonly>
</div>

<!-- Passport No Field -->
<div class="form-group col-md-2">
    <label for="ppnoSw">@include('labels.passno')</label>
    <input type="text" class="form-control" name="ppnoSw" id="ppnoSw" readonly>
</div>

<!-- Passport Expiry Field -->
<div class="form-group col-md-2">
    <label for="ppeSw">@include('labels.ppe')</label>
    <input type="text" class="form-control" name="ppeSw" id="ppeSw" readonly>
</div>

<!-- Visa Expiry Field -->
<div class="form-group col-md-2">
    <label for="veSw">@include('labels.ve')</label>
    <input type="text" class="form-control" name="veSw" id="veSw" readonly>
</div>

<!-- Status Field -->
<div class="form-group col-md-2">
    <label for="statusSw">@include('labels.status')</label>
    <input type="text" class="form-control" name="statusSw" id="statusSw" readonly>
</div>

<!-- Leave Date Field -->
<div class="form-group col-md-2">
    <label for="leaveDateSw">@include('labels.ldate')</label>
    <input type="text" class="form-control" name="leaveDateSw" id="leaveDateSw" readonly>
</div>

<!-- Photo Field -->
<div class="form-group col-md-2">
    <label for="photoSw">@include('labels.photo')</label>
    <input type="text" class="form-control" name="photo" id="photoSw" readonly>
    <div id="photolink"></div>
</div>

<!-- passport Field -->
<div class="form-group col-md-2">
    <label for="passportSw">@include('labels.pass')</label>
    <input type="text" class="form-control" name="passport" id="passportSw" readonly>
    <div id="passportlink"></div>
</div>

<!-- visa Field -->
<div class="form-group col-md-2">
    <label for="visaSw">@include('labels.visa')</label>
    <input type="text" class="form-control" name="visa" id="visaSw" readonly>
    <div id="visalink"></div>
</div>

<!-- doc1 Field -->
<div class="form-group col-md-2">
    <label for="doc1Sw">@include('labels.certificate')</label>
    <input type="text" class="form-control" name="doc1" id="doc1Sw" readonly>
    <div id="doc1link"></div>
</div>

<!-- doc2 Field -->
<div class="form-group col-md-2">
    <label for="doc2Sw">@include('labels.work')</label>
    <input type="text" class="form-control" name="doc2" id="doc2Sw" readonly>
    <div id="doc2link"></div>
</div>

<!-- doc3 Field -->
<div class="form-group col-md-2">
    <label for="doc3Sw">@include('labels.health')</label>
    <input type="text" class="form-control" name="doc3" id="doc3Sw" readonly>
    <div id="doc3link"></div>
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