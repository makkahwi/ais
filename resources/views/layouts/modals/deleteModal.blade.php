<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-header bg-danger">
        <h4 class="modal-title text-danger" id="exampleModalCenterTItle"><i class="fa fa-trash-alt"></i> Delete @yield('modal.title')</h4>
      </div>
    
      @yield('deleteModal')

        @csrf
        @method('delete')

        <div class="modal-body bg-danger">
          <!-- title Field -->
          <div class="form-group col-md-12">
              <input readonly type="hidden" class="form-control" name="id" id="idDelete">
              <label for="title"><h4>Are you sure about deleting this whole record?</h4></label>
              <input readonly type="text" class="form-control" name="title" id="titleDelete">
          </div>
        </div>

        <div class="clearfix bg-danger"></div>
                
        <div class="modal-footer bg-danger">
          <button type="submit" class="btn btn-success submitbutton">Delete حذف</button>
          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close إغلاق</button>
          <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
        </div>
        
      </form>

    </div>
  </div>
</div>

@push('scripts') <!-- Delete Data /////////////////////////////////////////// -->
    <script type="text/javascript">

      $(document).on('click', '#deleting', function(data){

        $("#idDelete").val($(this).data('id'));
        $("#titleDelete").val($(this).data('title'));
      })

    </script>
@endpush