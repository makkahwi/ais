<div class="table-responsive">
  <table class="table tableTail" width="100%" id="days-table">

    <thead>
      <tr>
        @include('days.tableHead')
      </tr>
    </thead>

    <tfoot>
      <tr>
        @include('days.tableHead')
      </tr>
    </tfoot>

    <tbody>
      @include('days.tableRow')
    </tbody>

  </table>
</div>