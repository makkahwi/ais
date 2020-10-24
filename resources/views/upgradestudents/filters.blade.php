<tr style="background-color: #dbeeff;">
    <th colspan="2">
        <select class="form-control frameless" name="sStatusFi" id="sStatusFi">
            <option value="">All statuses</option>
            @foreach($statuses as $status)
            @if ($status->id > 1 && $status->id < 6)
                <option value="{{$status->id}}">{{$status->title}}</option>
            @endif
            @endforeach
        </select>
    </th>
    <th colspan="2">
        <select class="form-control frameless" name="sGenderFi" id="sGenderFi">
            <option value="">All Genders</option>
            <option value="Female أنثى">Female أنثى</option>
            <option value="Male ذكر">Male ذكر</option>
        </select>
    </th>
    <th>
        <select class="form-control frameless" name="sNationFi" id="sNationFi">
            <option value="">All Countries</option>
            @include('layouts.countriesList')
        </select>
    </th>
    <th colspan="2">
        <select class="form-control frameless" name="slevel_idFi" id="slevel_idFi">
            <option value="">All Levels</option>
            @foreach($levels as $level)
            <option value="{{$level->id}}">{{$level->title}}</option>
            @endforeach
        </select>
    </th>
    <th colspan="2">
        <select class="form-control frameless" name="sclassroom_idFi" id="sclassroom_idFi">
            <option value="">All Classrooms</option>
            @foreach($classrooms as $classroom)
            <option value="{{$classroom->id}}">{{$classroom->title}}</option>
            @endforeach
        </select>
    </th>
    <th></th>
    <th>
        <button class="btn btn-primary"><i class="fa fa-filter"></i></button>
    </th>
</tr>