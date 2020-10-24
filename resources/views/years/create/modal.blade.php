@section('crModalForm')


<form action="{{ route ('years.store') }}" method="post">

    @csrf
    
    <div class="modal-body bg-success">
      @include('years.create.fields')
    </div>
    
@endsection