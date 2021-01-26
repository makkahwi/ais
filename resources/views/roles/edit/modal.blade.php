@section('edModalForm')
      
  <form action="{{ route ('roles.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="role_id" id="role_id">
      @include('roles.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#role_id").val($(this).data('id'));
      $("#titleEd").val($(this).data('name'));
      $("#descriptionEd").val($(this).data('desc'));
      
    })

  </script>
@endpush