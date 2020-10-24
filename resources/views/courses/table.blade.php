<div class="table-responsive">
    <table class="table tableTail" width="100%" id="courses-table-{{$level->id}}">

        <thead>
            @include('courses.tableHead')
        </thead>

        <tfoot>
            @include('courses.tableHead')
        </tfoot>

        <tbody>
              
            @foreach($level->courses as $course)
                @can('view', [App\Models\courses::class, $course])
                    
                    @include('courses.tableRow')

                @endcan
            @endforeach

        </tbody>
    </table>
</div>