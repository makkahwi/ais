<!-- name Field -->
<div class="form-group col-md-6">
    <label for="name">@include('labels.mark')</label>
    <select class="form-control" name="name" id="typenameEd" readonly>
    </select>
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-6">
    <label for="classroom_id">@include('labels.classroom')</label>
    <select class="form-control" name="classroom_id" id="classroom_idEd" readonly>
    </select>
</div>

<!-- course_id Field -->
<div class="form-group col-md-6">
    <label for="course_id">@include('labels.course')</label>
    <select class="form-control" name="course_id" id="course_idEd" readonly>
    </select>
</div>

<!-- student_id Field -->
<div class="form-group col-md-6">
    <label for="student_id">@include('labels.student')</label>
    <select class="form-control" name="student_id" id="student_idEd" readonly>
    </select>
</div>

<!-- Markvalue Field -->
<div class="form-group col-md-6">
    <label for="markValue">@include('labels.markv')@include('layouts.required')</label>
    <input required type="number" step="0.01" min="0" class="form-control" name="markValue" id="markValueEd">
</div>

<!-- max Field -->
<div class="form-group col-md-6">
    <label for="max">@include('labels.markfv')</label>
    <input type="number" min="0" class="form-control" name="max" id="maxEd" readonly>
</div>

<!-- note Field -->
<div class="form-group col-md-12">
    <label for="note">@include('labels.note')</label>
    <textarea type="text" class="form-control" name="note" id="noteEd"></textarea>
</div>