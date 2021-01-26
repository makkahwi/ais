<!-- Modal -->
<div class="modal fade" id="appeal-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-danger">
        <h4 class="modal-title text-danger" id="exampleModalCenterTItle"><i class="fa fa-edit"></i> Complain About @yield('modal.title')s</h4>
      </div>

      <form method="post" action="complain">

        @csrf
      
        <div class="modal-body bg-danger">
          <!-- name Field -->
          <div class="form-group col-md-4">
              <label for="name">@include('labels.mark')</label>
              <input type="text" class="form-control" name="name" id="nameCom" readonly>
              <input hidden name="studentNo" value="{{Auth::user()->schoolNo}}">
              <input hidden name="studentName" value="{{Auth::user()->name}}">
              <input hidden name="classroom_id" id="classroom_idCom">
              <input hidden name="teacher_id" id="teacher_idCom">
          </div>

          <!-- Semid Field -->
          <div class="form-group col-md-4">
              <label for="semId">@include('labels.semester')</label>
              <input type="text" class="form-control" name="sem_id" id="semIdCom" readonly>
          </div>

          <!-- course_id Field -->
          <div class="form-group col-md-4">
              <label for="course_id">@include('labels.course')</label>
              <input type="text" class="form-control" name="course_id" id="course_idCom" readonly>
          </div>

          <!-- student_id Field -->
          <div class="form-group col-md-4">
              <label for="student_id">@include('labels.student')</label>
              <input type="text" class="form-control" name="student_id" id="student_idCom" readonly>
          </div>

          <!-- Markvalue Field -->
          <div class="form-group col-md-4">
              <label for="markValue">@include('labels.markv')</label>
              <input type="number" min="0" class="form-control" name="markValue" id="markValueCom" readonly>
          </div>

          <!-- max Field -->
          <div class="form-group col-md-4">
              <label for="max">@include('labels.markfv')</label>
              <input type="number" min="0" class="form-control" name="max" id="maxCom" readonly>
          </div>

          <!-- note Field -->
          <div class="form-group col-md-12">
              <label for="note">@include('labels.note')</label>
              <input type="number" min="0" class="form-control" name="note" id="noteCom" readonly>
          </div>

          <!-- max Field -->
          <div class="form-group col-md-12">
              <label for="complain">Appeal text<br>نص طلب مراجعة العلامة</label>
              <textarea required rows="2" class="form-control" name="complain" id="complainCom"></textarea>
          </div>
        </div>

        <div class="clearfix bg-danger"></div>
        
        <div class="modal-footer bg-danger">
          <button type="submit" class="btn btn-success submitbutton">Send إرسال</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close إغلاق</button>
          <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
        </div>

      </form>
      
    </div>
  </div>
</div>

@push('scripts') <!-- Show Current Data /////////////////////////////////////////// -->
  <script type="text/javascript">

    $(document).on('click', '#appeal', function(data){

      $("#nameCom").val($(this).data('mark'));
      $("#teacher_idCom").val($(this).data('teacher'));
      $("#semIdCom").val($(this).data('sem'));
      $("#classroom_idCom").val($(this).data('class'));
      $("#course_idCom").val($(this).data('course'));
      $("#student_idCom").val($(this).data('student'));
      $("#markValueCom").val($(this).data('markv'));
      $("#maxCom").val($(this).data('fmark'));

    })

  </script>
@endpush