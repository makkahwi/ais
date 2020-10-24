<div class="table-responsive">
    <table class="table tableTail" width="100%" id="students-table-{{$classroom->id}}">

        <thead>
            @include('studentsFinancials.tableHead')
        </thead>

        <tfoot>
            @include('studentsFinancials.tableHead')
        </tfoot>

        <tbody>
        
            @include('studentsFinancials.tableRow')
            
        </tbody>
    </table>
</div>