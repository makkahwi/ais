<!-- staffNo Field -->
<div class="form-group col-md-2">
    <label for="staffNoed">@include('labels.staffno')</label>
    <input type="text" readonly class="form-control" name="staffNo" id="staffNoED">
</div>

<!-- Role Field -->
<div class="form-group col-md-2">
    <label for="name">@include('labels.sname')@include('layouts.required')</label>
    <input type="text" required class="form-control" name="name" id="nameEd">
</div>

<!-- Name Field -->
<div class="form-group col-md-3">
    <label for="eNameed">@include('labels.ename')@include('layouts.required')</label>
    <input required type="text" class="form-control" style="text-transform:capitalize;" name="eName" id="eNameED">
</div>

<!-- Name Field -->
<div class="form-group col-md-3">
    <label for="aNameed">@include('labels.aname')@include('layouts.required')</label>
    <input required type="text" class="form-control" style="text-transform:capitalize;" name="aName" id="aNameED">
</div>

<!-- Gender Field -->
<div class="form-group col-md-2">
    <label for="gendered">@include('labels.gender')@include('layouts.required')</label>
    <select required class="form-control" name="gender" id="genderED">
        <option value="Female أنثى">Female أنثى</option>
        <option value="Male ذكر">Male ذكر</option>
    </select>
</div>

<!-- DOB Field -->
<div class="form-group col-md-2">
    <label for="dobed">@include('labels.dob')@include('layouts.required')</label>
    <input required type="date" max={{today()}}  class="form-control" name="dob" id="dobED">
</div>

<!-- Email Field -->
<div class="form-group col-md-3">
    <label for="emailed">@include('labels.email')@include('layouts.required')</label>
    <input required type="email" class="form-control" name="email" id="emailED">
</div>

<!-- Phone Field -->
<div class="form-group col-md-3">
    <label for="phoneed">@include('labels.phone')@include('layouts.required')</label>
    <input required type="number" min="0" class="form-control" name="phone" id="phoneED">
</div>

<!-- Roomno Field -->
<div class="form-group col-md-4">
    <label for="addressed">@include('labels.address')@include('layouts.required')</label>
    <input required type="text" class="form-control" name="address" id="addressED">
</div>

<!-- Nationality Field -->
<div class="form-group col-md-2">
    <label for="nated">@include('labels.nation')@include('layouts.required')</label>
    <select required class="form-control" name="nation" id="natED">
        <option>Choose a nation...</option>
        @include('layouts.countriesList')
    </select>
</div>

<!-- Passport No Field -->
<div class="form-group col-md-2">
    <label for="ppnoed">@include('labels.passno')@include('layouts.required')</label>
    <input required type="text" class="form-control" name="ppno" id="ppnoED">
</div>

<!-- Passport Expiry Field -->
<div class="form-group col-md-2">
    <label for="ppeed">@include('labels.ppe')@include('layouts.required')</label>
    <input required type="date" class="form-control" name="ppExpiry" id="ppeED">
</div>

<!-- Visa Expiry Field -->
<div class="form-group col-md-2">
    <label for="veed">@include('labels.ve')@include('layouts.required')</label>
    <input required type="date" class="form-control" name="visaExpiry" id="veedEd">
</div>

<!-- Status Field -->
<div class="form-group col-md-2">
    <label for="statused">@include('labels.status')@include('layouts.required')</label>
    <select required class="form-control" name="status" id="statusED">
        @foreach($statuses as $status)
            <option value="{{$status->id}}">{{$status->title}}</option>
        @endforeach
    </select>
</div>

<!-- Leave Date Field -->
<div class="form-group col-md-2">
    <label for="leaveDateed">@include('labels.ldate')</label>
    <input type="date" class="form-control" name="leaveDate" id="leaveDateED">
</div>

<!-- Photo Field -->
<div class="form-group col-md-2">
    <label for="photoEd">@include('labels.photo')</label>
    <input type="text" class="form-control" name="photo" id="photoEd">
    <div id="photolink"></div>
</div>

<!-- passport Field -->
<div class="form-group col-md-2">
    <label for="passportEd">@include('labels.pass')</label>
    <input type="text" class="form-control" name="passport" id="passportEd">
    <div id="passportlink"></div>
</div>

<!-- visa Field -->
<div class="form-group col-md-2">
    <label for="visaEd">@include('labels.visa')</label>
    <input type="text" class="form-control" name="visa" id="visaEd">
    <div id="visalink"></div>
</div>

<!-- doc1 Field -->
<div class="form-group col-md-2">
    <label for="doc1Ed">@include('labels.certificate')</label>
    <input type="text" class="form-control" name="doc1" id="doc1Ed">
    <div id="doc1link"></div>
</div>

<!-- doc2 Field -->
<div class="form-group col-md-2">
    <label for="doc2Ed">@include('labels.work')</label>
    <input type="text" class="form-control" name="doc2" id="doc2Ed">
    <div id="doc2link"></div>
</div>

<!-- doc3 Field -->
<div class="form-group col-md-2">
    <label for="doc3Ed">@include('labels.health')</label>
    <input type="text" class="form-control" name="doc3" id="doc3Ed">
    <div id="doc3link"></div>
</div>