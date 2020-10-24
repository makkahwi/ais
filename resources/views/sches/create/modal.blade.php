@section('crModalForm')
      
  <form action="{{ route ('sches.store') }}" method="post" id="classes">
    
    @csrf
    <div class="modal-body bg-success">

        @include('sches.create.table')
        
    </div>

@endsection