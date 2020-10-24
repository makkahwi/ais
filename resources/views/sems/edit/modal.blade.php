@section('edModalForm')
      
  <form action="{{ route ('sems.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="id" id="semIdEd">
      @include('sems.edit.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#editing', function(data){
      
      $("#semIdEd").val($(this).data('id'));
      $("#titleEd").val($(this).data('name'));
      $("#year_idEd").val($(this).data('year'));
      $("#startEd").val($(this).data('sdate'));
      $("#joinEd").val($(this).data('jdate'));
      $("#resultsEd").val($(this).data('rdate'));
      $("#endEd").val($(this).data('edate'));
      
    })

  </script>
@endpush