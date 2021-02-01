@section('swBigModalForm')

  @include('staff.show.fields')

@endsection

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#eNameSw").val($(this).data('ename'));
      $("#aNameSw").val($(this).data('aname'));
      $("#staffNoSw").val($(this).data('staffno'));
      $("#roleSw").val($(this).data('role'));
      $("#dobSw").val($(this).data('dob'));
      $("#emailSw").val($(this).data('email'));
      $("#phoneSw").val($(this).data('phone'));
      $("#gendSw").val($(this).data('gend'));
      $("#statusSw").val($(this).data('status'));
      $("#addressSw").val($(this).data('address'));
      $("#natSw").val($(this).data('nat'));
      $("#ppnoSw").val($(this).data('ppno'));
      $("#ppeSw").val($(this).data('ppe'));
      $("#veSw").val($(this).data('ve'));
      $("#leaveDateSw").val($(this).data('ldate'));
      
      var photo = $(this).data('photo');
      var passport = $(this).data('passport');
      var visa = $(this).data('visa');
      var doc1 = $(this).data('doc1');
      var doc2 = $(this).data('doc2');
      var doc3 = $(this).data('doc3');
      
      $("#photoSw").val(photo);
      $("#passportSw").val(passport);
      $("#visaSw").val(visa);
      $("#doc1Sw").val(doc1);
      $("#doc2Sw").val(doc2);
      $("#doc3Sw").val(doc3);

      $('#photolink').empty();
      $('#passportlink').empty();
      $('#visalink').empty();
      $('#doc1link').empty();
      $('#doc2link').empty();
      $('#doc3link').empty();

      $('#photolink').append('<a target="_blank" href="{{config("app.url")}}/'+photo+'">Photo link</a>')
      $('#passportlink').append('<a target="_blank" href="{{config("app.url")}}/'+passport+'">Passport link</a>')
      $('#visalink').append('<a target="_blank" href="{{config("app.url")}}/'+visa+'">Visa link</a>')
      $('#doc1link').append('<a target="_blank" href="{{config("app.url")}}/'+doc1+'">Certificates link</a>')
      $('#doc2link').append('<a target="_blank" href="{{config("app.url")}}/'+doc2+'">Certificates link</a>')
      $('#doc3link').append('<a target="_blank" href="{{config("app.url")}}/'+doc3+'">Letter link</a>')

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

      var rvisa = $(this).data('rvisa');
      var rpassport = $(this).data('rpassport');

      $('#rpassportSw').append('<a target="_blank" href="{{config("app.url")}}/'+rpassport+'">Passport</a>')
      $('#rvisaSw').append('<a target="_blank" href="{{config("app.url")}}/'+rvisa+'">Visa</a>')
    })

  </script>
@endpush