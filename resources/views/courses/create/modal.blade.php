@section('crModalForm')
      
  <form action="{{ route ('courses.store') }}" method="post">

    @csrf
    
    <div class="modal-body bg-success">
      @include('courses.create.fields')
    </div>

@endsection