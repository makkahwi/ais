<!-- title Field -->
<div class="form-group col-md-6">
    <label for="title">@include('labels.classroom')</label>
    <input required type="text" class="form-control" name="title" id="title">
</div>

<!-- level_id Field -->
<div class="form-group col-md-6">
    <label for="level_id">@include('labels.level')</label>
    <select required class="form-control" name="level_id" id="level_id">
        <option value="">Select a level...</option>
        @foreach($levels as $level)
        <option value="{{$level->id}}">{{$level->title}}</option>
        @endforeach
    </select>
</div>

<!-- Roomno Field -->
<div class="form-group col-md-6">
    <label for="roomNo">@include('labels.roomn')</label>
    <input required type="number" min="0" class="form-control" name="roomNo" id="roomNo">
</div>

<!-- Capacity Field -->
<div class="form-group col-md-6">
    <label for="capacity">@include('labels.capa')</label>
    <input required type="number" min="0" class="form-control" name="capacity" id="capacity">
</div>

<!-- description Field -->
<div class="form-group col-md-12">
    <label for="description">@include('labels.desc')</label>
    <textarea rows="2" required class="form-control" name="description" id="description"></textarea>
</div>

<!-- teacher_id Field -->
<div class="form-group col-md-6">
    <label for="teacher_id">Class @include('labels.superv')</label>
    <select required class="form-control" name="supervisor_id" id="teacher_id">
        <option value="">Select a teacher...</option>
        @foreach($staff as $staff)
            <option value="{{$staff->staffNo}}">{{$staff->user->name}}</option>
        @endforeach
    </select>
</div>

<!-- status_id Field -->
<div class="form-group col-md-6">
    <label for="status_id">Class @include('labels.status')</label>
    <select required class="form-control" name="status_id" id="status_id">
        @foreach($statuses as $status)
            @if ($status->id == 2)
                <option value="{{$status->id}}" selected>{{$status->title}}</option>
                @elseif ($status->id == 1)
                <option value="{{$status->id}}">{{$status->title}}</option>
                @else
            @endif
        @endforeach
    </select>
</div>