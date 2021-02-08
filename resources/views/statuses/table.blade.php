<div class="table-responsive">
  <table class="table table-striped tableTail" width="100%" id="statuses-table">

    <thead>
      @include('statuses.tableHead')
    </thead>

    <tfoot>
      @include('statuses.tableHead')
    </tfoot>

    <tbody>
      @include('statuses.tableRow')
    </tbody>

  </table>
</div>