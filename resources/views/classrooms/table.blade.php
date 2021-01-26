<div class="table-responsive">
  <table class="table tableTail" width="100%" id="classrooms-table">

    <thead>
      @include('classrooms.tableHead')
    </thead>

    <tfoot>
      @include('classrooms.tableHead')
    </tfoot>
    
    <tbody>
      @include('classrooms.tableRow')
    </tbody>

  </table>
</div>