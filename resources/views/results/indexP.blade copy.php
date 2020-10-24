<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#homeC">Please choose</a>
    </li>
                    
    @foreach($classrooms as $classroom)
    @if ($classroom->status_id == 2)
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#{{$classroom->id}}C">{{$classroom->title}}</a>
        </li>
    @endif
    @endforeach           
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="box tab-pane container active" id="homeC">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a classroom to show its results<br></h4>
    </div>
                    
    @foreach($classrooms as $classroom)
    @if ($classroom->status_id == 2)
        <div class="box tab-pane container" id="{{$classroom->id}}C">
            <br>
            @include('results.tableP')
        </div>
    @endif
    @endforeach
</div>