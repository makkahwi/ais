@section('crModalForm')
      
  <form action="{{ route ('notifications.store') }}" method="post">

    @csrf

    <div class="modal-body bg-success">
      @include('notifications.fields')
    </div>

@endsection