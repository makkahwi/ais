<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#homeC">Please choose</a>
    </li>
                    
    @foreach($sems as $sem)
    @if ($sem->start < today())
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#{{$sem->id}}C">{{$sem->title, $sem->years[title]}}</a>
        </li>
    @endif
    @endforeach           
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="box tab-pane container active" id="homeC">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a sem to show its results<br></h4>
    </div>
                    
    @foreach($sems as $sem)
    @if ($sem->start < today())
        <div class="box tab-pane container" id="{{$sem->id}}C">
            <br>
            @include('results.tableP')
        </div>
    @endif
    @endforeach
</div>