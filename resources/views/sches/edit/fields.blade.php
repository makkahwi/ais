<!-- Semid Field -->
<div class="form-group col-md-4">
    <label for="semId">@include('labels.semester')</label>
    <select readonly class="form-control" name="sem_id" id="semIdEd">
    @foreach($sems as $sem)
        <option value="{{$sem->id}}">{{$sem->title}} | {{$sem->year->title}}</option>
    @endforeach
    </select>
</div>

<!-- level_id Field -->
<div class="form-group col-md-4">
    <label for="level_id">@include('labels.level')</label>
    <select readonly class="form-control" name="level_id" id="level_idEd">
    @foreach($levels as $level)
        <option value="{{$level->id}}">{{$level->title}}</option>
    @endforeach
    </select>
</div>

<!-- classroom_id Field -->
<div class="form-group col-md-4">
    <label for="classroom_id">@include('labels.classroom')</label>
    <select readonly class="form-control" name="classroom_id" id="classroom_idEd">
    @foreach($classrooms as $classroom)
        <option value="{{$classroom->id}}">{{$classroom->title}}</option>
    @endforeach
    </select>
</div>

<!-- day_id Field -->
<div class="form-group col-md-6">
    <label for="day_id">@include('labels.day')</label>
    <select readonly class="form-control" name="day_id" id="day_idEd">
    @foreach($days as $day)
        <option value="{{$day->id}}">{{$day->title}}</option>
    @endforeach
    </select>
</div>

<!-- time_id Field -->
<div class="form-group col-md-6">
    <label for="time_id">@include('labels.time')</label>
    <select readonly class="form-control" name="time_id" id="time_idEd">
    @foreach($times as $time)
        <option value="{{$time->id}}">{{$time->title}}</option>
    @endforeach
    </select>
</div>

<!-- Note -->
<div class="form-group col-md-6">
    <label style="color:red;">All data above can't be edited, only data below</label>
</div>
<div class="form-group col-md-6">
    <label style="color:red;">لا يمكن تعديل البيانات أعلاه, من الممكن فقط تعديل البيانات في الخانات التالية</label>
</div>

<!-- course_id Field -->
<div class="form-group col-md-4">
    <label for="course_id">@include('labels.course')@include('layouts.required')</label>
    <select required class="form-control" name="course_id" id="course_idEd">
    @foreach($courses as $course)
        <option value="{{$course->id}}">{{$course->code}} | {{$course->title}}</option>
    @endforeach
    </select>
</div>

<!-- teacher_id Field -->
<div class="form-group col-md-4">
    <label for="teacher_id">@include('labels.teacher')@include('layouts.required')</label>
    <select required class="form-control" name="teacher_id" id="teacher_idEd">
        <option value="">Select a user...</option>
        @foreach($staff as $staff)
            <option value="{{$staff->staffNo}}">{{$staff->user->name}}</option>
        @endforeach
    </select>
</div>

<!-- status_id Field -->
<div class="form-group col-md-4">
    <label for="status_id">@include('labels.status')@include('layouts.required')</label>
    <select required class="form-control" name="status_id" id="status_idEd">
        @foreach($statuses as $status)
            @if ($status->id < 3)
            <option value="{{$status->id}}">{{$status->title}}</option>
            @endif
        @endforeach
    </select>
</div>