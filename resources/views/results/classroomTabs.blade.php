<div class="box box-primary">
  <div class="box-body">
    @if(Auth::user()->role_id == 7 && Auth::user()->student->financial == 0)
      <div class="col-md-6">
        <h4 style="text-align: justify; line-height:1.5;">Due to your <span style="color:red;">UNSETTLED FINANCIAL</span> status, you can't see your results. You may contact the school to settle and allow you to see your results.</h4>
      </div>
      <div class="col-md-6">
        <h4 style="direction: rtl; text-align: justify; line-height:1.5;">نظراً لوضعكم <span style="color:red;">المالي غير المسوّى</span>, لا يمكنكم الاطلاع على العلامات الدراسية الخاصة بكم. بإمكانكم التواصل مع إدارة المدرسة لتسوية الأوضاع المالية والسماح لكم بالاطلاع على العلامات الدراسية</h4>
      </div>
    @else
      <!-- Nav pills -->
      <ul class="nav nav-pills">
        <li class="nav-item active">
          <a class="nav-link" data-toggle="pill" href="#homeC">Please choose</a>
        </li>
                        
        @foreach($classrooms as $classroom)
          @can('viewStudents', [App\Models\classrooms::class, $classroom])
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#{{$classroom->id}}C">{{$classroom->title}}</a>
            </li>
          @endcan
        @endforeach           
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="box tab-pane container active" id="homeC">
          <h4 style="line-height:1.5; text-align: justify;"><br>Choose a classroom to show its courses<br></h4>
        </div>
                        
        @foreach($classrooms as $classroom)
          @can('viewStudents', [App\Models\classrooms::class, $classroom])
            <div class="box tab-pane container" id="{{$classroom->id}}C">
              <br>
              @include('results.courseTabs')
            </div>
          @endcan
        @endforeach
      </div>
    @endif
  </div>
</div>