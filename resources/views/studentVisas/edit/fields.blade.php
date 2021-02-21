<!-- Student Field -->
<div class="form-group col-md-12">
  <label for="student">@include('labels.student') @include('layouts.required')</label>
  <select required class="form-control" name="student" id="studentEd">
  @foreach($students as $student)
    <option value="{{$student->studentNo}}">{{$student->user->name}}</option>
  @endforeach
  </select>
</div>

<!-- Fathers Passport Field -->
<div class="form-group col-md-4">
  <label for="fathersPassport">@include('labels.ppf') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="fathersPassport" id="fathersPassportEd">
</div>

<!-- Fathers Visas Field -->
<div class="form-group col-md-4">
  <label for="fathersVisas">@include('labels.ppfv') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="fathersVisas" id="fathersVisasEd">
</div>

<!-- Fathers Letter Field -->
<div class="form-group col-md-4">
  <label for="fathersLetter">@include('labels.fletter') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="fathersLetter" id="fathersLetterEd">
</div>

<!-- Mothers Passport Field -->
<div class="form-group col-md-4">
  <label for="mothersPassport">@include('labels.ppm') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="mothersPassport" id="mothersPassportEd">
</div>

<!-- Mothers Visas Field -->
<div class="form-group col-md-4">
  <label for="mothersVisas">@include('labels.ppmv') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="mothersVisas" id="mothersVisasEd">
</div>

<!-- Mothers Letter Field -->
<div class="form-group col-md-4">
  <label for="mothersLetter">@include('labels.mletter') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="mothersLetter" id="mothersLetterEd">
</div>

<!-- Students Passport Field -->
<div class="form-group col-md-4">
  <label for="studentsPassport">@include('labels.pps') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="studentsPassport" id="studentsPassportEd">
</div>

<!-- Students Visas Field -->
<div class="form-group col-md-4">
  <label for="studentsVisas">@include('labels.ppsv') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="studentsVisas" id="studentsVisasEd">
</div>

<!-- Embassy Letter Field -->
<div class="form-group col-md-4">
  <label for="embassyLetter">@include('labels.eletter') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="embassyLetter" id="embassyLetterEd">
</div>

<!-- School Letter Field -->
<div class="form-group col-md-4">
  <label for="schoolLetter">@include('labels.eletter')</label>
  <input type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="schoolLetter" id="schoolLetterEd">
</div>

<!-- Status Field -->
<div class="form-group col-md-6">
  <label for="status">@include('labels.status') @include('layouts.required')</label>
  <select required class="form-control" name="status" id="statusEd">
    <option value="Applied">Applied</option>
    <option value="Rejected">Rejected</option>
    <option value="Accepted">Accepted</option>
    <option value="In Proccess">In Proccess</option>
  </select>
</div>

<!-- Note Field -->
<div class="form-group col-md-6">
  <label for="note">@include('labels.note')</label>
  <input type="text" class="form-control" name="note" id="noteEd">
</div>