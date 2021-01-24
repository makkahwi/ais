<tr class="theme-main">
  <th></th>
  <th>@include('labels.matricno')</th>
  <th>@include('labels.status')</th>
  <th class="table-column">@include('labels.ename')</th>
  <th class="table-column">@include('labels.aname')</th>
  @can('viewStudentsContacts', [App\Models\classrooms::class, $classroom])
    <th>@include('labels.phone')</th>
    <th class="table-column">@include('labels.address')</th>
    <th class="table-column">Completed Documents?</th>
  @endcan
  @can('update', [App\Models\classrooms::class, $classroom])
    <th>@include('labels.action')</th>
  @endcan
</tr>