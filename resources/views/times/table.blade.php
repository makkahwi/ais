<div class="table-responsive">
    <table class="table tableTail" width="100%" id="times-table">
        <thead>
            <tr>
                @include('times.tableHead')
            </tr>
        </thead>

        <tfoot>
            <tr>
                @include('times.tableHead')
            </tr>
        </tfoot>
        
        <tbody>
        
            @include('times.tableRow')
            
        </tbody>
    </table>
</div>