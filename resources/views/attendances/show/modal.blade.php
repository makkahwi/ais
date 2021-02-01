@section('swModalForm')

  @include('attendances.show.fields')

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#semIdSw").val($(this).data('sem'));
      $("#student_idSw").val($(this).data('student'));
      $("#dateSw").val($(this).data('date'));
      $("#noteSw").val($(this).data('note'));

      if ($(this).data('atten') == 2)
      {
        $("#attenSw").val("Attended حاضر");
      }
      else if ($(this).data('atten') == 1)
      {
        $("#attenSw").val("Late متأخر");
      }
      else
      {
        $("#attenSw").val("Absent غائب");
      }

    })

  </script>
@endpush