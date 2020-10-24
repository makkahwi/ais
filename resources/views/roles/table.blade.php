<div class="table-responsive">
    <table class="table tableTail" width="100%" id="roles-table">

        <thead>
            <tr>
                @include('roles.tableHead')
            </tr>
        </thead>

        <tfoot>
            <tr>
                @include('roles.tableHead')
            </tr>
        </tfoot>

        <tbody>
        
            @include('roles.tableRow')

        </tbody>

    </table>
</div>