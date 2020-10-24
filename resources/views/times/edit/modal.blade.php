@section('edModalForm')
      
  <form action="{{ route ('times.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="time_id" id="time_id">
      @include('times.edit.fields')
    </div>

@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#editing', function(data){

        $("#time_id").val($(this).data('id'));
        $("#timeNameEd").val($(this).data('tname'));
        $("#startTimeEd").val($(this).data('stime'));
        $("#endTimeEd").val($(this).data('etime'));
        
      })

    </script>
@endpush