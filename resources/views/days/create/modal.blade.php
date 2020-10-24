@section('crModalForm')
      
  <form action="{{ route ('days.store') }}" method="post">
                      
    @csrf
    <div class="modal-body bg-success">
      @include('days.create.fields')
    </div>

@endsection