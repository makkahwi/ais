@section('crModalForm')
      
  <form action="{{ route ('sems.store') }}" method="post">

    @csrf

    <div class="modal-body bg-success">
      @include('sems.create.fields')
    </div>

@endsection