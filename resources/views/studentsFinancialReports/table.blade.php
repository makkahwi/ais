<div class="table-responsive">
  <table class="table table-striped tableTail" width="100%" id="reports-table">

    <thead>
      @include('studentsFinancialReports.tableFilter')
      @include('studentsFinancialReports.tableHead')
    </thead>

    <tfoot>
      @include('studentsFinancialReports.tableHead')
    </tfoot>

    <tbody>
      @include('studentsFinancialReports.tableRow')
    </tbody>

  </table>
</div>