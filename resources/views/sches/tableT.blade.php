<div class="box box-primary">
  <div class="box-body">
    <div class="col-md-12">
      <h4 class="theme-main"><b>Your Timetable جدول الحصص الخاصة بك</b></h4>
    </div>

    <div class="col-md-12 table-responsive">
      <table class="table table-striped tableTail" width="100%" id="sches-tableT">

        <thead>
          <tr>
            <th colspan="9" style="text-align:center;"><h3><b>{{$currentSem ->title}}, {{$currentSem ->year->title}}</b></h3></th>
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
                @foreach($sches as $sch)
                  @if ($sch->day_id == $day->id && $sch->time_id == $time->id)
                    @if ($sch->teacher_id == Auth::user()->schoolNo)
                      @can('view', [App\Models\sches::class, $sch])
                        {{$sch->classroom->title}} - <br>{{$sch->course->title}}
                        @break
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
  </div>
</div>