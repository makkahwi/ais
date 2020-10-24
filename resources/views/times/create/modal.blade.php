@section('crModalForm')

  <form action="{{ route ('times.store') }}" method="post">
    
    @csrf
    <div class="modal-body bg-success">
      @include('times.create.fields')
    </div>
        
@endsection