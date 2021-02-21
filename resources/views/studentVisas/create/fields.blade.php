<!-- Student Field -->
<div class="form-group col-md-12">
  <label for="student">@include('labels.student') @include('layouts.required')</label>
  <select required class="form-control" name="student" id="student">
  @foreach($students as $student)
    <option value="{{$student->studentNo}}">{{$student->studentNo}} | {{$student->user->name}}</option>
  @endforeach
  </select>
</div>

<!-- Fathers Passport Field -->
<div class="form-group col-md-4">
  <label for="fathersPassport">@include('labels.ppf') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="fathersPassport" id="fathersPassport">
</div>

<!-- Fathers Visas Field -->
<div class="form-group col-md-4">
  <label for="fathersVisas">@include('labels.ppfv') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="fathersVisas" id="fathersVisas">
</div>

<!-- Fathers Letter Field -->
<div class="form-group col-md-4">
  <label for="fathersLetter">@include('labels.fletter') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="fathersLetter" id="fathersLetter">
</div>

<!-- Mothers Passport Field -->
<div class="form-group col-md-4">
  <label for="mothersPassport">@include('labels.ppm') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="mothersPassport" id="mothersPassport">
</div>

<!-- Mothers Visas Field -->
<div class="form-group col-md-4">
  <label for="mothersVisas">@include('labels.ppmv') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="mothersVisas" id="mothersVisas">
</div>

<!-- Mothers Letter Field -->
<div class="form-group col-md-4">
  <label for="mothersLetter">@include('labels.mletter') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="mothersLetter" id="mothersLetter">
</div>

<!-- Students Passport Field -->
<div class="form-group col-md-4">
  <label for="studentsPassport">@include('labels.pps') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="studentsPassport" id="studentsPassport">
</div>

<!-- Students Visas Field -->
<div class="form-group col-md-4">
  <label for="studentsVisas">@include('labels.ppsv') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="studentsVisas" id="studentsVisas">
</div>

<!-- Embassy Letter Field -->
<div class="form-group col-md-4">
  <label for="embassyLetter">@include('labels.eletter') @include('layouts.required')</label>
  <input required type="file" accept=".pdf" onchange="validateSize(this)" class="form-control" name="embassyLetter" id="embassyLetter">
</div>

<!-- Status Field -->
<div class="form-group col-md-6">
  <label for="status">@include('labels.status') @include('layouts.required')</label>
  <select required class="form-control" name="status" id="status">
    <option value="Applied">Applied</option>
  </select>
</div>

<!-- Note Field -->
<div class="form-group col-md-6">
  <label for="note">@include('labels.note')</label>
  <input type="text" class="form-control" name="note" id="note">
</div>