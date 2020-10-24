<!-- Semid Field -->
<div class="form-group col-md-6">
    <label for="semIdEd">@include('labels.semester')</label>
    <select readonly class="form-control" name="sem_id" id="semIdEd">
        @foreach($currentSem as $sem)
        <option value="{{$sem->id}}">{{$sem->title}} | {{ $sem->year->title }}</option>
        @endforeach
    </select>
</div>

<!-- student Field -->
<div class="form-group col-md-6">
    <label for="student_idEd">@include('labels.name')</label>
    <input type="text" class="form-control" name="student_id" id="student_idEd" readonly>
</div>

<!-- date Field -->
<div class="form-group col-md-6">
    <label for="date">@include('labels.date')@include('layouts.required')</label>
    <input required type="date" max={{today()}} class="form-control" name="date" id="dateEd">
</div>

<!-- Note Field -->
<div class="form-group col-md-6">
    <label for="note">@include('labels.atten')@include('layouts.required')</label>
    <select required class="form-control" name="attendance" id="attenEd">
        <option value="2">Attended حاضر</option>
        <option value="1">Late متأخر</option>
        <option value="0">Absent غائب</option>
    </select>
</div>

<!-- Note Field -->
<div class="form-group col-md-12">
    <label for="note">@include('labels.note')</label>
    <textarea type="text" class="form-control" name="note" id="noteEd"></textarea>
</div>