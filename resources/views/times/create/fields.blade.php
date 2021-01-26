<!-- Timename Field -->
<div class="form-group col-md-6">
  <label for="timeName">@include('labels.time')</label>
  <input required type="text" class="form-control" name="title" id="timeName">
</div>

<!-- Starttime Field -->
<div class="form-group col-md-6">
  <label for="startTime">@include('labels.startT')</label>
  <input required type="time" class="form-control" name="start" id="startTime">
</div>

<!-- Endtime Field -->
<div class="form-group col-md-6">
  <label for="endTime">@include('labels.endt')</label>
  <input required type="time" class="form-control" name="end" id="endTime">
</div>