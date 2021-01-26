<!-- Modal -->
<div class="modal fade" id="applicant-show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centerSw" role="document">
    <div class="modal-content">

      <div class="modal-header bg-info">
        <h4 class="modal-title text-info" id="exampleModalCenterTItle">View @include('applicants.title')</h4>
      </div>
      
      <div class="modal-body bg-info">
        @include('applicants.show.fields')
      </div>

      <div class="clearfix bg-info"></div>
      
      <div class="modal-footer bg-info">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close إغلاق</button>
      </div>
      
    </div>
  </div>
</div>

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

      $("#matricNoSw").val($(this).data('no'));
      $("#sStatusSw").val($(this).data('stat'));
      $("#seNameSw").val($(this).data('ename'));
      $("#saNameSw").val($(this).data('aname'));
      $("#studentNameSw").val($(this).data('name'));
      $("#sDobSw").val($(this).data('dob'));
      $("#sGenderSw").val($(this).data('gend'));
      $("#sEmailSw").val($(this).data('email'));
      $("#sPhoneSw").val($(this).data('phone'));
      $("#sAddressSw").val($(this).data('address'));
      $("#sNationSw").val($(this).data('nat'));
      $("#sppnoSw").val($(this).data('ppno'));
      $("#sppExpirySw").val($(this).data('ppe'));
      $("#svisaExpirySw").val($(this).data('ve'));
      $("#slevel_idSw").val($(this).data('level'));
      $("#sclassroom_idSw").val($(this).data('class'));

      var photo = $(this).data('photo');
      var passport = $(this).data('passport');
      var visa = $(this).data('visa');
      var doc1 = $(this).data('birth');
      var doc2 = $(this).data('school');

      $('#photoSw').empty();
      $('#photoDisplay').empty();
      $('#passportSw').empty();
      $('#visaSw').empty();
      $('#doc1Sw').empty();
      $('#doc2Sw').empty();

      $('#photoSw').append('<a target="_blank" href="{{config("app.url")}}/'+photo+'">Photo</a>')
      $('#photoDisplay').append('<img src="{{config("app.url")}}/'+photo+'" width="80%" alt="">')
      $('#passportSw').append('<a target="_blank" href="{{config("app.url")}}/'+passport+'">Passport</a>')
      $('#visaSw').append('<a target="_blank" href="{{config("app.url")}}/'+visa+'">Visa</a>')
      $('#doc1Sw').append('<a target="_blank" href="{{config("app.url")}}/'+doc1+'">Birth Certificate</a>')
      $('#doc2Sw').append('<a target="_blank" href="{{config("app.url")}}/'+doc2+'">School Certificate</a>')

      if ($(this).data('visarequest') == 0)
      {
        $("#svisarequestSw").val('No لا');
      }
      else
      {
        $("#svisarequestSw").val('Yes نعم');
      }

      if ($(this).data('transrequest') == 1)
      {
        $("#stransrequestSw").val('Yes نعم');
      }
      else
      {
        $("#stransrequestSw").val('No لا');
      }

      $("#reNameSw").val($(this).data('rename'));
      $("#raNameSw").val($(this).data('raname'));
      $("#rGenderSw").val($(this).data('rgend'));
      $("#relationSw").val($(this).data('relation'));
      $("#jobSw").val($(this).data('job'));
      $("#orgSw").val($(this).data('org'));
      $("#rEmailSw").val($(this).data('remail'));
      $("#rPhoneSw").val($(this).data('rphone'));
      $("#rhAddressSw").val($(this).data('rhaddress'));
      $("#rwAddressSw").val($(this).data('rwaddress'));
      $("#rNationSw").val($(this).data('rnation'));
      $("#rppnoSw").val($(this).data('rppno'));
      $("#rppeSw").val($(this).data('rppe'));
      $("#rveSw").val($(this).data('rve'));

      var rphoto = $(this).data('rpassport');
      var rvisa = $(this).data('rvisa');

      $('#rPassportSw').empty();
      $('#rVisaSw').empty();

      $('#rPassportSw').append('<a target="_blank" href="{{config("app.url")}}/'+rphoto+'">Photo</a>')
      $('#rVisaSw').append('<a target="_blank" href="{{config("app.url")}}/'+rvisa+'">Photo</a>')

    })

  </script>
@endpush