<!-- Modal -->
<div class="modal fade" id="result-create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-success">
        <h4 class="modal-title text-success" id="exampleModalCenterTItle">Add New @include('results.title')s</h4>
      </div>

      <form action="{{ route ('marks.store') }}" method="post">
          
        @csrf
        <div class="modal-body bg-success">
          @if (Auth::user()->role_id < 4)
            @include('results.fields')
          @else
            @include('results.fields')
          @endif
        </div>

        <div class="clearfix bg-success"></div>
        
        <div class="modal-footer bg-success">
          <button type="submit" class="btn btn-success submitbutton">Create إنشاء</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close إغلاق</button>
          <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
        </div>
        
      </form>
      
    </div>
  </div>
</div>