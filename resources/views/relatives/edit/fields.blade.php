<!-- Rename Field -->
<div class="form-group col-md-3">
    <label for="reName">@include('labels.ename')@include('layouts.required')</label>
    <input required type="text" class="form-control" style="text-transform:capitalize;" name="eName" id="reNameEd">
</div>

<!-- Raname Field -->
<div class="form-group col-md-3">
    <label for="raName">@include('labels.aname')@include('layouts.required')</label>
    <input required type="text" class="form-control" style="text-transform:capitalize;" name="aName" id="raNameEd">
</div>

<!-- Rname Field -->
<div class="form-group col-md-3">
    <label for="rName">@include('labels.sname')@include('layouts.required')</label>
    <input required type="text" class="form-control" name="name" id="rNameEd">
</div>

<!-- Rgender Field -->
<div class="form-group col-md-3">
    <label for="rGender">@include('labels.gender')@include('layouts.required')</label>
    <select required class="form-control" name="gender" id="rGenderEd">
        <option value="">Select a Gender...</option>
        <option value="Female أنثى">Female أنثى</option>
        <option value="Male ذكر">Male ذكر</option>
    </select>
</div>

<!-- Job Field -->
<div class="form-group col-md-3">
    <label for="job">@include('labels.job')@include('layouts.required')</label>
    <input required type="text" class="form-control" name="job" id="jobEd">
</div>

<!-- Org Field -->
<div class="form-group col-md-3">
    <label for="org">@include('labels.org')</label>
    <input type="text" class="form-control" name="org" id="orgEd">
</div>

<!-- Rwaddress Field -->
<div class="form-group col-md-6">
    <label for="rwAddress">@include('labels.waddress')</label>
    <input type="text" class="form-control" name="wAddress" id="rwAddressEd">
</div>

<!-- Remail Field -->
<div class="form-group col-md-3">
    <label for="rEmail">@include('labels.email')@include('layouts.required')</label>
    <input required type="email" class="form-control" name="email" id="rEmailEd">
</div>

<!-- Rphone Field -->
<div class="form-group col-md-3">
    <label for="rPhone">@include('labels.phone')@include('layouts.required')</label>
    <input required type="text" class="form-control" name="phone" id="rPhoneEd">
</div>

<!-- Rhaddress Field -->
<div class="form-group col-md-6">
    <label for="rhAddress">@include('labels.address')@include('layouts.required')</label>
    <input required type="text" class="form-control" name="hAddress" id="rhAddressEd">
</div>

<!-- Rnation Field -->
<div class="form-group col-md-2">
    <label for="rNation">@include('labels.nation')</label>
    <select class="form-control" name="nation" id="rNationEd">
        <option value="">Select a nation...</option>
        @include('layouts.countriesList')
    </select>
</div>

<!-- Rppno Field -->
<div class="form-group col-md-2">
    <label for="rppno">@include('labels.passno')</label>
    <input type="text" class="form-control" name="ppno" id="rppnoEd">
</div>

<!-- Rppexpiry Field -->
<div class="form-group col-md-2">
    <label for="rppExpiry">@include('labels.ppe')</label>
    <input type="text" class="form-control" name="ppExpiry" id="rppExpiryEd">
</div>

<!-- Rppexpiry Field -->
<div class="form-group col-md-2">
    <label for="visaExpiry">@include('labels.ve')</label>
    <input type="text" class="form-control" name="visaExpiry" id="rvisaExpiryEd">
</div>

<!-- Rpassrort Field -->
<div class="form-group col-md-2">
    <label for="rPassrort">@include('labels.pass')</label>
    <input type="text" class="form-control" name="passport" id="rPassrortEd">
</div>

<!-- Rvisa Field -->
<div class="form-group col-md-2">
    <label for="rVisa">@include('labels.visa')</label>
    <input type="text" class="form-control" name="visa" id="rVisaEd">
</div>

<!-- More Field -->
<div class="form-group col-md-6">
    <label for="more">@include('labels.more')</label>
    <textarea type="text" class="form-control" name="more" id="moreEd"></textarea>
</div>