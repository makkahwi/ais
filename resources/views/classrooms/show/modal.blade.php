@section('swModalForm')

  @include('classrooms.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#titleSw").val($(this).data('name'));
        $("#level_idSw").val($(this).data('level'));
        $("#roomNoSw").val($(this).data('room'));
        $("#capacitySw").val($(this).data('capacity'));
        $("#countSw").val($(this).data('count'));
        $("#descriptionSw").val($(this).data('desc'));
        $("#teacher_idSw").val($(this).data('teacher'));
        $("#status_idSw").val($(this).data('status'));

      })

    </script>
@endpush