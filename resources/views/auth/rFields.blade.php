<div class="col-md-12">
    <h3 style="text-align:center;"><u>Guardian Data بيانات ولي الأمر</u></h3><br>
</div>

<!-- ename Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="reName">@include('labels.ename')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="reName" placeholder="Same as ID / Passport">
</div>

<!-- aname Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="raName">@include('labels.aname')@include('layouts.required')</label>
    <input required type="text" class="input100" style="text-transform:capitalize;" name="raName" placeholder="Same as ID / Passport">
</div>

<!-- gender Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rgender">@include('labels.gender')@include('layouts.required')</label>
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
        <option value="Sibling أخ/ت">Sibling أخ/ت</option>
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
    <label for="remail">@include('labels.email')@include('layouts.required')</label>
    <input required type="email" class="input100" name="remail">
</div>

<!-- phone Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rphone">@include('labels.phone')@include('layouts.required')</label>
    <input required type="text" class="input100" name="rphone">
</div>

<!-- address Field -->
<div class="form-group wrap-input100 col-md-12">
    <label for="rhAddress">@include('labels.address')@include('layouts.required')</label>
    <textarea required type="text" class="input100" name="rhAddress"></textarea>
</div>

<!-- address Field -->
<div class="form-group wrap-input100 col-md-12">
    <label for="rwAddress">@include('labels.waddress')</label>
    <textarea type="text" class="input100" name="rwAddress"></textarea>
</div>

<!-- more Field -->
<div class="form-group wrap-input100 col-md-12">
    <label for="more">@include('labels.more')</label>
    <textarea type="text" class="input100" name="more"></textarea>
</div>

<!-- nation Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rnation">@include('labels.nation')@include('layouts.required')</label>
    <select required class="input100" name="rnation">
        <option value="">Select a nation...</option>
        @include('layouts.countriesList')
    </select>
</div>

<!-- ppno Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rppno">@include('labels.passno')@include('layouts.required')</label>
    <input required type="text" class="input100" name="rppno">
</div>

<!-- ppexpiry Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rppExpiry">@include('labels.ppe')@include('layouts.required')</label>
    <input required type="date" min={{today()}} max="2040-12-31" class="input100" name="rppExpiry" id="rppExpiry">
</div>

<!-- ppexpiry Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rvisaExpiry">@include('labels.ve')@include('layouts.required')</label>
    <input required type="date" min={{today()}} max="2040-12-31" class="input100" name="rvisaExpiry" id="rvisaExpiry">
</div>

<!-- Instructions Field -->
<div class="form-group col-md-6">
    <label style="color:red; text-align: center;">
        <table>
            <tr>
                <td>Files could be uploade only in these formats with maximum of 2MB size</td>
                <td>من الممكن تحميل الملفات بالصيغ التالية حصراً وبحجم لا يتجاوز 2 ميغابايت</td>
            </tr>
            <tr>
                <td colspan="2"><br><u>PDF & JPG</u></td>
            </tr>
        </table>
    </label>
</div>

<!-- File Formats Field -->
<div class="form-group col-md-6">
    <label style="color:red; text-align: center;">
        <table>
            <tr>
                <td>You could use these tools to fix files</td>
                <td>من الممكن استخدام هذه الأدوات لتصحيح الملفات</td>
            </tr>
            <tr>
                <td colspan="2">
                <a target="_blank" href="https://image.online-convert.com/convert-to-jpg"><u>Format Convert تحويل الصيغ</u></a>
                <br><a target="_blank" href="https://pdfcompressor.com/"><u>Compress PDF تصغير حجم ملفات</u></a>
                <br><a target="_blank" href="https://compressjpeg.com/"><u>Compress JPG تصغير حجم ملفات</u></a></td>
            </tr>
        </table>
    </label>
</div>

<!-- passport Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rpassport">@include('labels.pass')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="rpassport" id="passport">
</div>

<!-- visa Field -->
<div class="form-group wrap-input100 col-md-6">
    <label for="rvisa">@include('labels.visa')@include('layouts.required')</label>
    <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="rvisa" id="visa">
</div>