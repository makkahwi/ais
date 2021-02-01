<!-- Student Field -->
<div class="form-group col-md-6">
  <label for="studentSw">@include('labels.student')</label>
  <input type="text" class="form-control" name="studentSw" id="studentSw" readonly>
</div>

<!-- Sem Field -->
<div class="form-group col-md-6">
  <label for="semSw">@include('labels.semester')</label>
  <input type="text" class="form-control" name="semSw" id="semSw" readonly>
</div>

<!-- Value Field -->
<div class="form-group col-md-6">
  <label for="valueSw">@include('labels.markv')</label>
  <input type="text" class="form-control" name="valueSw" id="valueSw" readonly>
</div>

<!-- Grade Field -->
<div class="form-group col-md-6">
  <label for="gradeSw">@include('labels.grade')</label>
  <input type="text" class="form-control" name="gradeSw" id="gradeSw" readonly>
</div>

<!-- Transcript Field -->
<div class="form-group col-md-12">
  <br><br>
  <button type="submit" class="btn btn-success submitbutton btn-block">Generate Transcript إصدار كشف العلامات</button>
  <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
</div>