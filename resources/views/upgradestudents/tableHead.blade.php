<tr class="theme-main">
    <th>@include('labels.matricno')</th>
    <th class="table-column">@include('labels.name')</th>
    <th>@include('labels.gender')</th>
    @can('updateFinancial', App\Models\student::class)
        <th>@include('labels.sponsor')</th>
        <th>Tuition Fees Discounts</th>
        <th>@include('labels.tfrequency')</th>
        <th>@include('labels.financial')</th>
    @endcan
    @can('upgradeStudents', App\Models\student::class)
        <th>Last @include('labels.level') السابق</th>
        <th>@include('labels.results')</th>
        <th>New @include('labels.level') الجديد</th>
        <th>@include('labels.status')</th>
    @else
        <th>@include('labels.level')</th>
    @endcan
</tr>