<div class="col-md-12 table-responsive">
  <table class="table table-striped tableTail" width="100%" id="sches-table-{{$classroom->title}}N">
    
    <thead>
      <tr>
        <th colspan="4" style="text-align:center;"><h3><b>{{$nextSem->title}}, {{$nextSem->year->title}}</b></h3></th>
        <th colspan="5" style="text-align:center;"><h3><b><u>{{$classroom->title}}</u></b></h3></th>
      </tr>

      @include('sches.tableHead')
    </thead>
    
    <tbody>
      @foreach($days as $day)
        <tr>
          <th>
            {{$day->title}}
          </th>

          @foreach($times as $time)
          <th style="text-align:center;">
            @foreach($schesNext as $sch)
              @if ($classroom->id == $sch->classroom_id)
              @if ($sch->day_id == $day->day_id)
              @if ($sch->time_id == $time->time_id)
                      
                {{$sch->classrooms->title}} - {{$sch->courses->title}}<br><span style="font-weight:lighter; color:#008acf;"> - {{$sch->staff->users->name}}</span>
                <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$sch->sch_id}}" data-level="{{$sch->level_id}}" data-class="{{$sch->classroom_id}}" data-course="{{$sch->course_id}}" data-teacher="{{$sch->teacher_id}}" data-day="{{$sch->day_id}}" data-time="{{$sch->time_id}}" data-status="{{$sch->status_id}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>

              @break
              @endif
              @endif
              @endif
            @endforeach
          </th>
          @endforeach
        </tr>

      @endforeach
    </tbody>
    
  </table>
</div>