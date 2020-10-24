@section('crModalForm')
      
  <form action="{{ route ('roles.store') }}" method="post">
    
    @csrf
    <div class="modal-body bg-success">
      @include('roles.create.fields')
    </div>

@endsection