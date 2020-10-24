<div class="table-responsive">
    <table class="table tableTail" width="100%" id="statuses-table">

        <thead>
            <tr>
                @include('statuses.tableHead')
            </tr>
        </thead>

        <tfoot>
            <tr>
                @include('statuses.tableHead')
            </tr>
        </tfoot>

        <tbody>
        
            @include('statuses.tableRow')
            
        </tbody>
    </table>
</div>