<!-- Sem Field -->
<div class="form-group col-md-6">
    <label for="sem_id">@include('labels.semester')@include('layouts.required')</label>
    <select required class="form-control" name="sem_id" id="sem_idPaymentCr">
        @foreach ($cnSem as $sem)
            <option value="{{$sem->id}}">{{$sem->title}}, {{$sem->year->title}}</option>
        @endforeach
    </select>
</div>

<!-- level Field -->
<div class="form-group col-md-6">
    <label for="level">@include('labels.level')@include('layouts.required')</label>
    <select required class="form-control" name="level" id="levelPaymentCr">
        <option value="">Choose a level</option>

        @foreach ($levels as $level)
            <option value="{{$level->id}}">{{$level->title}}</option>
        @endforeach
    </select>
</div>

<!-- classroom Field -->
<div class="form-group col-md-6">
    <label for="classroom">@include('labels.classroom')@include('layouts.required')</label>
    <select required class="form-control" name="classroom" id="classroomPaymentCr">
        <option value="">Choose a level first</option>
    </select>
</div>

<!-- studentNo Field -->
<div class="form-group col-md-6">
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

<!-- amouny Field -->
<div class="form-group col-md-6">
    <label for="category_id">@include('labels.ctitle')@include('layouts.required')</label>
    <select required class="form-control" name="category_id" id="category_idPaymentCr">
        <option value="">Choose a category</option>
        <option value="">Cash</option>
        <option value="">Cheque</option>
        <option value="">Bank Trasnfer</option>
    </select>
</div>

<!-- Amount Field -->
<div class="form-group col-md-12">
    <label for="note">@include('labels.note')</label>
    <input type="text" class="form-control" name="note" id="notePaymentCr">
</div>