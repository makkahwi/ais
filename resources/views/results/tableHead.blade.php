<tr class="theme-main">
  <th>@include('labels.semester')</th>
  <th>@include('labels.classroom')</th>
  <th>@include('labels.student')</th>

  @if($classroom->id > 3 && $classroom->id != 13)
    <th>@include('labels.marks')</th>
  @endif

  <th>@include('labels.grade')</th>
  <th>@include('labels.action')</th>
</tr>