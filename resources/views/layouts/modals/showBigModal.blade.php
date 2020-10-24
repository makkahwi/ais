<!-- Modal -->
<div class="modal fade" id="show-big-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-info">
        <h4 class="modal-title text-info" id="exampleModalCenterTItle"><i class="far fa-eye"></i> View @yield('modal.title')</h4>
      </div>
      
      <div class="modal-body bg-info">
        @yield('swBigModalForm')
      </div>

      <div class="clearfix bg-info"></div>
      
      <div class="modal-footer bg-info">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close إغلاق</button>
      </div>
      
    </div>
  </div>
</div>