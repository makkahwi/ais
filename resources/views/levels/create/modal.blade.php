@section('crModalForm')
      
  <form action="{{ route ('levels.store') }}" method="post">

    @csrf
    
    <div class="modal-body bg-success">
      @include('levels.create.fields')
    </div>

@endsection