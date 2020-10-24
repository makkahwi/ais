<!-- Semid Field -->
<div class="form-group col-md-4">
    <label for="semId">@include('labels.semester')@include('layouts.required')</label>
    <select required class="form-control" name="sem_id" id="semIdCrH">
        @foreach($currentSem as $sem)
        <option value="{{$sem->id}}">{{$sem->title}} | {{ $sem->year->title }}</option>
        @endforeach
    </select>
</div>

<!-- date Field -->
<div class="form-group col-md-4">
    <label for="date">@include('labels.date')@include('layouts.required')</label>
    <input required type="date" max={{today()}} value={{today()}} class="form-control" name="date" id="dateCr">
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-4">
    <label for="classroom_id">@include('labels.classroom')@include('layouts.required')</label>
    <select required class="form-control" name="classroom_id" id="classroom_idCrH">
        <option value="">Select a classroom...</option>
        @foreach($classrooms as $classroom)
        <option value="{{$classroom->id}}">{{$classroom->title}}</option>
        @endforeach
    </select>
</div>