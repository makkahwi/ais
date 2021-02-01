<!-- Modal -->
<div class="modal fade" id="update-rmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-header bg-danger">
    <h4 class="modal-title text-danger" id="exampleModalCenterTItle"><i class="fa fa-edit"></i> Request to Update / Correct Data</h4>
    </div>

    <form method="post" action="updateRrequest" enctype="multipart/form-data">

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
                  <input type="text" class="form-control" name="id" id="idR" readonly>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="ename">@include('labels.ename')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" style="text-transform:capitalize;" name="ename" id="enameR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="enameNew" id="enameNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="aname">@include('labels.aname')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" style="text-transform:capitalize;" name="aname" id="anameR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="anameNew" id="anameNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="gender">@include('labels.gender')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="gender" id="genderR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <select required type="text" class="form-control" name="genderNew" id="genderNewR">
                    <option value="">Select a Gender...</option>
                    <option value="Female أنثى">Female أنثى</option>
                    <option value="Male ذكر">Male ذكر</option>
                  </select>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="relation">@include('labels.relation')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="relation" id="relationR" readonly>

                </div>
              </th>
              <th>
                <div class="form-group">
                  <select required class="form-control" name="relationNew" id="relationNewR">
                    <option value="">Select a Relation...</option>
                    <option value="Father أب">Father أب</option>
                    <option value="Mother أم">Mother أم</option>
                    <option value="Uncle عم / خال">Uncle عم / خال</option>
                    <option value="Aunt عمة / خالة">Aunt عمة / خالة</option>
                    <option value="Spouse زوج/ة">Spouse زوج/ة</option>
                    <option value="Sibling أخ/ت">Sibling أخ/ت</option>
                    <option value="Friend صديق/ة">Friend صديق/ة</option>
                  </select>
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="job">@include('labels.job')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="job" id="jobR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="job" class="form-control" name="jobNew" id="jobNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="org">@include('labels.org')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="org" id="orgR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="org" class="form-control" name="orgNew" id="orgNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="email">@include('labels.email')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" id="emailR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="email" class="form-control" name="emailNew" id="emailNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="phone">@include('labels.phone')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phoneR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="phoneNew" id="phoneNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="haddress">@include('labels.address')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="haddress" id="haddressR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input required type="text" class="form-control" name="haddressNew" id="haddressNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="waddress">@include('labels.waddress')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="waddress" id="waddressR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="waddressNew" id="waddressNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="more">@include('labels.more')</label>
              </th>
              <th>
                <div class="form-group">
                  <textarea type="text" class="form-control" name="more" id="more" readonly></textarea>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <textarea type="text" class="form-control" name="moreNew" id="moreNew"></textarea>
                </div>
              </th>
            </tr>
            @if(Auth::user()->role_id > 6 )
            <tr>
              <th>
                <label for="nation">@include('labels.nation')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="nation" id="nationR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <select class="form-control" name="nationNew" id="nationNewR">
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
                  <input type="text" class="form-control" name="ppno" id="ppnoR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="ppnoNew" id="ppnoNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="ppExpiry">@include('labels.ppe')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="ppExpiry" id="ppExpiryR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="date" class="form-control" name="ppExpiryNew" id="ppExpiryNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="visaExpiry">@include('labels.ve')</label>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" class="form-control" name="visaExpiry" id="visaExpiryR" readonly>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="date" class="form-control" name="visaExpiryNew" id="visaExpiryNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="passport">@include('labels.pass')</label>
              </th>
              <th>
                <input hidden type="text" name="passport" id="passportR">
                <div id="passportDivR" class="form-group">
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="passportNew" id="passportNewR">
                </div>
              </th>
            </tr>
            <tr>
              <th>
                <label for="visa">@include('labels.visa')</label>
              </th>
              <th>
                <input hidden type="text" name="visa" id="visaR">
                <div id="visaDivR" class="form-group">
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="visaNew" id="visaNewR">
                </div>
              </th>
            </tr>
            @include('users.profile.filesValidation')
            @endif
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

@push('scripts')
  <script type="text/javascript">

    $(document).on('click', '#updater', function(data){

    $("#idR").val($(this).data('id'));
    $("#levelR").val($(this).data('level'));
    $("#classroomR").val($(this).data('classroom'));
    $("#statusR").val($(this).data('status'));
    $("#enameR").val($(this).data('ename'));
    $("#anameR").val($(this).data('aname'));
    $("#genderR").val($(this).data('gender'));
    $("#relationR").val($(this).data('relation'));
    $("#jobR").val($(this).data('job'));
    $("#orgR").val($(this).data('org'));
    $("#emailR").val($(this).data('email'));
    $("#phoneR").val($(this).data('phone'));
    $("#haddressR").val($(this).data('haddress'));
    $("#waddressR").val($(this).data('waddress'));
    $("#more").val($(this).data('more'));
    $("#nationR").val($(this).data('nation'));
    $("#ppnoR").val($(this).data('ppno'));
    $("#ppExpiryR").val($(this).data('ppe'));
    $("#visaExpiryR").val($(this).data('ve'));
    
    $("#passportR").val($(this).data('rpassport'));
    $("#visaR").val($(this).data('rvisa'));

    $passport = $(this).data('rpassport');
    $visa = $(this).data('rvisa');

    $(document).ready(function() {
      $("#passportDivR").empty();
      $("#passportDivR").append("<p><a target='_blank' href="+$passport+">Passport</a>");
      $("#visaDivR").empty();
      $("#visaDivR").append("<p><a target='_blank' href="+$visa+">Visa</a>");
    });
    
    $("#enameNewR").val($(this).data('ename'));
    $("#anameNewR").val($(this).data('aname'));
    $("#genderNewR").val($(this).data('gender'));
    $("#relationNewR").val($(this).data('relation'));
    $("#jobNewR").val($(this).data('job'));
    $("#orgNewR").val($(this).data('org'));
    $("#emailNewR").val($(this).data('email'));
    $("#phoneNewR").val($(this).data('phone'));
    $("#haddressNewR").val($(this).data('haddress'));
    $("#waddressNewR").val($(this).data('waddress'));
    $("#moreNew").val($(this).data('more'));
    $("#nationNewR").val($(this).data('nation'));
    $("#ppnoNewR").val($(this).data('ppno'));
    $("#ppExpiryNewR").val($(this).data('ppe'));
    $("#visaExpiryNewR").val($(this).data('ve'));

    })

  </script>
@endpush