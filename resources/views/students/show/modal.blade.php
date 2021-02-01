@section('swBigModalForm')

  <form action="{{route('confLetter')}}">

    @include('students.show.fields')

  </form>

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      var photo = $(this).data('photo');
      var passport = $(this).data('passport');
      var visa = $(this).data('visa');
      var doc1 = $(this).data('doc1');
      var doc2 = $(this).data('school');

      $("#matricNoSw").val($(this).data('no'));
      $("#sStatusSw").val($(this).data('stat'));
      $("#eNameSw").val($(this).data('ename'));
      $("#aNameSw").val($(this).data('aname'));
      $("#nameSw").val($(this).data('name'));
      $("#dobSw").val($(this).data('dob'));
      $("#genderSw").val($(this).data('gend'));
      $("#emailSw").val($(this).data('email'));
      $("#phoneSw").val($(this).data('phone'));
      $("#addressSw").val($(this).data('address'));
      $("#nationSw").val($(this).data('nat'));
      $("#ppnoSw").val($(this).data('ppno'));
      $("#ppExpirySw").val($(this).data('ppe'));
      $("#visaExpirySw").val($(this).data('ve'));
      $("#titleSw").val($(this).data('leveln'));
      $("#transSw").val($(this).data('trans'));
      $("#sclassroom_idSw").val($(this).data('class'));

      $('#photoSw').empty();
      $('#photo').empty();
      $('#passportSw').empty();
      $('#visaSw').empty();
      $('#doc1Sw').empty();
      $('#doc2Sw').empty();

      $('#photoSw').append('<a target="_blank" href="{{config("app.url")}}/'+photo+'">Photo</a>')
      $('#photo').append('<img src="{{config("app.url")}}/'+photo+'" width="80%" alt="">')
      $('#passportSw').append('<a target="_blank" href="{{config("app.url")}}/'+passport+'">Passport</a>')
      $('#visaSw').append('<a target="_blank" href="{{config("app.url")}}/'+visa+'">Visa</a>')
      $('#doc1Sw').append('<a target="_blank" href="{{config("app.url")}}/'+doc1+'">Birth Certificate</a>')
      $('#doc2Sw').append('<a target="_blank" href="{{config("app.url")}}/'+doc2+'">School Certificate</a>')

      var rvisa = $(this).data('rvisa');
      var rpassport = $(this).data('rpassport');

      $("#reNameSw").val($(this).data('rename'));
      $("#raNameSw").val($(this).data('raname'));
      $("#rgenderSw").val($(this).data('rgend'));
      $("#relationSw").val($(this).data('relation'));
      $("#jobSw").val($(this).data('job'));
      $("#orgSw").val($(this).data('org'));
      $("#remailSw").val($(this).data('remail'));
      $("#rphoneSw").val($(this).data('rphone'));
      $("#haddressSw").val($(this).data('haddress'));
      $("#waddressSw").val($(this).data('waddress'));
      $("#moreSw").val($(this).data('more'));
      $("#rnationSw").val($(this).data('rnat'));
      $("#rppnoSw").val($(this).data('rppno'));
      $("#rppExpirySw").val($(this).data('rppe'));
      $("#rvisaExpirySw").val($(this).data('rve'));

      $('#rpassportSw').empty();
      $('#rvisaSw').empty();

      $('#rpassportSw').append('<a target="_blank" href="{{config("app.url")}}/'+rpassport+'">Passport</a>')
      $('#rvisaSw').append('<a target="_blank" href="{{config("app.url")}}/'+rvisa+'">Visa</a>')

    })

  </script>
@endpush