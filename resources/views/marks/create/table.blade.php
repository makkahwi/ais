<div class="table-responsive">

  @include('marks.create.fields')

  <table class="table" width="100%" id="marks-create-table">
    <thead>
      <tr class="theme-main">
        <th width = 0.5%></th>
        <th width = 49.5%>@include('labels.student')@include('layouts.required')</th>
        <th width = 20%>@include('labels.markv')@include('layouts.required')</th>
        <th width = 30%>@include('labels.note')</th>
      </tr>
    </thead>

    <tbody id="studentsList">
    </tbody>

    <tfoot id="footer">
    </tfoot>
  </table>
</div>