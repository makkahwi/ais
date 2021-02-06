<div class="table-responsive">
  <table class="table tableTail" width="100%" width="100%" id="markstypes-table-{{$course->id}}" >

    <thead>
      @can('create', App\Models\markstypes::class)
        <tr>
          <th colspan="6"></th>
          <th colspan="3">
            <h1>
              <a id="createtypes" data-toggle="modal" data-level="{{$classroom->level_id}}" data-classroom="{{$classroom->id}}" data-course="{{$course->id}}" data-target="#markstypes-create-modal" class="btn btn-success pull-left" data-dismiss="modal"><i class="fa fa-plus"></i> New @include('marks.title')s Types</a>
            </h1>
          </th>
        </tr>
      @endcan

      @include('markstypes.show.tableHeader')
    </thead>

    <tbody>
      @include('markstypes.show.tableRow')
    </tbody>

    <tfoot>
      <tr style="color:red;"><b>
        <th colspan="3">Please make sure that this weights total is exactly 100 at the end of the semester<br>نرجو التأكد بأن مجموع الاوزان يعادل الـ 100 تماماً في نهاية الفصل الدراسي</th>
        <th><h1><i class="fas fa-long-arrow-alt-right"></i></h1></th>
        <th><h4>Total <br>المجموع</h4></th>
        <th><h4>{{ $course->markstypesWeights }}</h4></th>
        <th colspan="3"></th></b>
      </tr>
    </tfoot>

  </table>
</div>