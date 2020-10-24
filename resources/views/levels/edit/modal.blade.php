@section('edModalForm')
      
  <form action="{{ route ('levels.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="level_id" id="level_id">
      @include('levels.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#editing', function(data){

        $("#level_id").val($(this).data('id'));
        $("#titleEd").val($(this).data('level'));
        $("#descriptionEd").val($(this).data('desc'));
        
      })

    </script>
@endpush