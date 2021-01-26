@section('edModalForm')
      
  <form action="{{ route ('days.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="day_id" id="day_id">
      @include('days.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){
      
      $("#day_id").val($(this).data('id'));
      $("#dayNameEd").val($(this).data('day'));
      
    })

  </script>
@endpush

