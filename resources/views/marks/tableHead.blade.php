<tr class="theme-main">
  <th>@include('labels.classroom')</th>
  <th>@include('labels.course')</th>
  <th>@include('labels.mark')</th>
  <th>@include('labels.student')</th>
  @if ($classroom->level_id < 4 || $classroom->level_id == 13)
    <th>@include('labels.grade')</th>
  @else
    <th>@include('labels.markv')</th>
  @endif
  <th>@include('labels.note')</th>
  <th>@include('labels.action')</th>
</tr>