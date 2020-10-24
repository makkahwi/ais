@section('crModalForm')
      
  <form action="{{ route ('exams.store') }}" method="post" id="exams">
    
    @csrf
    <div class="modal-body bg-success">

        @include('exams.create.table')
        
    </div>

@endsection