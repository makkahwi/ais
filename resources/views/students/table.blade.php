<div class="table-responsive">
  <table class="table table-striped tableTail" width="100%" id="students-table-{{$classroom->id}}">

    <thead>
      @include('students.tableHead')
    </thead>

    <tfoot>
      @include('students.tableHead')
    </tfoot>

    <tbody>
      @include('students.tableRow')
    </tbody>

  </table>
</div>