<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#home{{$classroom->id}}CC">Please choose</a>
    </li>

    @foreach($classroom->level->courses as $course)
        @can('view', [App\Models\courses::class, $course])
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#{{$course->id}}CC">{{$course->title}}</a>
            </li>
        @endcan
    @endforeach
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="box tab-pane container active" id="home{{$classroom->id}}CC">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a course to show its marks categories<br></h4>
    </div>

    @foreach($classroom->level->courses as $course)
        @can('view', [App\Models\courses::class, $course])
            <div class="box tab-pane container" id="{{$course->id}}CC">
                <br>
                @include('marks.typeTabs')
            </div>
        @endcan
    @endforeach
</div>