<div class="col-md-8">
  <h4><u>Student Data بيانات الطالب</u><br><br></h4>
</div>

<!-- Slevel_id Field -->
<div class="form-group col-md-2">
  <label for="level_idEd">@include('labels.level')</label>
  <select class="form-control" name="level_id" id="level_idEd" readonly>
    <option value="">Select a level...</option>
    @foreach($levels as $level)
      <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
  </select>
</div>

<!-- Sclassroom_id Field -->
<div class="form-group col-md-2">
  <label for="classroom_idEd">@include('labels.classroom')</label>
  <select class="form-control" name="classroom_id" id="classroom_idEd" readonly>
    @foreach($classrooms as $classroom)
      <option value="{{$classroom->id}}">{{$classroom->title}}</option>
    @endforeach
  </select>
</div>

<!-- Matricno Field -->
<div class="form-group col-md-2">
  <label for="matricNoEd">@include('labels.matricno')</label>
  <input type="number" min="0" class="form-control" name="studentNo" id="studentNoEd" readonly>
</div>

<!-- Sstatus Field -->
<div class="form-group col-md-2">
  <label for="statusEd">@include('labels.status')</label>
  <select class="form-control" name="status" id="statusEd" readonly>
    @foreach($statuses as $status)
      <option value="{{$status->id}}">{{$status->title}}</option>
    @endforeach
  </select>
</div>

<!-- eName Field -->
<div class="form-group col-md-4">
  <label for="eNameEd">@include('labels.ename')@include('layouts.required')</label>
  <input type="text" class="form-control" name="eName" id="eNameEd" required>
</div>

<!-- aName Field -->
<div class="form-group col-md-4">
  <label for="aNameEd">@include('labels.aname')@include('layouts.required')</label>
  <input type="text" class="form-control" name="aName" id="aNameEd" required>
</div>

<!-- name Field -->
<div class="form-group col-md-4">
  <label for="nameEd">@include('labels.sname')@include('layouts.required')</label>
  <input type="text" class="form-control" name="name" id="nameEd" required>
</div>

<!-- dob Field -->
<div class="form-group col-md-2">
  <label for="dobEd">@include('labels.dob')@include('layouts.required')</label>
  <input type="date" class="form-control" name="dob" id="dobEd" required>
</div>

<!-- gender Field -->
<div class="form-group col-md-2">
  <label for="genderEd">@include('labels.gender')@include('layouts.required')</label>
  <select class="form-control" name="gender" id="genderEd" required>
    <option value="">Select a Gender...</option>
    <option value="Female أنثى">Female أنثى</option>
    <option value="Male ذكر">Male ذكر</option>
  </select>
</div>

<!-- email Field -->
<div class="form-group col-md-4">
  <label for="emailEd">Student @include('labels.email') للطالب</label>
  <input type="email" class="form-control" name="email" id="emailEd">
</div>

<!-- phone Field -->
<div class="form-group col-md-2">
  <label for="phoneEd">Student @include('labels.phone') للطالب</label>
  <input type="text" class="form-control" name="phone" id="phoneEd">
</div>

<!-- phone Field -->
<div class="form-group col-md-2">
  <label for="rEd">Relative Name<br>اسم القريب @include('layouts.required')</label>
  <select required class="form-control" name="relative_id" id="rEd">
    @foreach ($relatives as $relative)
      <option value="{{$relative->id}}">{{$relative->eName}}</option>
    @endforeach
  </select>
</div>

<!-- phone Field -->
<div class="form-group col-md-2">
  <label for="relationEd">@include('labels.relation')@include('layouts.required')</label>
  <select required class="form-control" name="relation" id="relationEd">
    <option value="">Select a Relation...</option>
    <option value="Father أب">Father أب</option>
    <option value="Mother أم">Mother أم</option>
    <option value="Uncle عم / خال">Uncle عم / خال</option>
    <option value="Aunt عمة / خالة">Aunt عمة / خالة</option>
    <option value="Spouse زوج/ة">Spouse زوج/ة</option>
    <option value="Sibling أخ/ت">Sibling أخ/ت</option>
    <option value="Friend صديق/ة">Friend صديق/ة</option>
  </select>
</div>

<!-- address Field -->
<div class="form-group col-md-6">
  <label for="addressEd">@include('labels.address')@include('layouts.required')</label>
  <input type="text" class="form-control" name="address" id="addressEd" required>
</div>

<!-- nation Field -->
<div class="form-group col-md-3">
  <label for="nationEd">@include('labels.nation')@include('layouts.required')</label>
  <select class="form-control" name="nation" id="nationEd" required>
    <option value="">Select a nation...</option>
    @include('layouts.countriesList')
  </select>
</div>

<!-- ppno Field -->
<div class="form-group col-md-2">
  <label for="ppnoEd">@include('labels.passno')@include('layouts.required')</label>
  <input type="text" class="form-control" name="ppno" id="ppnoEd" required>
</div>

<!-- ppExpiry Field -->
<div class="form-group col-md-2">
  <label for="ppExpiryEd">@include('labels.ppe')@include('layouts.required')</label>
  <input type="date" class="form-control" name="ppExpiry" id="ppExpiryEd" required>
</div>

<!-- ppExpiry Field -->
<div class="form-group col-md-2">
  <label for="visaExpiryEd">@include('labels.ve')@include('layouts.required')</label>
  <input type="date" class="form-control" name="visaExpiry" id="visaExpiryEd" required>
</div>

<!-- trans Field -->
<div class="form-group col-md-3">
  <label for="transEd">Transport Type<br>نوع المواصلات @include('layouts.required')</label>
  <select class="form-control" name="trans" id="transEd" required>
    <option value="">Choose an Answer اختر إجابة</option>
    <option value="0">Own Transport مواصلات خاصة</option>
    <option value="1">School Bus باص المدرسة</option>
  </select>
  <input type="hidden" name="financial" id="financialEd">
</div>

<!-- Title Field -->
<div class="form-group col-md-2">
  <label for="classroom_idEd"><h4>Documents<br>الوثائق</h4></label>
</div>

<!-- photo Field -->
<div class="form-group col-md-2">
  <label for="photoEd">@include('labels.photo')</label>
  <input type="text" class="form-control" name="photo" id="photoEd">
</div>

<!-- passport Field -->
<div class="form-group col-md-2">
  <label for="passportEd">@include('labels.pass')</label>
  <input type="text" class="form-control" name="passport" id="passportEd">
</div>

<!-- visa Field -->
<div class="form-group col-md-2">
  <label for="visaEd">@include('labels.visa')</label>
  <input type="text" class="form-control" name="visa" id="visaEd">
</div>

<!-- doc1 Field -->
<div class="form-group col-md-2">
  <label for="doc1Ed">@include('labels.birth')</label>
  <input type="text" class="form-control" name="doc1" id="doc1Ed">
</div>

<!-- doc2 Field -->
<div class="form-group col-md-2">
  <label for="doc2Ed">@include('labels.school')</label>
  <input type="text" class="form-control" name="doc2" id="doc2Ed">
</div>