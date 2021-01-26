<!-- title Field -->
<div class="form-group col-md-4">
  <label for="titleSw">@include('labels.classroom')</label>
  <input type="text" class="form-control" name="titleSw" id="titleSw" readonly>
</div>

<!-- level_id Field -->
<div class="form-group col-md-4">
  <label for="level_idSw">@include('labels.level')</label>
  <input type="text" class="form-control" name="level_idSw" id="level_idSw" readonly>
</div>

<!-- Roomno Field -->
<div class="form-group col-md-4">
  <label for="roomNoSw">@include('labels.roomn')</label>
  <input type="number" min="0" class="form-control" name="roomNoSw" id="roomNoSw" readonly>
</div>

<!-- Capacity Field -->
<div class="form-group col-md-4">
  <label for="capacitySw">@include('labels.capa')</label>
  <input type="number" min="0" class="form-control" name="capacitySw" id="capacitySw" readonly>
</div>

<!-- Count Field -->
<div class="form-group col-md-4">
  <label for="countSw">@include('labels.scount')</label>
  <input type="number" min="0" class="form-control" name="countSw" id="countSw" readonly>
</div>

<!-- description Field -->
<div class="form-group col-md-12">
  <label for="descriptionSw">@include('labels.desc')</label>
  <textarea rows="2" class="form-control" name="descriptionSw" id="descriptionSw" readonly></textarea>
</div>

<!-- teacher_id Field -->
<div class="form-group col-md-6">
  <label for="teacher_idSw">Class @include('labels.superv')</label>
  <input type="text" class="form-control" name="teacher_idSw" id="teacher_idSw" readonly>
</div>

<!-- status_id Field -->
<div class="form-group col-md-6">
  <label for="status_idSw">@include('labels.status')</label>
  <input type="text" class="form-control" name="status_idSw" id="status_idSw" readonly>
</div>