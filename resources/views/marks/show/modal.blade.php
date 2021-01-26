@section('swModalForm')

  @include('marks.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#nameSw").val($(this).data('mark'));
      $("#classroom_idSw").val($(this).data('class'));
      $("#course_idSw").val($(this).data('course'));
      $("#student_idSw").val($(this).data('student'));
      $("#markValueSw").val($(this).data('markv'));
      $("#maxSw").val($(this).data('fmark'));
      $("#noteSw").val($(this).data('note'));

    })

  </script>
@endpush