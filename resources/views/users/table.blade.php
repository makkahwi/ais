<div class="table-responsive">
    <table class="table tableTail" width="100%" id="users-table">
        <thead>
            @include('users.tableHead')
        </thead>

        <tfoot>
            @include('users.tableHead')
        </tfoot>
        
        <tbody>
            @include('users.tableRow')
        </tbody>
    </table>
</div>