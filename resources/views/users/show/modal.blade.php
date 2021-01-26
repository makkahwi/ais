@section('swModalForm')

  @include('users.show.fields')

@endsection

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#showing', function(data){

    $("#schoolNoSw").val($(this).data('schoolno'));
    $("#role_idSw").val($(this).data('role'));
    $("#nameSw").val($(this).data('name'));
    $("#emailSw").val($(this).data('email'));
    $("#statusSw").val($(this).data('status'));
    $("#ldateSw").val($(this).data('ldate'));
    $("#passwordSw").val($(this).data('password'));

    })

  </script>
@endpush