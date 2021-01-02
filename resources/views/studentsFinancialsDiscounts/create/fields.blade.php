<!-- Title Field -->
<div class="form-group col-md-12">
    <label for="title">@include('labels.dtitle')@include('layouts.required')</label>
    <select required class="form-control" name="title" id="title">
        <option value="">Choose a title</option>
        <option value="First Sibiling">First Sibiling</option>
        <option value="Second Sibiling">Second Sibiling</option>
        <option value="Third Sibiling">Third Sibiling</option>
        <option value="Student Parent">Student Parent</option>
        <option value="School Staff Parent">School Staff Parent</option>
        <option value="In Advance Payment">In Advance Payment</option>
        <option value="Orphans">Orphans</option>
        <option value="Hafez">Hafez</option>
        <option value="Waive">Waive</option>
        <option value="Custom">Custom</option>
    </select>
</div>

<!-- description Field -->
<div class="form-group col-md-12">
    <label for="description">@include('labels.desc')@include('layouts.required')</label>
    <textarea rows="2" required class="form-control" name="description" id="description"></textarea>
</div>

<!-- Type Field -->
<div class="form-group col-md-6">
    <label for="type">@include('labels.dtype')@include('layouts.required')</label>
    <select required class="form-control" name="type" id="type">
        <option value="">Choose a type</option>
        <option value="Fixed Amount">Fixed Amount (in RM)</option>
        <option value="Percentage">Percentage (%)</option>
    </select>
</div>

<!-- Amount Field -->
<div class="form-group col-md-6">
    <label for="amount">@include('labels.amount')@include('layouts.required')</label>
    <input required type="number" step="0.01" min="0" class="form-control" name="amount" id="amount"><div id="sign"></div>
</div>