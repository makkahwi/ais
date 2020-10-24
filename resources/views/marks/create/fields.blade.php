<!-- level_id Field -->
<div class="form-group col-md-4">
    <label for="level_id">@include('labels.level')</label>
    <select readonly class="form-control" name="level_id" id="level_idCrH">
        <option value="">Select a level...</option>
        @foreach($levels as $level)
        <option value="{{$level->id}}">{{$level->title}}</option>
        @endforeach
    </select>
</div>

<!-- course_id Field -->
<div class="form-group col-md-4">
    <label for="course_id">@include('labels.course')</label>
    <select readonly class="form-control" name="course_id" id="course_idCrH">
        <option value="">Select a level first...</option>
    </select>
</div>

<!-- name Field -->
<div class="form-group col-md-4">
    <label for="type_id">@include('labels.mark')</label>
    <select readonly class="form-control" name="type_id" id="nameCrH">
        <option value="">Select a course First...</option>
    </select>
</div>

<!-- Semid Field -->
<div class="form-group col-md-4">
    <label for="semId">@include('labels.semester')</label>
    <div id="semIdCrH">
    </div>
</div>

<!-- max Field -->
<div class="form-group col-md-4">
    <label for="max">@include('labels.markfv')</label>
    <div id="maxCrH">
    </div>
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-4">
    <label for="classroom_id">@include('labels.classroom')</label>
    <select readonly class="form-control" name="classroom_id" id="classroom_idCrH">
        <option value="">Select a level first...</option>
    </select>
</div>