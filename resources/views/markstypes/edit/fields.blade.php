<!-- course_id Field -->
<div class="form-group col-md-3">
  <label for="course_id">@include('labels.course')</label>
  <select readonly class="form-control" name="course_id" id="course_idTypeEd">
    @foreach($courses as $course)
      <option value="{{$course->course_id}}">{{$course->code}} | {{ $course->title }}</option>
    @endforeach
  </select>
</div>

<!-- Semid Field -->
<div class="form-group col-md-3">
  <label for="semId">@include('labels.semester')</label>
  <select readonly class="form-control" name="sem_id" id="semIdTypeEd">
    <option value="{{$currentSem->id}}">{{$currentSem->title}}, {{ $currentSem->year->title }}</option>
  </select>
</div>

<!-- level_id Field -->
<div class="form-group col-md-3">
  <label for="slevel_id">@include('labels.level')</label>
  <select readonly class="form-control" name="level_id" id="level_idTypeEd">
    @foreach($levels as $level)
      <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
  </select>
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-3">
  <label for="classroom_id">@include('labels.classroom')</label>
  <select readonly class="form-control" name="classroom_id" id="classroom_idTypeEd">
    @foreach($classrooms as $classroom)
      <option value="{{$classroom->id}}">{{$classroom->title}}</option>
    @endforeach
  </select>
</div>

<!-- name Field -->
<div class="form-group col-md-4">
  <label for="name1">Mark Name @include('layouts.required')</label>
  <select required class="form-control" name="name1" id="typeEnameEd">
    <option value="">Select a mark title...</option>
    <option value="Homework">Homework</option>
    <option value="Classwork">Classwork</option>
    <option value="Quiz">Quiz</option>
    <option value="Attendance">Attendance</option>
    <option value="Participation">Participation</option>
    <option value="Project">Project</option>
    <option value="Behaviour">Behaviour</option>
    <option value="Mid-term">Mid-term</option>
    <option value="Final">Final</option>
  </select>
</div>

<div class="form-group col-md-4">
  <label for="name2">Mark Order ترتيب العلامة@include('layouts.required')</label>
  <select class="form-control" name="name2" id="nameOrTypeEd">
    <option value="">Without No بدون رقم</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>

<div class="form-group col-md-4">
  <label for="name3">اسم العلامة@include('layouts.required')</label>
  <select required class="form-control" name="name3" id="typeAnameEd">
    <option value="">اختر عنوان العلامة</option>
    <option value="واجب منزلي">واجب منزلي</option>
    <option value="تمرين خلال الحصص">تمرين خلال الحصص</option>
    <option value="امتحان قصير">امتحان قصير</option>
    <option value="الحضور">الحضور</option>
    <option value="المشاركة">المشاركة</option>
    <option value="مشروع المادة">مشروع المادة</option>
    <option value="السلوك والانضباط">السلوك والانضباط</option>
    <option value="الامتحان النصفي">الامتحان النصفي</option>
    <option value="الامتحان النهائي">الامتحان النهائي</option>
  </select>
</div>

<!-- max Field -->
<div class="form-group col-md-4">
  <label for="max">@include('labels.markfv')@include('layouts.required')</label>
  <input required type="number" min="0" class="form-control" name="max" id="maxTypeEd">
</div>

<!-- weight Field -->
<div class="form-group col-md-4">
  <label for="weight">@include('labels.weight')@include('layouts.required')</label>
  <input required type="number" step="0.01" min="0" max="100" class="form-control" name="weight" id="weightTypeEd">
</div>

<!-- deadline Field -->
<div class="form-group col-md-4">
  <label for="deadline">@include('labels.date')@include('layouts.required')</label>
  <input required type="date" class="form-control" name="deadline" id="deadlineTypeEd">
</div>