<!-- Sem Field -->
<div class="form-group col-md-3">
  <label for="sem_id">@include('labels.semester')@include('layouts.required')</label>
  <select required class="form-control" name="sem_id" id="sem_idCr">
    @foreach ($cnSem as $sem)
      <option value="{{$sem->id}}">{{$sem->title}}, {{$sem->year->title}}</option>
    @endforeach
  </select>
</div>

<!-- level Field -->
<div class="form-group col-md-3">
  <label for="level">@include('labels.level')@include('layouts.required')</label>
  <select required class="form-control" name="level" id="levelCr">
    <option value="">Choose a level</option>

    @foreach ($levels as $level)
      <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
  </select>
</div>

<!-- classroom Field -->
<div class="form-group col-md-3">
  <label for="classroom">@include('labels.classroom')@include('layouts.required')</label>
  <select required class="form-control" name="classroom" id="classroomCr">
    <option value="">Choose a level first</option>
  </select>
</div>

<!-- studentNo Field -->
<div class="form-group col-md-3">
  <label for="studentNo">@include('labels.student')@include('layouts.required')</label>
  <select required class="form-control" name="studentNo" id="studentNoCr">
    <option value="">Choose a classroom first</option>
  </select>
</div>