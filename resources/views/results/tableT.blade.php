<div class="table-responsive">
    <table class="table tableTail" width="100%" id="results-table">

        <thead>
            @include('results.tableHead')
        </thead>
        
        <tfoot>
            @include('results.tableHead')
        </tfoot>
        
        <tbody>
                
            @foreach($sches as $sch)
            @foreach($marks as $mark)
                @if ($sch->semId == $mark->semId)
                @if ($sch->classroom_id == $mark->classroom_id)
                @if ($sch->course_id == $mark->course_id)
                @if ($sch->teacher_id == Auth::user()->id)
                
                    @include('results.tableRow')

                @endif
                @endif
                @endif
                @endif
            @endforeach
            @endforeach

        </tbody>
    </table>
</div>