@section('edModalForm')

  <form action="{{ route ('sfDiscounts.update', 1) }}" method="post" enctype="multipart/form-data">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="idEd">
      @include('studentsFinancialsDiscounts.edit.fields')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#idEd").val($(this).data('id'));
      $("#typeEd").val($(this).data('type'));
      $("#titleEd").val($(this).data('title'));
      $("#descriptionEd").val($(this).data('description'));
      $("#amountEd").val($(this).data('amount'));

    })

  </script>
@endpush