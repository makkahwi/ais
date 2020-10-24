<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#home">Please choose</a>
    </li>

    @foreach($classroom->students as $student)
        @can('view', [App\Models\student::class, $student])
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#{{$student->studentNo}}">{{$student->studentNo}} {{$student->user->name}}</a>
            </li>
        @endcan
    @endforeach
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="box tab-pane container active" id="home">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a student to show her/his financials<br></h4>
    </div>

    @foreach($classroom->students as $student)
        @can('view', [App\Models\student::class, $student])
            <div class="box tab-pane container" id="{{$student->studentNo}}">
                <br>
                @include('studentsFinancials.table')
            </div>
        @endcan
    @endforeach
</div>