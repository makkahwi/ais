<!-- Modal -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-header bg-success">
        <h4 class="modal-title text-success" id="exampleModalCenterTItle"><i class="fa fa-plus"></i> Add New @yield('modal.title')</h4>
      </div>
    
      @yield('crModalForm')
        
        <div class="clearfix bg-success"></div>
        
        <div class="modal-footer bg-success">
          <button type="submit" class="btn btn-success submitbutton">Create إنشاء</button>
          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close إغلاق</button>
          <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
        </div>
        
      </form>

    </div>
  </div>
</div>