<div class="form-group col-md-6">
  <label for="schoolNo">@include('labels.sno')</label>
  <input required type="text" class="form-control" name="schoolNo">
</div>

<div class="form-group col-md-6">
  <label for="name">@include('labels.sname')</label>
  <input required type="text" class="form-control" name="name">
</div>

<div class="form-group col-md-6">
  <label for="password">@include('labels.pword')</label>
  <input required type="password" class="form-control" name="password">
</div>

<div class="form-group col-md-6">
  <label for="password_confirmation">Password Confirmation<br>تأكيد كلمة المرور</label>
  <input required type="password" name="password_confirmation" class="form-control">
</div>

<!-- ename Field -->
<div class="form-group col-md-6">
  <label for="eName">@include('labels.ename')</label>
  <input required type="text" class="form-control" name="eName" placeholder="Same as ID / Passport">
</div>

<!-- aname Field -->
<div class="form-group col-md-6">
  <label for="aName">@include('labels.aname')</label>
  <input required type="text" class="form-control" style="text-transform:capitalize;" name="aName" placeholder="Same as ID / Passport">
</div>

<!-- dob Field -->
<div class="form-group col-md-6">
  <label for="dob">@include('labels.dob')</label>
  <input required type="date" max={{today()}} class="form-control" name="dob" id="dob">
</div>

<!-- gender Field -->
<div class="form-group col-md-6">
  <label for="gender">@include('labels.gender')</label>
  <select required class="form-control" name="gender">
    <option value="">Select a Gender...</option>
    <option value="Female أنثى">Female أنثى</option>
    <option value="Male ذكر">Male ذكر</option>
  </select>
</div>

<!-- email Field -->
<div class="form-group col-md-8">
  <label for="email">@include('labels.email')</label>
  <input required type="email" class="form-control" name="email">
</div>

<!-- phone Field -->
<div class="form-group col-md-4">
  <label for="phone">@include('labels.phone')</label>
  <input required type="text" class="form-control" name="phone">
</div>

<!-- address Field -->
<div class="form-group col-md-12">
  <label for="address">@include('labels.address')</label>
  <input required type="text" class="form-control" name="address">
</div>

<!-- nation Field -->
<div class="form-group col-md-4">
  <label for="nation">@include('labels.nation')</label>
  <select required class="form-control" name="nation">
    <option value="">Select a nation...</option>
    @include('layouts.countriesList')
  </select>
</div>

<!-- ppno Field -->
<div class="form-group col-md-4">
  <label for="ppno">@include('labels.passno')</label>
  <input required type="text" class="form-control" name="ppno">
</div>

<!-- ppexpiry Field -->
<div class="form-group col-md-4">
  <label for="ppExpiry">@include('labels.ppe')</label>
  <input required type="date" min={{today()}} max="2030-12-31" class="form-control" name="ppExpiry" id="ppExpiry">
</div>

@include('layouts.filesValidation')

<!-- photo Field -->
<div class="col-md-4">
  <label for="photo">@include('labels.photo')</label>
  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="photo" id="photo">
</div>

<!-- birth Field -->
<div class="form-group col-md-4">
  <label for="doc1">@include('labels.birth')</label>
  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc1" id="doc1">
</div>

<!-- school Field -->
<div class="form-group col-md-4">
  <label for="doc2">@include('labels.school')</label>
  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc2" id="doc2">
</div>

<!-- passport Field -->
<div class="form-group col-md-6">
  <label for="passport">@include('labels.pass')</label>
  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="passport" id="passport">
</div>

<!-- visa Field -->
<div class="form-group col-md-6">
  <label for="visa">@include('labels.visa')</label>
  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="visa" id="visa">
</div>

<div class="row">
  <div class="col-xs-8">
    <div class="checkbox icheck">
      <label>
        <input required type="checkbox"> I agree to the <a href="#">terms</a>
      </label>
    </div>
  </div>

  <div class="col-xs-4">
    <button type="submit" class="btn btn-success btn-block btn-flat">Apply تقديم</button>
  </div>
</div>