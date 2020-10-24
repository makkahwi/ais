@section('crModalForm')

  <form action="{{ route ('batches.store') }}" method="post">
    
    @csrf
    <div class="modal-body bg-success">
      @include('studentsFinancialsCategories.batches.fields')
    </div>
        
@endsection