<div class="table-responsive">
    <table class="table tableTail" width="100%" id="results-table-{{$sem->id}}C">

        <thead>
            @include('results.tableHead')
        </thead>
        
        <tfoot>
            @include('results.tableHead')
        </tfoot>
        
        <tbody>
        
            @foreach($marks as $mark)
                @if ($mark->typeName == 'Course Result')

                    @include('results.tableRow')

                @endif
            @endforeach

        </tbody>
    </table>
</div>