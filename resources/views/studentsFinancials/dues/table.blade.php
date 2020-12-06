<div class="table-responsive">
    <table class="table tableTail" width="100%" id="students-table-{{$classroom->id}}">

        <thead>
            @include('studentsFinancials.dues.tableHead')
        </thead>

        <tfoot>
            @include('studentsFinancials.dues.tableHead')
        </tfoot>

        <tbody>
            @include('studentsFinancials.dues.tableRow')
        </tbody>
    </table>
</div>