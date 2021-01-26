@section('swBigModalForm')

  @include('relatives.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#reNameSw").val($(this).data('ename'));
      $("#raNameSw").val($(this).data('aname'));
      $("#rNameSw").val($(this).data('name'));
      $("#rGenderSw").val($(this).data('gend'));
      $("#relationSw").val($(this).data('relation'));
      $("#jobSw").val($(this).data('job'));
      $("#orgSw").val($(this).data('org'));
      $("#rEmailSw").val($(this).data('email'));
      $("#rPhoneSw").val($(this).data('phone'));
      $("#rhAddressSw").val($(this).data('haddress'));
      $("#rwAddressSw").val($(this).data('waddress'));
      $("#moreSw").val($(this).data('more'));
      $("#rNationSw").val($(this).data('nat'));
      $("#rppnoSw").val($(this).data('ppno'));
      $("#rppExpirySw").val($(this).data('ppe'));
      $("#rvisaExpirySw").val($(this).data('ve'));

      var passport = $(this).data('passport');
      var visa = $(this).data('visa');

      $("#passportSw").val(passport);
      $("#visaSw").val(visa);

      $('#passportlink').append('<a target="_blank" href="{{config("app.url")}}/'+passport+'">Passport</a>')
      $('#visalink').append('<a target="_blank" href="{{config("app.url")}}/'+visa+'">Visa</a>')

    })

  </script>
@endpush