@section('edModalForm')
      
  <form action="{{ route ('notifications.update', 1) }}" method="post">

    @csrf
    @method('patch')

    <div class="modal-body bg-warning">
      <input type="hidden" name="sem_id" id="semId">
      @include('notifications.fields')
    </div>
                  
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#editing', function(data){
        var button = $(event.relatedTarget) 
        var id = button.data('id')                     // Recieve from Table
        var name = button.data('name')
        var year = button.data('year')
        var sdate = button.data('sdate')
        var jdate = button.data('jdate')
        var edate = button.data('edate')
        var rdate = button.data('rdate')

        var modal = $(this)
        modal.find('.modal-body #semId').val(id)  // Send to Modal
        modal.find('.modal-body #title').val(name)
        modal.find('.modal-body #year_id').val(year)
        modal.find('.modal-body #start').val(sdate)
        modal.find('.modal-body #join').val(jdate)
        modal.find('.modal-body #end').val(edate)
        modal.find('.modal-body #results').val(rdate)

        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        $("#semIdEd").val($(this).data('sem'));
        
      })

    </script>
@endpush