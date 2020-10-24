<!-- Batch Field -->
<div class="form-group col-md-6">
    <label for="batch_id">@include('labels.batch')@include('layouts.required')</label>
    <select required class="form-control" name="batch_id" id="batch_idEd">
        <option value="">Select a batch</option>
        @foreach($batches as $batch)
            <option value="{{$batch->id}}">{{$batch->batch}} and above</option>
        @endforeach
    </select>
</div>

<div class="form-group col-md-6">
    <label for="frequency">@include('labels.frequency')@include('layouts.required')</label>
    <select required class="form-control" name="frequency" id="frequencyEd">
        <option value="">Select a frequency</option>
        <option value="One-time">One-Time Payment</option>
        <option value="Monthly">Monthly Payment</option>
        <option value="Semesterly">Semesterly Payment</option>
        <option value="Yearly">Yearly Payment</option>
    </select>
</div>

<div class="form-group col-md-6">
    <label for="ctitle">@include('labels.ctitle')@include('layouts.required')</label>
    <select required class="form-control" name="title" id="titleEd">
        <option value="">Select a title</option>
        <option value="Application Fees">Application Fees</option>
        <option value="First Registration">First Registration</option>
        <option value="Deposits">Deposits</option>
        <option value="Old Balance">Old Balance</option>
        <option value="Activities">Activities</option>
        <option value="Visa Application">Visa Application</option>
        <option value="Transportation">Transportation</option>
        <option value="Tution Fees">Tution Fees</option>
        <option value="Registration Renewal">Registration Renewal</option>
        <option value="Books Costs">Books Costs</option>
        <option value="Uniform Costs">Uniform Costs</option>
        <option value="Visa Renewal">Visa Renewal</option>
    </select>
</div>

<div class="form-group col-md-6">
    <label for="level_id">@include('labels.level')@include('layouts.required')</label>
    <select class="form-control" name="level_id" id="level_idEd">
        <option value="0">All Levels</option>
            @foreach($levels as $level)
                <option value="{{$level->id}}">{{$level->title}}</option>
            @endforeach
    </select>
</div>

<div class="form-group col-md-6">
    <label for="amount">@include('labels.amount')@include('layouts.required')</label>
    <input required type="number" class="form-control" min="0" name="amount" id="amountEd">
</div>