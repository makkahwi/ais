@section('swModalForm')

  @include('studentVisas.show.fields')

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#studentSw").val($(this).data('student'));
      $("#fathersPassportSw").val($(this).data('fpp'));
      $("#fathersVisasSw").val($(this).data('fvisa'));
      $("#fathersLetterSw").val($(this).data('vletter'));
      $("#mothersPassportSw").val($(this).data('mpp'));
      $("#mothersVisasSw").val($(this).data('mvisa'));
      $("#mothersLetterSw").val($(this).data('mletter'));
      $("#studentsPassportSw").val($(this).data('spp'));
      $("#studentsVisasSw").val($(this).data('svisa'));
      $("#embassyLetterSw").val($(this).data('embassy'));
      $("#schoolLetterSw").val($(this).data('sletter'));
      $("#statusSw").val($(this).data('status'));
      $("#noteSw").val($(this).data('note'));

    })

  </script>
@endpush