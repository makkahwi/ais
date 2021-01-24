<div class="col-md-8">
  <h3>Student Data | بيانات الطالب<br><br></h3>
</div>

<!-- Slevel_id Field -->
<div class="form-group col-md-2">
  <label for="slevel_idSw">@include('labels.level')</label>
  <input type="text" class="form-control" name="slevel_idSw" id="slevel_idSw" readonly>
</div>

<!-- Sclassroom_id Field -->
<div class="form-group col-md-2">
  <label for="sclassroom_idSw">@include('labels.classroom')</label>
  <input type="text" class="form-control" name="sclassroom_idSw" id="sclassroom_idSw" readonly>
</div>

<div class="col-md-12">
  <!-- Matricno Field -->
  <div class="form-group col-md-2">
    <label for="matricNoSw">@include('labels.matricno')</label>
    <input type="number" min="0" class="form-control" name="matricNoSw" id="matricNoSw" readonly>
  </div>

  <!-- Sstatus Field -->
  <div class="form-group col-md-2">
    <label for="sStatusSw">@include('labels.status')</label>
    <input type="text" class="form-control" name="sStatusSw" id="sStatusSw" readonly>

  </div>

  <!-- Sename Field -->
  <div class="form-group col-md-4">
    <label for="seNameSw">@include('labels.ename')</label>
    <input type="text" class="form-control" name="seNameSw" id="seNameSw" readonly>
  </div>

  <!-- Saname Field -->
  <div class="form-group col-md-4">
    <label for="saNameSw">@include('labels.aname')</label>
    <input type="text" class="form-control" name="saNameSw" id="saNameSw" readonly>
  </div>

  <!-- Studentname Field -->
  <div class="form-group col-md-4">
    <label for="studentNameSw">@include('labels.sname')</label>
    <input type="text" class="form-control" name="studentNameSw" id="studentNameSw" readonly>
  </div>

  <!-- Sdob Field -->
  <div class="form-group col-md-2">
    <label for="sDobSw">@include('labels.dob')</label>
    <input type="text" class="form-control" name="sDobSw" id="sDobSw" readonly>
  </div>

  <!-- Sgender Field -->
  <div class="form-group col-md-2">
    <label for="sGenderSw">@include('labels.gender')</label>
    <input type="text" class="form-control" name="sGenderSw" id="sGenderSw" readonly>
  </div>

  <!-- Semail Field -->
  <div class="form-group col-md-4">
    <label for="sEmailSw">@include('labels.email')</label>
    <input type="email" class="form-control" name="sEmailSw" id="sEmailSw" readonly>
  </div>
</div>

<div class="col-md-10 no-gutter nopadding">
  <!-- Sphone Field -->
  <div class="form-group col-md-6">
    <label for="sPhoneSw">@include('labels.phone')</label>
    <input type="text" class="form-control" name="sPhoneSw" id="sPhoneSw" readonly>
  </div>

  <!-- Saddress Field -->
  <div class="form-group col-md-6">
    <label for="sAddressSw">@include('labels.address')</label>
    <input type="text" class="form-control" name="sAddressSw" id="sAddressSw" readonly>
  </div>

  <!-- Snation Field -->
  <div class="form-group col-md-2">
    <label for="sNationSw">@include('labels.nation')</label>
    <input type="text" class="form-control" name="sNationSw" id="sNationSw" readonly>
  </div>

  <!-- Sppno Field -->
  <div class="form-group col-md-2">
    <label for="sppnoSw">@include('labels.passno')</label>
    <input type="text" class="form-control" name="sppnoSw" id="sppnoSw" readonly>
  </div>

  <!-- Sppexpiry Field -->
  <div class="form-group col-md-2">
    <label for="sppExpirySw">@include('labels.ppe')</label>
    <input type="text" class="form-control" name="sppExpirySw" id="sppExpirySw" readonly>
  </div>

  <!-- Sppexpiry Field -->
  <div class="form-group col-md-2">
    <label for="svisaExpirySw">@include('labels.ve')</label>
    <input type="text" class="form-control" name="svisaExpirySw" id="svisaExpirySw" readonly>
  </div>

  <!-- Visa Rquest Field -->
  <div class="form-group col-md-2">
    <label for="svisarequest">Request Student Visa?<br>مطلوب فيزا طالب؟</label>
    <input type="text" class="form-control" name="svisarequest" id="svisarequestSw" readonly>
  </div>

  <!-- Trans Request Field -->
  <div class="form-group col-md-2">
    <label for="stransrequest">Request School Bus?<br>مطلوب باص مدرسة؟</label>
    <input type="text" class="form-control" name="stransrequest" id="stransrequestSw" readonly>
  </div>

  <div class="clearfix bg-info"></div>

  <!-- Sbirth Field -->
  <div class="form-group col-md-3">
    <label for="sBirthSw">@include('labels.birth')</label>
    <div id="doc1Sw"></div>
  </div>

  <!-- Sschool Field -->
  <div class="form-group col-md-3">
    <label for="sSchoolSw">@include('labels.school')</label>
    <div id="doc2Sw"></div>
  </div>

  <!-- Spassport Field -->
  <div class="form-group col-md-3">
    <label for="sPassportSw">@include('labels.pass')</label>
    <div id="passportSw"></div>
  </div>

  <!-- Svisa Field -->
  <div class="form-group col-md-3">
    <label for="sVisaSw">@include('labels.visa')</label>
    <div id="visaSw"></div>
  </div>
</div>

<!-- Sphoto Field -->
<div class="form-group col-md-2">
  <label for="sPhotoSw">@include('labels.photo')</label>
  <div id="photoDisplay"></div>
  <div id="photoSw"></div>
</div>

<div class="col-md-12">
  <h3>Guardian Data | بيانات ولي الأمر<br><br></h3>
</div>

<!-- ename Field -->
<div class="form-group col-md-3">
  <label for="eName">@include('labels.ename')</label>
  <input type="text" class="form-control" id="reNameSw" readonly>
</div>

<!-- aname Field -->
<div class="form-group col-md-3">
  <label for="aName">@include('labels.aname')</label>
  <input type="text" class="form-control" id="raNameSw" readonly>
</div>

<!-- gender Field -->
<div class="form-group col-md-3">
  <label for="gender">@include('labels.gender')</label>
  <input type="text" class="form-control" id="rGenderSw" readonly>
</div>

<!-- relation Field -->
<div class="form-group col-md-3">
  <label for="relation">@include('labels.relation')</label>
  <input type="text" class="form-control" id="relationSw" readonly>
</div>

<!-- job Field -->
<div class="form-group col-md-3">
  <label for="job">@include('labels.job')</label>
  <input type="text" class="form-control" id="jobSw" readonly>
</div>

<!-- org Field -->
<div class="form-group col-md-3">
  <label for="org">@include('labels.org')</label>
  <input type="text" class="form-control" id="orgSw" readonly>
</div>

<!-- email Field -->
<div class="form-group col-md-3">
  <label for="email">@include('labels.email')</label>
  <input type="text" class="form-control" id="rEmailSw" readonly>
</div>

<!-- phone Field -->
<div class="form-group col-md-3">
  <label for="phone">@include('labels.phone')</label>
  <input type="text" class="form-control" id="rPhoneSw" readonly>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
  <label for="address">@include('labels.address')</label>
  <input type="text" class="form-control" id="rhAddressSw" readonly>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
  <label for="address">@include('labels.waddress')</label>
  <input type="text" class="form-control" id="rwAddressSw" readonly>
</div>

<!-- nation Field -->
<div class="form-group col-md-2">
  <label for="nation">@include('labels.nation')</label>
  <input type="text" class="form-control" id="rNationSw" readonly>
</div>

<!-- ppno Field -->
<div class="form-group col-md-2">
  <label for="passno">@include('labels.passno')</label>
  <input type="text" class="form-control" id="rppnoSw" readonly>
</div>

<!-- ppexpiry Field -->
<div class="form-group col-md-2">
  <label for="ppe">@include('labels.ppe')</label>
  <input type="text" class="form-control" id="rppeSw" readonly>
</div>

<!-- ppexpiry Field -->
<div class="form-group col-md-2">
  <label for="ve">@include('labels.ve')</label>
  <input type="text" class="form-control" id="rveSw" readonly>
</div>

<!-- Spassport Field -->
<div class="form-group col-md-2">
  <label for="rPassportSw">@include('labels.pass')</label>
  <div id="rPassportSw"></div>
</div>

<!-- Svisa Field -->
<div class="form-group col-md-2">
  <label for="rVisaSw">@include('labels.visa')</label>
  <div id="rVisaSw"></div>
</div>