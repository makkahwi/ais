<!-- Nav pills -->
<ul class="nav nav-pills">
    <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#{{$student->studentNo}}-category">Please choose</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#{{$student->studentNo}}-dues">Dues المستحقات</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#{{$student->studentNo}}-payments">Payments المدفوعات</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#{{$student->studentNo}}-total">Total الاجمالي</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="box tab-pane container active" id="{{$student->studentNo}}-category">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a category to shot its details<br></h4>
    </div>

    <div class="box tab-pane container" id="{{$student->studentNo}}-dues">
        <br>
        @include('studentsFinancials.dues.table')
    </div>

    <div class="box tab-pane container" id="{{$student->studentNo}}-payments">
        <br>
        @include('studentsFinancials.payments.table')
    </div>

    <div class="box tab-pane container" id="{{$student->studentNo}}-total">
        <br>
        @include('studentsFinancials.total')
    </div>
</div>