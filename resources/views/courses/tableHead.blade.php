<tr class="theme-main">
    <th>@include('labels.coursen')</th>
    <th>@include('labels.coursec')</th>
    <th class="table-column">@include('labels.tbook')</th>
    <th>@include('labels.level')</th>
    <th class="table-column">@include('labels.desc')</th>
    @can('update', App\Models\courses::class)
        <th>@include('labels.status')</th>
    @endcan
    <th>@include('labels.action')</th>
</tr>