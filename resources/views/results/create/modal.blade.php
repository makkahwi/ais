@section('crModalForm')
      
  <form action="{{ route ('sems.store') }}" method="post">

    @csrf

    <div class="modal-body bg-success">
      @include('results.create.fields')
    </div>

@endsection