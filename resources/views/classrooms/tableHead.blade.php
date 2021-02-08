<tr class="theme-main">
  <th>#</th>
  <th>@include('labels.classroom')</th>
  <th>@include('labels.level')</th>
  <th>@include('labels.roomn')</th>
  <th>@include('labels.capa')</th>
  <th></th>
  <th>@include('labels.scount')</th>
  <th class="table-column">@include('labels.desc')</th>
  <th>@include('labels.superv')</th>

  @can('update', App\Models\classrooms::class)
    <th>@include('labels.status')</th>
  @endcan
  
  <th>@include('labels.action')</th>
</tr>