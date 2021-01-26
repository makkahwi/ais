<div class="table-responsive">
  <table class="table tableTail" width="100%" id="exams-table-{{$level->id}}">

    <thead>
      @include('exams.tableHead')
    </thead>

    <tfoot>
      @include('exams.tableHead')
    </tfoot>

    <tbody>
      @foreach($level->courses as $course)
        @foreach($course->exams as $exam)
          @can('view', [App\Models\exams::class, $exam])

            @include('exams.tableRow')
            
          @endcan
        @endforeach
      @endforeach
    </tbody>

  </table>
</div>