<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#home">Please choose</a>
    </li>

    @foreach($classrooms as $classroom)
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#{{$classroom->id}}">{{$classroom->title}}</a>
        </li>
    @endforeach
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="box tab-pane container active" id="home">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a classrooms to show its current students<br></h4>
    </div>

    @foreach($classrooms as $classroom)
        <div class="box tab-pane container" id="{{$classroom->id}}">
            <br>
            @include('upgradestudents.table')
        </div>
    @endforeach
</div>