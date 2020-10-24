@section('crModalForm')

  <form action="{{ route ('classrooms.store') }}" method="post">

    @csrf

    <div class="modal-body bg-success">
      @include('classrooms.create.fields')
    </div>

@endsection