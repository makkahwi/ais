@section('edModalForm')
      
  <form action="{{ route ('classrooms.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="classroom_id">
      
      @include('classrooms.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#editing', function(data){

        $("#classroom_id").val($(this).data('id'));
        $("#titleEd").val($(this).data('name'));
        $("#level_idEd").val($(this).data('level'));
        $("#roomNoEd").val($(this).data('room'));
        $("#capacityEd").val($(this).data('capacity'));
        $("#descriptionEd").val($(this).data('desc'));
        $("#teacher_idEd").val($(this).data('teacher'));
        $("#status_idEd").val($(this).data('status'));
        
      })

    </script>
@endpush