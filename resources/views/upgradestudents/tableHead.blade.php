<tr class="theme-main">
  <th>@include('labels.matricno')</th>
  <th class="table-column">@include('labels.name')</th>

  @can('updateFinancial', App\Models\student::class)
    <th>@include('labels.sponsor')</th>
    <th>@include('labels.grantes')<br></th>
    <th>@include('labels.tfrequency')</th>
  @endcan

  @can('blockData', App\Models\student::class)
    <th>@include('labels.financial')</th>
  @endcan
  
  @can('upgradeStudents', App\Models\student::class)
    <th>Current @include('labels.level') الحالي</th>
    <th>New @include('labels.level') الجديد</th>
    <th>@include('labels.exceptedCourses')</th>
    <th>@include('labels.status')</th>
  @else
    <th>@include('labels.level')</th>
  @endcan
</tr>