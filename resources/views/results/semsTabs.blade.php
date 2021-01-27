<div class="box box-primary">
  <div class="box-body">
    @if(Auth::user()->role_id == 7 && Auth::user()->student->financial == 0)
      <div class="col-md-6">
        <h4 style="text-align: justify; line-height:1.5;">We are sorry, <span style="color:red;">you cannot</span> see your marks in the time being. You may contact the school managment to clear that.</h4>
      </div>
      <div class="col-md-6">
        <h4 style="direction: rtl; text-align: justify; line-height:1.5;">نعتذر منكم, <span style="color:red;">لا يمكنكم</span> الاطلاع على العلامات الدراسية الخاصة بكم الان. بإمانكم التواصل مع إدارة المدرسة للاستيضاح.</h4>
      </div>
    @else
      <!-- Nav pills -->
      <ul class="nav nav-pills">
        <li class="nav-item active">
          <a class="nav-link" data-toggle="pill" href="#homeC">Please choose</a>
        </li>
                        
        @foreach($sems as $sem)
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#{{$classroom->id}}C">{{$classroom->title}}</a>
          </li>
        @endforeach           
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="box tab-pane container active" id="homeC">
          <h4 style="line-height:1.5; text-align: justify;"><br>Choose a classroom to show its courses<br></h4>
        </div>
                        
        @foreach($sems as $sem)
          <div class="box tab-pane container" id="{{$classroom->id}}C">
            <br>
            @include('results.courseTabs')
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>