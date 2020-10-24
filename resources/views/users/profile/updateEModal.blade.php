<!-- Modal -->
<div class="modal fade" id="update-emodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="id" id="idE" readonly>
                                </div>
                            </th>
                            <th>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="ename">@include('labels.ename')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="text-transform:capitalize;" name="ename" id="enameE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="text" class="form-control" name="enameNew" id="enameNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="aname">@include('labels.aname')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="text-transform:capitalize;" name="aname" id="anameE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="text" class="form-control" name="anameNew" id="anameNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="gender">@include('labels.gender')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="gender" id="genderE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <select required type="text" class="form-control" name="genderNew" id="genderNewE">
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
                                    <input type="text" class="form-control" name="dob" id="dobE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="date" class="form-control" name="dobNew" id="dobNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">@include('labels.email')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id="emailE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="email" class="form-control" name="emailNew" id="emailNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="phone">@include('labels.phone')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" id="phoneE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="text" class="form-control" name="phoneNew" id="phoneNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="address">@include('labels.address')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" id="addressE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="text" class="form-control" name="addressNew" id="addressNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="nation">@include('labels.nation')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nation" id="nationE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <select required class="form-control" name="nationNew" id="nationNewE">
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
                                    <input type="text" class="form-control" name="ppno" id="ppnoE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="text" class="form-control" name="ppnoNew" id="ppnoNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="ppExpiry">@include('labels.ppe')</label>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ppExpiry" id="ppExpiryE" readonly>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input required type="date" class="form-control" name="ppExpiryNew" id="ppeNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="photo">@include('labels.photo')</label>
                            </th>
                            <th>
                                <input hidden type="text" name="photo" id="photoE">
                                <div id="photoDiv" class="form-group">
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="photoNew" id="photoNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="passport">@include('labels.pass')</label>
                            </th>
                            <th>
                                <input hidden type="text" name="passport" id="passportE">
                                <div id="passportDiv" class="form-group">
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="passportNew" id="passportNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="visa">@include('labels.visa')</label>
                            </th>
                            <th>
                                <input hidden type="text" name="visa" id="visaE">
                                <div id="visaDiv" class="form-group">
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="visaNew" id="visaNewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="doc1">@include('labels.certificate')</label>
                            </th>
                            <th>
                                <input hidden type="text" name="doc1" id="doc1E">
                                <div id="doc1Div" class="form-group">
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc1New" id="doc1NewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="doc2">@include('labels.work')</label>
                            </th>
                            <th>
                                <input hidden type="text" name="doc2" id="doc2E">
                                <div id="doc2Div" class="form-group">
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc2New" id="doc2NewE">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label for="doc3">@include('labels.health')</label>
                            </th>
                            <th>
                                <input hidden type="text" name="doc3" id="doc3E">
                                <div id="doc3Div" class="form-group">
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="file" accept=".pdf,.jpg" onchange="validateSize(this)"  class="form-control" name="doc3New" id="doc3NewE">
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

      $(document).on('click', '#updatee', function(data){

        $("#idE").val($(this).data('id'));
        $("#statusE").val($(this).data('status'));
        $("#enameE").val($(this).data('ename'));
        $("#anameE").val($(this).data('aname'));
        $("#genderE").val($(this).data('gender'));
        $("#dobE").val($(this).data('dob'));
        $("#emailE").val($(this).data('email'));
        $("#phoneE").val($(this).data('phone'));
        $("#addressE").val($(this).data('address'));
        $("#ppExpiryE").val($(this).data('ppe'));
        $("#nationE").val($(this).data('nation'));
        $("#ppnoE").val($(this).data('ppno'));
        
        $("#photoE").val($(this).data('photo'));
        $("#passportE").val($(this).data('passport'));
        $("#visaE").val($(this).data('visa'));
        $("#doc1E").val($(this).data('doc1'));
        $("#doc2E").val($(this).data('doc2'));
        $("#doc3E").val($(this).data('doc3'));

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
            $("#doc1Div").append("<p><a target='_blank' href="+$doc1+">Academic Certificates</a>");
            $("#doc2Div").empty();
            $("#doc2Div").append("<p><a target='_blank' href="+$doc2+">Insurance Cover Letter</a>");
            $("#doc3Div").empty();
            $("#doc3Div").append("<p><a target='_blank' href="+$doc3+">Experiance Certificates</a>");
        });
        
        $("#enameNewE").val($(this).data('ename'));
        $("#anameNewE").val($(this).data('aname'));
        $("#genderNewE").val($(this).data('gender'));
        $("#dobNewE").val($(this).data('dob'));
        $("#emailNewE").val($(this).data('email'));
        $("#phoneNewE").val($(this).data('phone'));
        $("#addressNewE").val($(this).data('address'));
        $("#ppeNewE").val($(this).data('ppe'));
        $("#nationNewE").val($(this).data('nation'));
        $("#ppnoNewE").val($(this).data('ppno'));

      })

    </script>
@endpush