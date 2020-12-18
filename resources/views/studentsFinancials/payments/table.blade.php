<div class="table-responsive">
    <table class="table tableTail" width="100%" id="students-table-{{$classroom->id}}">

        <thead>
            @include('studentsFinancials.payments.tableHead')
        </thead>

        <tfoot>
            @include('studentsFinancials.payments.tableHead')
        </tfoot>

        <tbody>
            
            <p hidden>{{$c=1}}</p>
            <p hidden>{{ $total = 0 }}</p>

            @foreach($student->payments as $payment)
                @can('view', [App\Models\studentsPayments::class, $payment])
                    <tr>
                        <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
                        @include('studentsFinancials.payments.tableRow')
                        <p hidden>{{ $total += $payment->amount }}</p>
                    </tr>
                @endcan
            @endforeach
        </tbody>

        <tfoot>
            <tr class="text-success"><b>
                <th colspan="3"></th>
                <th><h4>Total المجموع</h4></th>
                <th><h4>RM{{ $total }}</h4></th>
                <th colspan="5"></th></b>
            </tr>
        </tfoot>
    </table>
</div>