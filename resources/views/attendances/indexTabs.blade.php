<div class="box box-primary">
    <div class="box-body">
        <!-- Nav pills -->
        <ul class="nav nav-pills"> 
            <li class="nav-item active">
                <a class="nav-link" data-toggle="pill" href="#homeN">Please choose</a>
            </li>

            @foreach($classrooms as $classroom)
                @can('viewClassrooms', [App\Models\classrooms::class, $classroom])
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#{{$classroom->id}}C">{{$classroom->title}}</a>
                    </li>
                @endcan
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="box tab-pane container active" id="homeN">
                <h4 style="line-height:1.5; text-align: justify;"><br>Choose a classroom to show the attendances</h4>
            </div>

            @foreach($classrooms as $classroom)
                @can('viewClassrooms', [App\Models\classrooms::class, $classroom])
                    <div class="box tab-pane container" id="{{$classroom->id}}C">
                        <br>
                        @include('attendances.table')
                    </div>
                @endcan
            @endforeach
        </div>
    </div>
</div>