@section('edModalForm')
      
  <form action="{{ route ('statuses.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="status_id" id="status_id">
      @include('statuses.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#status_id").val($(this).data('id'));
      $("#titleEd").val($(this).data('name'));
      $("#descEd").val($(this).data('desc'));
      
    })

  </script>
@endpush