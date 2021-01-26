@section('edModalForm')

  <form action="{{ route ('sfCategories.update', 1) }}" method="post" enctype="multipart/form-data">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="idEd">
      @include('studentsFinancialsCategories.edit.fields')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#idEd").val($(this).data('id'));
      $("#batch_idEd").val($(this).data('batch'));
      $("#frequencyEd").val($(this).data('frequency'));
      $("#titleEd").val($(this).data('title'));
      $("#level_idEd").val($(this).data('level'));
      $("#amountEd").val($(this).data('amount'));

    })

  </script>
@endpush