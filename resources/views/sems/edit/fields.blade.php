<!-- title Field -->
<div class="form-group col-md-6">
  <label for="title">@include('labels.semester')</label>
  <select required class="form-control" name="title" id="titleEd">
    <option value="">Select a semester...</option>
    <option value="Sem 1">Sem 1</option>
    <option value="Sem 2">Sem 2</option>
    <option value="Sem 3">Sem 3</option>
  </select>
</div>

<!-- year_id Field -->
<div class="form-group col-md-6">
  <label for="year_id">@include('labels.year')</label>
  <select required class="form-control" name="year_id" id="year_idEd">
  @foreach($years as $year)
    <option value="{{$year->id}}">{{$year->title}}</option>
  @endforeach
  </select>
</div>

<!-- start Field -->
<div class="form-group col-md-6">
  <label for="start">@include('labels.sdate')</label>
  <input required type="date" class="form-control" name="start" id="startEd">
</div>

<!-- join Field -->
<div class="form-group col-md-6">
  <label for="join">@include('labels.jdate')</label>
  <input required type="date" class="form-control" name="join" id="joinEd">
</div>

<!-- results Field -->
<div class="form-group col-md-6">
  <label for="results">@include('labels.rdate')</label>
  <input required type="date" class="form-control" name="results" id="resultsEd">
</div>

<!-- end Field -->
<div class="form-group col-md-6">
  <label for="end">@include('labels.edate')</label>
  <input required type="date" class="form-control" name="end" id="endEd">
  <label style="color:red; text-align:justify;">Please set the end date to be one day before next semester start date</label>
</div>