@section('edModalForm')
      
  <form action="{{ route ('users.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="id">
      @include('users.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#editing', function(data){

        $("#id").val($(this).data('id'));
        $("#nameEd").val($(this).data('name'));
        $("#schoolNoEd").val($(this).data('schoolno'));
        $("#roleEd").val($(this).data('role'));
        $("#emailEd").val($(this).data('email'));
        $("#statusEd").val($(this).data('status'));
        $("#ldateEd").val($(this).data('ldate'));
        $("#passwordEd").val($(this).data('password'));
        
      })

    </script>
@endpush