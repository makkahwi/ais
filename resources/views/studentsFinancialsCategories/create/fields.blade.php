<!-- Batch Field -->
<div class="form-group col-md-6">
  <label for="batch_id">@include('labels.batch')@include('layouts.required')</label>
  <select required class="form-control" name="batch_id" id="batch_id">
    <option value="">Select a batch</option>
    @foreach($batches as $batch)
      <option value="{{$batch->id}}">{{$batch->batch}} and above</option>
    @endforeach
  </select>
</div>