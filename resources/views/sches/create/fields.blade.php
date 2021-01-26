<!-- Semid Field -->
<div class="form-group col-md-6">
  <label for="semId">@include('labels.semester')@include('layouts.required')</label>
  <select required class="form-control" name="sem_id" id="semIdCrH">
    @foreach($cnSem as $sem)
      <option value="{{$sem->id}}">{{$sem->title}}, {{ $sem->year->title }}</option>
    @endforeach
  </select>
</div>

<!-- level_id Field -->
<div class="form-group col-md-6">
  <label for="level_id">@include('labels.level')@include('layouts.required')</label>
  <select required class="form-control" name="level_id" id="level_idCrH">
    <option value="">Select a level...</option>
    @foreach($levels as $level)
      @can('viewLevels', [App\Models\levels::class, $level])
        <option value="{{$level->id}}">{{$level->title}}</option>
      @endcan
    @endforeach
  </select>
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-4">
  <label for="classroom_id">@include('labels.classroom')@include('layouts.required')</label>
  <select required class="form-control" name="classroom_id" id="classroom_idCrH">
    <option value="">Select a level first...</option>
  </select>
</div>

<!-- day_id Field -->
<div class="form-group col-md-4">
  <label for="day_id">@include('labels.day')@include('layouts.required')</label>
  <select required class="form-control" name="day_id" id="day_idCrH">
    <option value="">Select a day...</option>
    @foreach($days as $day)
      <option value="{{$day->id}}">{{$day->title}}</option>
    @endforeach
  </select>
</div>

<!-- Status Field -->
<div class="form-group col-md-4">
  <label for="status_id">@include('labels.status')</label>
  <select readonly class="form-control" name="status_id" id="status_idCrH">
    <option value="2">Activated</option>
  </select>
</div>