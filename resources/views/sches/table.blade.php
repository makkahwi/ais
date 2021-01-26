<div class="col-md-12 table-responsive">
  <table class="table tableTail" width="100%" id="sches-table-{{$classroom->title}}">
    
    <thead>
      <tr>
        <th colspan="4" style="text-align:center;"><h3><b>{{$currentSem ->title}}, {{$currentSem ->year->title}}</b></h3></th>
        <th colspan="4" style="text-align:center;"><h3><b><u>{{$classroom->title}}</u></b></h3></th>
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
            @foreach($classroom->sches as $sch)
              @if ($sch->day_id == $day->id)
              @if ($sch->time_id == $time->id)
                @can('view', [App\Models\sches::class, $sch])
                        
                  {{$sch->classroom->title}} - {{$sch->course->title}}<br><span style="font-weight:lighter; color:#008acf;"> - {{$sch->teacher->user->name}}</span>

                  <div class='btn-group'>
                    @can('update', App\Models\sches::class)

                      <!-- Editing Button-->
                      <button data-toggle="modal" data-target="#edit-modal" id="edit" data-id="{{$sch->id}}" data-sem="{{$sch->sem_id}}" data-level="{{$sch->classroom->level_id}}" data-class="{{$sch->classroom_id}}" data-course="{{$sch->course_id}}" data-teacher="{{$sch->teacher_id}}" data-day="{{$sch->day_id}}" data-time="{{$sch->time_id}}" data-status="{{$sch->status_id}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                    
                    @endcan

                    @can('delete', App\Models\sches::class)

                      <!-- Deleting Button-->
                      <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$sch->id}}" data-title="{{$sch->classroom->title}} | {{$day->title}} | {{$time->title}} | {{$sch->course->title}} | {{$sch->teacher->user->name}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                    @endcan
                  </div>
                @endcan
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