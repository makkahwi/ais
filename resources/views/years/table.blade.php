<div class="table-responsive">
    <table class="table tableTail" width="100%" id="years-table">
        <thead>
            @include('years.tableHead')
        </thead>

        <tfoot>
            @include('years.tableHead')
        </tfoot>
        
        <tbody>
            @include('years.tableRow')
        </tbody>
    </table>
</div>