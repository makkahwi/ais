<!-- Sem Field -->
<div class="form-group col-md-6">
  <label for="sem_id">@include('labels.semester')@include('layouts.required')</label>
  <select readonly class="form-control" name="sem_id" id="sem_idPaymentEd">
  @foreach ($cnSem as $sem)
    <option value="{{$sem->id}}">{{$sem->title}}, {{$sem->year->title}}</option>
  @endforeach
  </select>
</div>

<!-- studentNo Field -->
<div class="form-group col-md-6">
  <label for="studentNo">@include('labels.sno')@include('layouts.required')</label>
  <input readonly class="form-control" name="studentNo" id="studentNoPaymentEd">
</div>

<!-- date Field -->
<div class="form-group col-md-6">
  <label for="date">@include('labels.date')@include('layouts.required')</label>
  <input required type="date" max={{today()}} class="form-control" name="date" id="datePaymentEd">
</div>

<!-- Amount Field -->
<div class="form-group col-md-6">
  <label for="amount">@include('labels.amount')@include('layouts.required')</label>
  <input required type="number" min="0" step="0.01" class="form-control" name="amount" id="amountPaymentEd" placeholder="RM">
</div>

<!-- Method Field -->
<div class="form-group col-md-6">
  <label for="method">@include('labels.method')@include('layouts.required')</label>
  <select required class="form-control" name="method" id="methodPaymentEd">
    <option value="">Choose a category</option>
    <option value="Cash">Cash</option>
    <option value="Cheque">Cheque</option>
    <option value="Bank Trasnfer">Bank Trasnfer</option>
  </select>
</div>

<!-- Receipt No Field -->
<div class="form-group col-md-6">
  <label for="receiptNo">@include('labels.receiptNo')</label>
  <input type="text" class="form-control" name="receiptNo" id="receiptNoPaymentEd">
</div>

<!-- Note Field -->
<div class="form-group col-md-12">
  <label for="note">@include('labels.note')</label>
  <input type="text" class="form-control" name="note" id="notePaymentEd">
</div>

<!-- Receipt Field -->
<div class="form-group col-md-12">
  <label for="receipt">@include('labels.receipt')</label>
  <input readonly type="text" class="form-control" name="receipt" id="receiptPaymentEd">
</div>