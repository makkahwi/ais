<div class="col-md-12">
  <h3 style="text-align:center;"><u>Student Data بيانات الطالب/ة</u></h3><br>
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

<!-- level Field -->
<div class="form-group wrap-input100 col-md-4">
  <label for="level">@include('labels.level')@include('layouts.required')</label>
  <select required class="input100" name="level">
    <option>Choose a level...</option>
    @foreach($levels as $level)
      <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
  </select>
</div>

<!-- Semester Field -->
<div class="form-group wrap-input100 col-md-8">
  <label for="semName">@include('labels.semester')@include('layouts.required')</label>
  <select required class="input100" name="semName" id="semName">
    <option>Choose a semester...</option>
    @foreach($nextSem as $sem)
      <option value="{{$sem->title}} , {{$sem->year->title}}">{{$sem->title}}, {{$sem->year->title}}  >>  Starts on {{ date('d-m-Y', strtotime($sem->start)) }}</option>
    @endforeach
  </select>
  <input readonly type="hidden" class="input100" name="yearName" id="yearName">
</div>

<!-- Transport Field -->
<div class="form-group wrap-input100 col-md-6">
  <label for="trans">What type of transportation you want for your child?<br>ما هو نوع المواصلات التي تريدها لطفلك؟ @include('layouts.required')</label>
  <select required class="input100" name="trans">
    <option>Choose an Answer اختر إجابة</option>
    <option value="0">Your Transport مواصلاتكم الخاصة</option>
    <option value="1">School Bus باص المدرسة</option>
  </select>
</div>

<!-- Visa Field -->
<div class="form-group wrap-input100 col-md-6">
  <label for="svisa">You want to apply for a student visa for your child?<br>هل تريد التقديم على فيزا طالب من المدرسة لطفلك؟ @include('layouts.required')</label>
  <select required class="input100" name="svisa">
    <option>Choose an Answer اختر إجابة</option>
    <option value="0">No لا</option>
    <option value="1">Yes نعم</option>
  </select>
</div>

<!-- email Field -->
<div class="form-group wrap-input100 col-md-6">
  <label for="email">Student @include('labels.email') للطالب</label>
  <input type="email" class="input100" name="email">
</div>

<!-- phone Field -->
<div class="form-group wrap-input100 col-md-6">
  <label for="phone">Student @include('labels.phone') للطالب</label>
  <input type="text" class="input100" name="phone">
</div>

<!-- address Field -->
<div class="form-group wrap-input100 col-md-12">
  <label for="address">@include('labels.address')@include('layouts.required')</label>
  <textarea required type="text" class="input100" name="address"></textarea>
</div>

<!-- nation Field -->
<div class="form-group wrap-input100 col-md-6">
  <label for="nation">@include('labels.nation')@include('layouts.required')</label>
  <input required class="input100" list="nations" name="nation">
  <datalist id="nations">
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
  <input required type="date" min={{today()}} max="2040-12-31" class="input100" name="ppExpiry" id="ppExpiry">
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
  <input required type="file" accept=".jpg" onchange="validateSize(this)"  class="form-control" name="photo" id="photo">
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
<div class="form-group wrap-input100 col-md-6">
  <label for="doc1">@include('labels.birth')@include('layouts.required')</label>
  <input required type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc1" id="doc1">
</div>

<!-- school Field -->
<div class="form-group wrap-input100 col-md-6">
  <label for="doc2">@include('labels.school')</label>
  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc2" id="doc2">
  <label for="doc2"><span style="color:red;">For Students Applying for Level 2 & above only<br>فقط للطلاب المتقدمين للصف الثاني أو أعلى</span></label>
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

<script type="text/javascript">

  $('#semName').on('change',function(e){
    
    

    var sem = e.target.value;
    var year = sem.split(" ");
    var yearTitle = year[3];

    $("#yearName").val(yearTitle);
    
  });

</script>