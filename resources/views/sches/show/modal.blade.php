@section('swModalForm')

  @include('sches.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#semIdSw").val($(this).data('sem'));
        $("#level_idSw").val($(this).data('level'));
        $("#classroom_idSw").val($(this).data('class'));
        $("#course_idSw").val($(this).data('course'));
        $("#teacher_idSw").val($(this).data('teacher'));
        $("#day_idSw").val($(this).data('day'));
        $("#time_idSw").val($(this).data('time'));
        $("#status_idSw").val($(this).data('status'));

      })

    </script>
@endpush