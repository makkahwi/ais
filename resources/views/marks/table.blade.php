<div class="table-responsive">
  <table class="table table-striped tableTail" width="100%" id="marks-table">

    <thead>
      @if (!$marktype->used)
        <tr>
          <th colspan="6"></th>
          <th colspan="2">
            <a data-toggle="modal" id="createmarks" data-level="{{$classroom->level_id}}" data-classroom="{{$classroom->id}}" data-course="{{$course->id}}" data-marktype="{{$marktype->id}}" data-target="#marks-create-modal" class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus"></i> <i class="fa fa-plus"></i> New @include('marks.title')s</a>
          </th>
        </tr>
      @endif

      @include('marks.tableHead')
    </thead>

    <tfoot>
      @include('marks.tableHead')
    </tfoot>

    <tbody>
      @include('marks.tableRow')
    </tbody>

  </table>
</div>