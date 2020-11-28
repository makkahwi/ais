<div class="col-md-12">
    <h3 style="text-align:center;"><u>Staff Data بيانات الموظف</u></h3><br>
</div>

<!-- ename Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="eName">@include('labels.ename')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="eName" placeholder="Same as ID / Passport">
</div>

<!-- aname Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="aName">@include('labels.aname')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="aName" placeholder="Same as ID / Passport">
</div>

<!-- dob Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="dob">@include('labels.dob')@include('layouts.required')</label>
    <input required type="date" max={{today()}} class="input100" name="dob" id="dob">
</div>

<!-- gender Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="gender">@include('labels.gender')@include('layouts.required')</label>
    <select required class="input100" name="gender">
        <option value="">Select a Gender...</option>
        <option value="Female أنثى">Female أنثى</option>
        <option value="Male ذكر">Male ذكر</option>
    </select>
</div>

<!-- email Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="email">@include('labels.email')@include('layouts.required')</label>
    <input required type="email" class="input100" name="email">
</div>

<!-- phone Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="phone">@include('labels.phone')@include('layouts.required')</label>
    <input required type="text" class="input100" name="phone">
</div>

<!-- address Field -->
<div class="form-group wrap-input100 col-md-12">
    <label for="address">@include('labels.address')@include('layouts.required')</label>
    <textarea required type="text" class="input100" name="address"></textarea>
</div>

<!-- nation Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="nation">@include('labels.nation')@include('layouts.required')</label>
    <input class="input100" list="nations" name="nation">
    <datalist  required id="nations">
        <option value="">Select a nation...</option>
        @include('layouts.countriesList')
    </datalist>
</div>

<!-- ppno Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="ppno">@include('labels.passno')@include('layouts.required')</label>
    <input required type="text" class="input100" name="ppno">
</div>

<!-- ppexpiry Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="ppExpiry">@include('labels.ppe')@include('layouts.required')</label>
    <input required type="date" min={{today()}} max="2030-12-31" class="input100" name="ppExpiry" id="ppExpiry">
</div>

<!-- ppexpiry Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="visaExpiry">@include('labels.ve')@include('layouts.required')</label>
    <input required type="date" min={{today()}} max="2040-12-31" class="input100" name="visaExpiry" id="visaExpiry">
</div>

@include('layouts.filesValidation')

<!-- photo Field -->
<div class="col-md-4">
    <label for="photo">@include('labels.photo')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="photo" id="photo">
</div>

<!-- passport Field -->
<div class="form-group wrap-input100 col-md-4">
    <label for="passport">@include('labels.pass')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="passport" id="passport">
</div>

<!-- visa Field -->
<div class="form-group wrap-input100 col-md-4">
    <label for="visa">@include('labels.visa')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="visa" id="visa">
</div>

<!-- birth Field -->
<div class="form-group wrap-input100 col-md-4">
    <label for="doc1">@include('labels.certificate')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc1" id="doc1">
</div>

<!-- school Field -->
<div class="form-group wrap-input100 col-md-4">
    <label for="doc2">@include('labels.work')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc2" id="doc2">
</div>

<!-- school Field -->
<div class="form-group wrap-input100 col-md-4">
    <label for="doc3">@include('labels.health')</label>
    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc3" id="doc3">
</div>

<div class="col-md-12">
    <br><br><h3 style="text-align:center;"><u>Emergency Contect Data بيانات الاتصال للطوارئ</u></h3><br>
</div>

<!-- ename Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="eName">@include('labels.ename')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="reName">
</div>

<!-- aname Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="aName">@include('labels.aname')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="raName">
</div>

<!-- gender Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="gender">@include('labels.gender')@include('layouts.required')</label>
    <select required class="input100" name="rgender">
        <option value="">Select a Gender...</option>
        <option value="Female أنثى">Female أنثى</option>
        <option value="Male ذكر">Male ذكر</option>
    </select>
</div>

<!-- relation Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="relation">@include('labels.relation')@include('layouts.required')</label>
    <select required class="input100" name="relation" id="relation">
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

<!-- job Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="job">@include('labels.job')@include('layouts.required')</label>
    <input required type="text" class="input100" name="job">
</div>

<!-- org Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="org">@include('labels.org')</label>
    <input type="text" class="input100" name="org">
</div>

<!-- email Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="email">@include('labels.email')@include('layouts.required')</label>
    <input required type="email" class="input100" name="remail">
</div>

<!-- phone Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="phone">@include('labels.phone')@include('layouts.required')</label>
    <input required type="text" class="input100" name="rphone">
</div>

<!-- address Field -->
<div class="form-group wrap-input100 col-md-12">
    <label for="hAddress">@include('labels.address')@include('layouts.required')</label>
    <textarea required type="text" class="input100" name="rhAddress"></textarea>
</div>

<!-- address Field -->
<div class="form-group wrap-input100 col-md-12">
    <label for="wAddress">@include('labels.waddress')</label>
    <textarea type="text" class="input100" name="rwAddress"></textarea>
</div>

<!-- more Field -->
<div class="form-group wrap-input100 col-md-12">
    <label for="more">@include('labels.more')</label>
    <textarea type="text" class="input100" name="more"></textarea>
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