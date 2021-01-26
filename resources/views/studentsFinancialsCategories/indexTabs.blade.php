<div class="box box-primary">
  <div class="box-body">

    <!-- Nav pills -->
    <ul class="nav nav-pills">
      <li class="nav-item active">
        <a class="nav-link" data-toggle="pill" href="#home">Please choose</a>
      </li>

      @foreach($batches as $batch)
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#{{$batch->id}}">{{$batch->batch}} and above</a>
        </li>
      @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="box tab-pane container active" id="home">
        <h4 style="line-height:1.5; text-align: justify;"><br>Choose a batch to show its categories<br></h4>
      </div>

      @foreach($batches as $batch)
        <div class="box tab-pane container" id="{{$batch->id}}">
          <br>
          @include('studentsFinancialsCategories.table')
        </div>
      @endforeach
    </div>
    
  </div>
</div>