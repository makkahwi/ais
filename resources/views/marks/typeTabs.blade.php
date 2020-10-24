<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#home{{$course->id}}T">Please choose</a>
    </li>

    @foreach($course->markstypes as $marktype)
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#{{$marktype->id}}T">{{$marktype->title}}</a>
        </li>
    @endforeach

</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="box tab-pane container active" id="home{{$course->id}}T">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a category to show its marks<br></h4>
    </div>

    @foreach($course->markstypes as $marktype)
        <div class="box tab-pane container" id="{{$marktype->id}}T">
            <br>
            @include('marks.table')
        </div>
    @endforeach

</div>