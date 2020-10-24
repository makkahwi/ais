<div class="table-responsive">
    <table class="table tableTail" width="100%" id="attendances-table-{{$classroom->id}}">

        <thead>
            @include('attendances.tableFilters')

            @include('attendances.tableHead')
        </thead>

        <tbody>

            <span hidden>{{$count2 = 0, $count1 = 0, $count0 = 0}}</span>

            @foreach($classroom->students as $student)
                @foreach($student->user->attendances as $attendance)
                    @can('view', [App\Models\attendances::class, $attendance])

                        @include('attendances.tableRow')

                    @endcan
                @endforeach
            @endforeach

        </tbody>

        <tfoot>
            @include('attendances.tableHead')
        </tfoot>
    </table>
</div>