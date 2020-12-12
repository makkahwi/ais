<!-- Sem Field -->
<div class="form-group col-md-6">
    <label for="sem_id">@include('labels.semester')@include('layouts.required')</label>
    <select required class="form-control" name="sem_id" id="sem_idPaymentCr">
        @foreach ($cnSem as $sem)
            <option value="{{$sem->id}}">{{$sem->title}}, {{$sem->year->title}}</option>
        @endforeach
    </select>
</div>

<!-- date Field -->
<div class="form-group col-md-6">
    <label for="date">@include('labels.date')@include('layouts.required')</label>
    <input required type="date" max={{today()}} value={{today()}} class="form-control" name="date" id="dateCr">
</div>

<!-- level Field -->
<div class="form-group col-md-4">
    <label for="level">@include('labels.level')@include('layouts.required')</label>
    <select required class="form-control" name="level" id="levelPaymentCr">
        <option value="">Choose a level</option>

        @foreach ($levels as $level)
            <option value="{{$level->id}}">{{$level->title}}</option>
        @endforeach
    </select>
</div>

<!-- classroom Field -->
<div class="form-group col-md-4">
    <label for="classroom">@include('labels.classroom')@include('layouts.required')</label>
    <select required class="form-control" name="classroom" id="classroomPaymentCr">
        <option value="">Choose a level first</option>
    </select>
</div>

<!-- studentNo Field -->
<div class="form-group col-md-4">
    <label for="studentNo">@include('labels.sno')@include('layouts.required')</label>
    <select required class="form-control" name="studentNo" id="studentNoPaymentCr">
        <option value="">Choose a classroom first</option>
    </select>
</div>

<!-- Amount Field -->
<div class="form-group col-md-6">
    <label for="amount">@include('labels.amount')@include('layouts.required')</label>
    <input required type="number" class="form-control" name="amount" id="amountPaymentCr" placeholder="RM">
</div>

<!-- Method Field -->
<div class="form-group col-md-6">
    <label for="method">@include('labels.method')@include('layouts.required')</label>
    <select required class="form-control" name="method" id="methodPaymentCr">
        <option value="">Choose a category</option>
        <option value="Cash">Cash</option>
        <option value="Cheque">Cheque</option>
        <option value="Bank Trasnfer">Bank Trasnfer</option>
    </select>
</div>

<!-- Receipt Field -->
<div class="form-group col-md-6">
    <label for="receipt">@include('labels.receipt')</label>
    <input type="file" class="form-control" name="receipt" id="receiptPaymentCr" placeholder="RM">
</div>

<!-- Receipt No Field -->
<div class="form-group col-md-6">
    <label for="receiptNo">@include('labels.receiptno')</label>
    <input type="text" class="form-control" name="receiptNo" id="receiptNoPaymentCr">
</div>

<!-- Note Field -->
<div class="form-group col-md-12">
    <label for="note">@include('labels.note')</label>
    <input type="text" class="form-control" name="note" id="notePaymentCr">
</div>