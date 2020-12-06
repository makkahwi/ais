<div class="table-responsive">
    <table class="table tableTail" width="100%" id="students-table-{{$classroom->id}}">

        <thead>
            @include('studentsFinancials.payments.tableHead')
        </thead>

        <tfoot>
            @include('studentsFinancials.payments.tableHead')
        </tfoot>

        <tbody>
            @include('studentsFinancials.payments.tableRow')
        </tbody>
    </table>
</div>