<!-- Title Field -->
<div class="form-group col-md-12">
  <label for="title">@include('labels.dtitle')</label>
  <input readonly class="form-control" name="title" id="titleSw">
</div>

<!-- description Field -->
<div class="form-group col-md-12">
  <label for="description">@include('labels.desc')@include('layouts.required')</label>
  <textarea rows="2" readonly class="form-control" name="description" id="descriptionSw"></textarea>
</div>

<!-- Type Field -->
<div class="form-group col-md-6">
  <label for="type">@include('labels.dtype')</label>
  <input readonly class="form-control" name="type" id="typeSw">
</div>

<!-- Amount Field -->
<div class="form-group col-md-6">
  <label for="amount">@include('labels.amount')</label>
  <input readonly class="form-control" name="amount" id="amountSw">
</div>