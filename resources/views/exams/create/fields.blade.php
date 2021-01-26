<!-- Semid Field -->
<div class="form-group col-md-4">
  <label for="semId">@include('labels.semester')@include('layouts.required')</label>
  <select required class="form-control" name="sem_id" id="semIdCrH">
  <option value="{{$currentSem->id}}">{{$currentSem->title}}, {{ $currentSem->year->title }}</option>
  </select>
</div>

<!-- level_id Field -->
<div class="form-group col-md-4">
  <label for="level_id">@include('labels.level')@include('layouts.required')</label>
  <select required class="form-control" name="level_id" id="level_idCrH">
    <option value="">Select a level...</option>
    @foreach($levels as $level)
      <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
  </select>
</div>

<!-- Type Field -->
<div class="form-group col-md-4">
  <label for="type">@include('labels.exam')@include('layouts.required')</label>
  <select required class="form-control" name="title" id="type">
    <option value="">Select an Exam Type...</option>
    <option value="Midterm Exam امتحان نصفي">Midterm Exam امتحان نصفي</option>
    <option value="Final Exam امتحان نهائي">Final Exam امتحان نهائي</option>
  </select>
</div>