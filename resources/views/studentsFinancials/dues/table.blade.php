<div class="table-responsive">
    <table class="table tableTail" width="100%" id="students-table-{{$classroom->id}}">

        <thead>
            @include('studentsFinancials.dues.tableHead')
        </thead>

        <tfoot>
            @include('studentsFinancials.dues.tableHead')
        </tfoot>

        <tbody>

            <p hidden>{{$c=1}}</p>
            <p hidden>{{ $total = 0 }}</p>

            @foreach($student->dues as $due)
                @can('view', [App\Models\studentsFinancials::class, $due])
                    <tr>
                        <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
                        @include('studentsFinancials.dues.tableRow')
                        <p hidden>{{ $total += $due->finalAmount }}</p>
                    </tr>
                @endcan
            @endforeach
        </tbody>

        <tfoot>
            <tr class="text-danger"><b>
                <th colspan="6"></th>
                <th colspan="2"><h4>Total المجموع</h4></th>
                <th><h4>RM{{ $total }}</h4></th>
                <th></th></b>
            </tr>
        </tfoot>
    </table>
</div>