<div class="table-responsive">
  <table class="table table-striped tableTail" width="100%" id="upgradestudents-table-{{$classroom->id}}">

    <thead>
      @include('upgradestudents.tableHead')
    </thead>

    <tfoot>
      @include('upgradestudents.tableHead')
    </tfoot>
    
    <tbody>
      @include('upgradestudents.tableRow')
    </tbody>

  </table>
</div>