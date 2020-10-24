<div class="box box-primary">
    <div class="box-body"><!-- Nav pills -->
        <ul class="nav nav-pills">
            <li class="nav-item active">
                <a class="nav-link" data-toggle="pill" href="#home">Please choose</a>
            </li>

            @foreach($levels as $level)
                @can('view', [App\Models\levels::class, $level])
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#{{$level->id}}">{{$level->title}}</a>
                    </li>
                @endcan
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="box tab-pane container active" id="home">
                <h4 style="line-height:1.5; text-align: justify;"><br>Choose a level to show its exams</h4>
            </div>

            @foreach($levels as $level)
                @can('view', [App\Models\levels::class, $level])
                    <div class="box tab-pane container" id="{{$level->id}}">
                        <br>
                        @include('exams.table')
                    </div>
                @endcan
            @endforeach
        </div>
    </div>
</div>