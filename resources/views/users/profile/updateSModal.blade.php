<!-- Modal -->
<div class="modal fade" id="update-smodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-header bg-danger">
    <h4 class="modal-title text-danger" id="exampleModalCenterTItle"><i class="fa fa-edit"></i> Request to Update / Correct Data</h4>
    </div>

    <form method="post" action="updateUrequest" enctype="multipart/form-data">

    @csrf
    
    <div class="modal-body bg-danger">
      <div class="table-responsive">
        <table class="table tableTail" width="100%">
          <thead>
            <tr class="theme-main">
              <th></th>
              <th>Current Data<br>البيانات الحالية</th>
              <th>New Data<br>البيانات الجديدة</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>
                <label for="id">@include('labels.sno')</label>
              </th>
              <th colspan="2">
                <div class="form-group">
                  <input type="text" class="form-control" name="id" id="id" readonly>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="level">@include('labels.level')</label>
              </th>
              <th colspan="2">
                <div class="form-group">
                  <input type="text" class="form-control" name="level" id="level" readonly>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="classroom">@include('labels.classroom')</label>
              </th>
              <th colspan="2">
                <div class="form-group">
                  <input type="text" class="form-control" name="classroom" id="classroom" readonly>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="ename">@include('labels.ename')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" style="text-transform:capitalize;" name="ename" id="ename" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="enameNew" id="enameNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="aname">@include('labels.aname')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" style="text-transform:capitalize;" name="aname" id="aname" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="anameNew" id="anameNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="gender">@include('labels.gender')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="gender" id="gender" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <select required type="text" class="form-control" name="genderNew" id="genderNew">
                    <option value="">Select a Gender...</option>
                    <option value="Female أنثى">Female أنثى</option>
                    <option value="Male ذكر">Male ذكر</option>
                  </select>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="dob">@include('labels.dob')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="dob" id="dob" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="date" class="form-control" name="dobNew" id="dobNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="email">@include('labels.email')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" id="email" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailNew" id="emailNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="phone">@include('labels.phone')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="phoneNew" id="phoneNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="address">@include('labels.address')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="address" id="address" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="addressNew" id="addressNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="nation">@include('labels.nation')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="nation" id="nation" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <select required class="form-control" name="nationNew" id="nationNew">
                    <option value="">Select a nation...</option>
                    @include('layouts.countriesList')
                  </select>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="ppno">@include('labels.passno')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="ppno" id="ppno" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="ppnoNew" id="ppnoNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="ppExpiry">@include('labels.ppe')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="ppExpiry" id="ppExpiry" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="date" class="form-control" name="ppExpiryNew" id="ppExpiryNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="visaExpiry">@include('labels.ve')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="visaExpiry" id="visaExpiry" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="date" class="form-control" name="visaExpiryNew" id="visaExpiryNew">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="photo">@include('labels.photo')</label>
              </th>
              <th>
                <input hidden type="text" name="photo" id="photoS">
                <div id="photoDiv" class="form-group">
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="photoNew" id="photoNewS">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="passport">@include('labels.pass')</label>
              </th>
              <th>
                <input hidden type="text" name="passport" id="passportS">
                <div id="passportDiv" class="form-group">
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="passportNew" id="passportNewS">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="visa">@include('labels.visa')</label>
              </th>
              <th>
                <input hidden type="text" name="visa" id="visaS">
                <div id="visaDiv" class="form-group">
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="visaNew" id="visaNewS">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="doc1">@include('labels.birth')</label>
              </th>
              <th>
                <input hidden type="text" name="doc1" id="doc1S">
                <div id="doc1Div" class="form-group">
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc1New" id="doc1NewS">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="doc2">@include('labels.school')</label>
              </th>
              <th>
                <input hidden type="text" name="doc2" id="doc2S">
                <div id="doc2Div" class="form-group">
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc2New" id="doc2NewS">
                </div>
              </th>
            </tr>
            @include('users.profile.filesValidation')
          </tbody>
        </table>
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

    $(document).on('click', '#updates', function(data){

    $("#id").val($(this).data('id'));
    $("#level").val($(this).data('level'));
    $("#classroom").val($(this).data('classroom'));
    $("#status").val($(this).data('status'));
    $("#ename").val($(this).data('ename'));
    $("#aname").val($(this).data('aname'));
    $("#gender").val($(this).data('gender'));
    $("#dob").val($(this).data('dob'));
    $("#email").val($(this).data('email'));
    $("#phone").val($(this).data('phone'));
    $("#address").val($(this).data('address'));
    $("#ppExpiry").val($(this).data('ppe'));
    $("#visaExpiry").val($(this).data('ve'));
    $("#nation").val($(this).data('nation'));
    $("#ppno").val($(this).data('ppno'));
    
    $("#photoS").val($(this).data('photo'));
    $("#passportS").val($(this).data('passport'));
    $("#visaS").val($(this).data('visa'));
    $("#doc1S").val($(this).data('doc1'));
    $("#doc2S").val($(this).data('doc2'));
    $("#doc3S").val($(this).data('doc3'));

    $photo = $(this).data('photo');
    $passport = $(this).data('passport');
    $visa = $(this).data('visa');
    $doc1 = $(this).data('doc1');
    $doc2 = $(this).data('doc2');
    $doc3 = $(this).data('doc3');

    $(document).ready(function() {
      $("#photoDiv").empty();
      $("#photoDiv").append("<p><a target='_blank' href="+$photo+">Photo</a>");
      $("#passportDiv").empty();
      $("#passportDiv").append("<p><a target='_blank' href="+$passport+">Passport</a>");
      $("#visaDiv").empty();
      $("#visaDiv").append("<p><a target='_blank' href="+$visa+">Visa</a>");
      $("#doc1Div").empty();
      $("#doc1Div").append("<p><a target='_blank' href="+$doc1+">Birth Certificates</a>");
      $("#doc2Div").empty();
      $("#doc2Div").append("<p><a target='_blank' href="+$doc2+">Old School Certificate</a>");
    });
    
    $("#enameNew").val($(this).data('ename'));
    $("#anameNew").val($(this).data('aname'));
    $("#genderNew").val($(this).data('gender'));
    $("#dobNew").val($(this).data('dob'));
    $("#emailNew").val($(this).data('email'));
    $("#phoneNew").val($(this).data('phone'));
    $("#addressNew").val($(this).data('address'));
    $("#ppExpiryNew").val($(this).data('ppe'));
    $("#visaExpiryNew").val($(this).data('ve'));
    $("#nationNew").val($(this).data('nation'));
    $("#ppnoNew").val($(this).data('ppno'));

    })

  </script>
@endpush