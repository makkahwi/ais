<div class="box box-primary">
    <div class="box-body">
        <div class="col-md-12">
            <h4 class="theme-main"><b>Next Semester Timetable جدول الحصص للفصل الدراسي القادم</b></h4>
        </div>

        <!-- Nav pills -->
        <ul class="nav nav-pills">
            <li class="nav-item active">
                <a class="nav-link" data-toggle="pill" href="#homeN">Please choose</a>
            </li>

            @foreach($classrooms as $classroom)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#{{$classroom->title}}N">{{$classroom->title}}</a>
                </li>
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="box tab-pane container active" id="homeN">
                <h4 style="line-height:1.5; text-align: justify;"><br>Choose a classroom to show its Timetables</h4>
            </div>

            @foreach($classrooms as $classroom)
                <div class="box tab-pane container" id="{{$classroom->title}}N">
                    <br>
                    @include('sches.tableNext')
                </div>
            @endforeach
        </div>
    </div>
</div>