@section('crBigModalForm')

  <form action="{{ route ('sfCategories.store') }}" method="post">
    
    @csrf
    <div class="modal-body bg-success">
      @include('studentsFinancialsCategories.create.table')
    </div>
        
@endsection