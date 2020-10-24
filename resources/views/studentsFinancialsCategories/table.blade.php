<div class="table-responsive">
    <table class="table tableTail" width="100%" id="sfc-table-{{$batch->id}}">

        <thead>
            @include('studentsFinancialsCategories.tableHead')
        </thead>

        <tfoot>
            @include('studentsFinancialsCategories.tableHead')
        </tfoot>

        <tbody>
            @include('studentsFinancialsCategories.tableRow')
        </tbody>
    </table>
</div>