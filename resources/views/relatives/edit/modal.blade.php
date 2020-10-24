@section('edBigModalForm')

  <form action="{{ route ('relatives.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="rId">
      @include('relatives.edit.fields')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#rId").val($(this).data('id'));
      $("#reNameEd").val($(this).data('ename'));
      $("#raNameEd").val($(this).data('aname'));
      $("#rNameEd").val($(this).data('name'));
      $("#rGenderEd").val($(this).data('gend'));
      $("#relationEd").val($(this).data('relation'));
      $("#jobEd").val($(this).data('job'));
      $("#orgEd").val($(this).data('org'));
      $("#rwAddressEd").val($(this).data('waddress'));
      $("#rEmailEd").val($(this).data('email'));
      $("#rPhoneEd").val($(this).data('phone'));
      $("#rhAddressEd").val($(this).data('haddress'));
      $("#moreEd").val($(this).data('more'));
      $("#rNationEd").val($(this).data('nat'));
      $("#rppnoEd").val($(this).data('ppno'));
      $("#rppExpiryEd").val($(this).data('ppe'));
      $("#rvisaExpiryEd").val($(this).data('ve'));
      $("#rPassrortEd").val($(this).data('passport'));
      $("#rVisaEd").val($(this).data('visa'));

    })

  </script>
@endpush