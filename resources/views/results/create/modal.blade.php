@section('crBigModalForm')
      
  <form action="{{ route ('results.store') }}" method="post">

    @csrf

    <div class="modal-body bg-success">
      @include('results.create.fields')
    </div>

@endsection