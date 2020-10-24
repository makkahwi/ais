@section('swModalForm')

  @include('results.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#showing', function(data){

        $("#typeNameSw").val($(this).data('mark'));
        $("#semIdSw").val($(this).data('sem'));
        $("#classroom_idSw").val($(this).data('class'));
        $("#course_idSw").val($(this).data('course'));
        $("#student_idSw").val($(this).data('student'));
        $("#markValueSw").val($(this).data('markv'));
        $("#fullMarkValueSw").val($(this).data('fmark'));
        $("#noteSw").val($(this).data('note'));

      })

    </script>
@endpush