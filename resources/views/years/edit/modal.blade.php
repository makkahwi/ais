@section('edModalForm')

  <form action="{{ route ('years.update', 1) }}" method="post">

  @csrf
  @method('patch')

  <div class="modal-body bg-warning">
    <input type="hidden" name="id" id="year_id">
    @include('years.edit.fields')
  </div>

@endsection
  
@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){

      $("#year_id").val($(this).data('id'));
      $("#titleEd").val($(this).data('yname'));

    })

  </script>
@endpush