<div class="box box-primary">
    <div class="box-body">

        <!-- Nav pills -->
        <ul class="nav nav-pills">
            <li class="nav-item active">
                <a class="nav-link" data-toggle="pill" href="#home">Please choose</a>
            </li>

            @foreach($classrooms as $classroom)
                @can('viewStudents', [App\Models\classrooms::class, $classroom])
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#{{$classroom->id}}">{{$classroom->title}}</a>
                    </li>
                @endcan
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="box tab-pane container active" id="home">
                <h4 style="line-height:1.5; text-align: justify;"><br>Choose a classroom to show its students<br></h4>
            </div>

            @foreach($classrooms as $classroom)
                @can('viewStudents', [App\Models\classrooms::class, $classroom])
                    <div class="box tab-pane container" id="{{$classroom->id}}">
                        <br>
                        @include('studentsFinancials.indexTabs2')
                    </div>
                @endcan
            @endforeach
        </div>
        
    </div>
</div>