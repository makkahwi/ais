@section('crModalForm')
      
  <form action="{{ route ('attendances.store') }}" method="post" id="attendances">
    
    @csrf
    <div class="modal-body bg-success">

      @include('attendances.create.table')
        
    </div>

@endsection