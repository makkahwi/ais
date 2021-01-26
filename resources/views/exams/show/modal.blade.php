@section('swModalForm')

  @include('exams.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#semIdSw").val($(this).data('sem'));
      $("#level_idSw").val($(this).data('level'));
      $("#course_idSw").val($(this).data('course'));
      $("#typeSw").val($(this).data('type'));
      $("#dateSw").val($(this).data('date'));
      $("#noteSw").val($(this).data('note'));

    })

  </script>
@endpush