<!-- Modal -->
<div class="modal fade" id="edit-big-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h4 class="modal-title text-warning" id="exampleModalCenterTItle"><i class="fa fa-edit"></i> Edit @yield('modal.title')</h4>
      </div>
      
        @yield('edBigModalForm')
        
        <div class="clearfix bg-warning"></div>
        
        <div class="modal-footer bg-warning">
          <button type="submit" class="btn btn-success submitbutton">Update تحديث</button>
          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close إغلاق</button>
          <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
        </div>

      </form>
      
    </div>
  </div>
</div>