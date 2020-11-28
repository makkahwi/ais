<div class="col-md-12">
    <h3 style="text-align:center;"><u>Applicant Data بيانات المتقدم</u></h3><br>
</div>

<!-- ename Field -->
<div class="form-group col-md-6">
    <label for="eName">@include('labels.ename')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="eName" placeholder="Same as ID / Passport">
</div>

<!-- aname Field -->
<div class="form-group col-md-6">
    <label for="aName">@include('labels.aname')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="aName" placeholder="Same as ID / Passport">
</div>

<!-- gender Field -->
<div class="form-group col-md-6">
    <label for="gender">@include('labels.gender')@include('layouts.required')</label>
    <select required class="input100" name="gender">
        <option value="">Select a Gender...</option>
        <option value="Female أنثى">Female أنثى</option>
        <option value="Male ذكر">Male ذكر</option>
    </select>
</div>

<!-- dob Field -->
<div class="form-group col-md-6">
    <label for="dob">@include('labels.dob')@include('layouts.required')</label>
    <input required type="date" max={{today()}} class="input100" name="dob" id="dob">
</div>

<!-- email Field -->
<div class="form-group col-md-6">
    <label for="email">@include('labels.email')@include('layouts.required')</label>
    <input required type="email" class="input100" name="email">
</div>

<!-- phone Field -->
<div class="form-group col-md-6">
    <label for="phone">@include('labels.phone')@include('layouts.required')</label>
    <input required type="text" class="input100" name="phone">
</div>

<!-- address Field -->
<div class="form-group col-md-12">
    <label for="hAddress">@include('labels.address')@include('layouts.required')</label>
    <input required type="text" class="input100" name="hAddress">
</div>

<!-- nation Field -->
<div class="form-group col-md-6">
    <label for="nation">@include('labels.nation')@include('layouts.required')</label>
    <input class="input100" list="nations" name="nation">
    <datalist  required id="nations">
        <option value="">Select a nation...</option>
        @include('layouts.countriesList')
    </datalist>
</div>

<!-- ppno Field -->
<div class="form-group col-md-6">
    <label for="ppno">@include('labels.passno')@include('layouts.required')</label>
    <input required type="text" class="input100" name="ppno">
</div>

@include('layouts.filesValidation')

<!-- photo Field -->
<div class="form-group col-md-6">
    <label for="photo">@include('labels.photo')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="photo" id="photo">
</div>

<!-- CV Field -->
<div class="form-group col-md-6">
    <label for="doc1">@include('labels.resume')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc1" id="doc1">
</div>

<!-- Academic Field -->
<div class="form-group col-md-6">
    <label for="doc2">@include('labels.certificate')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc2" id="doc2">
</div>

<!-- Experience Field -->
<div class="form-group col-md-6">
    <label for="doc3">@include('labels.experiance')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc3" id="doc3">
</div>

<!-- Additional Field -->
<div class="form-group col-md-6">
    <label for="doc4">Additional Documents<br>وثائق إضافية</label>
    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc4" id="doc4">
</div>

<!-- Additional Field -->
<div class="form-group col-md-6">
    <label for="doc5">Additional Documents<br>وثائق إضافية</label>
    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc5" id="doc5">
</div>

<div class="row">
    <div class="col-xs-5">
        <label style="text-align:justify; direction:rtl;">
            أقر بأنني قرأت ووافقت على <a target="_blank" href="https://aqsa.edu.my/terms-conditions/">شروط الاستخدام</a>, <a target="_blank" href="https://aqsa.edu.my/website-privacy/">سياسات الخصوصية</a>, <a target="_blank" href="https://aqsa.edu.my/personal-data-protection-policy/">وسياسة حماية البيانات</a> للموقع, بالإضافة لـ<a href="#">قوانين ولوائح المدرسة</a><br>
        </label>
    </div>
    <div class="col-xs-1">
        <input required type="checkbox">
    </div>
    <div class="col-xs-6">
        <label style="text-align:justify;">
            I read & agreed to the website's <a target="_blank" href="https://aqsa.edu.my/terms-conditions/">terms & conditions</a>, <a target="_blank" href="https://aqsa.edu.my/website-privacy/">privacy policy</a> and <a target="_blank" href="https://aqsa.edu.my/personal-data-protection-policy/">data protection policy</a>, beside <a href="#">school's laws & rules</a>
        </label>
    </div>
</div>

<br><br>

<div class="row">

    <div class="col-md-2"></div>

    <div class="form-group wrap-input100 col-md-8">
        <button type="submit" class="btn btn-success btn-block btn-flat">Apply تقديم</button>
    </div>

    <div class="col-md-2"></div>

</div>