@section('crModalForm')
      
  <form action="{{ route ('statuses.store') }}" method="post">
    
    @csrf
    <div class="modal-body bg-success">
      @include('statuses.create.fields')
    </div>

@endsection