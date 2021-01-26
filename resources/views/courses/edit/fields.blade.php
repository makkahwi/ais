<!-- title Field -->
<div class="form-group col-md-6">
  <label for="title">@include('labels.coursen')@include('layouts.required')</label>
  <input required type="text" class="form-control" name="title" id="titleEd">
</div>

<!-- code Field -->
<div class="form-group col-md-6">
  <label for="code">@include('labels.coursec')@include('layouts.required')</label>
  <input required type="text" class="form-control" name="code" id="codeEd">
</div>

<!-- textBook Field -->
<div class="form-group col-md-6">
  <label for="textBook">@include('labels.tbook')@include('layouts.required')</label>
  <input required type="text" class="form-control" name="textbook" id="textbookEd">
</div>

<!-- level_id Field -->
<div class="form-group col-md-6">
  <label for="level_id">@include('labels.level')@include('layouts.required')</label>
  <select required class="form-control" name="level_id" id="level_idEd">
    <option value="">Select a level...</option>
    @foreach($levels as $level)
      <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
  </select>
</div>

<!-- description Field -->
<div class="form-group col-md-12">
  <label for="description">@include('labels.desc')@include('layouts.required')</label>
  <textarea rows="2" required class="form-control" name="description" id="descriptionEd" ></textarea>
</div>

<!-- status_id Field -->
<div class="form-group col-md-6">
  <label for="status_id">@include('labels.status')@include('layouts.required')</label>
  <select required class="form-control" name="status_id" id="status_idEd">
    @foreach($statuses as $status)
      <option value="{{$status->id}}">{{$status->title}}</option>
    @endforeach
  </select>
</div>