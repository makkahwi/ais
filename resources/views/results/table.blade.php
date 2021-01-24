<div class="table-responsive">
  <table class="table tableTail" width="100%" id="marks-table">

    <thead>
      @include('results.tableHead')
    </thead>

    <tfoot>
      @include('results.tableHead')
    </tfoot>

    <tbody>
      @foreach($course->markstypes as $type)
        @if($type->title == 'Course Result')
          <tr>
            <td>
              {{$type->title}}
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
</div>