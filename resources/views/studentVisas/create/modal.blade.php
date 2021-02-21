@section('crModalForm')
      
  <form action="{{ route ('studentVisas.store') }}" method="post">

    @csrf

    <div class="modal-body bg-success">
      @include('studentVisas.create.fields')
    </div>

@endsection