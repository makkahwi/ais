<div class="table-responsive">
    <table class="table tableTail" width="100%" id="results-table">
        
        <thead>
            @include('results.tableHead')
        </thead>

        <tfoot>
            @include('results.tableHead')
        </tfoot>
        
        <tbody>
                
            @foreach($students as $student)
            @foreach($marks as $mark)
                @if ($student->schoolNo ==  Auth::user()->schoolNo)
                @if ($mark->student_id == $student->studentNo)
                @if (strpos($mark->typeName, 'Result') !== false)
                
                    @include('results.tableRow')

                @endif
                @endif
                @endif
            @endforeach
            @endforeach

        </tbody>
    </table>
</div>