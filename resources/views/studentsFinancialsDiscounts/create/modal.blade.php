@section('crModalForm')

  <form action="{{ route ('sfDiscounts.store') }}" method="post">
    
    @csrf
    <div class="modal-body bg-success">
      @include('studentsFinancialsDiscounts.create.fields')
    </div>
        
@endsection

@push('scripts') <!-- Update Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $('#type').on('change',function(e){+

      var type = e.target.value;

      if (type == 'Fixed Amount')
      {
        $('#sign').empty();
        $('#sign').append('RM');
      }
      else if (type == 'Percentage')
      {
        $('#sign').empty();
        $('#sign').append('<i class="fas fa-percentage"></i>');
      }
      else
        $('#sign').empty();

    });

  </script>
@endpush