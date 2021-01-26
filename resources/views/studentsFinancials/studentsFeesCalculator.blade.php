<!DOCTYPE html>
<html>
  <head>
    <title>Student Fees Calculation</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">

    <style>
      th{
        text-align:left;
        font-weight: normal;
        line-height: 1.5;
      }
      .sfont{
        font-size:12px;
      }
      table{
        width:100%;
      }
      body{
        padding: 0 3% 3% 3%;
      }
      .texts{
        text-align:justify;
        line-height: 1.5;
      }
    </style>
  </head>

  <body>

    <img style="width:100%;" src="{{asset('img/hlogo.png')}}" alt="">

    <br><hr style="border-color:#004394;"><br>

    <h2 class="text-center" style="color:#004394;">Student Fees Calculation</h2>

    <br><br>

    <table>
      <tr class="sfont">
        <td>Batch: </td>
        <td>{{$batch['batch']}} and above</td>
        <td width="0.5%"></td>
        <td>Level: </td>
        <td>{{$level['title']}}</td>
      </tr>
      <tr class="sfont">
        <td>New Student: </td>
        @if ($newStudent == 1)
          <td>Yes</td>
        @else
          <td>No</td>
        @endif
        <td></td>
        <td>Semester: </td>
        @if ($sem == 1)
          <td>First semester of the academic year</td>
        @else
          <td>Second semester of the academic year</td>
        @endif
      </tr>
    </table>

    <br><br>

    <table class="table table-bordered" width="100%">
      <tr class="text-center">
        <td colspan="2">Fees</td>
        <td colspan="2">Discounts</td>
      </tr>
      <tr class="text-center">
        <td>Title</td>
        <td>Amount<p hidden>{{$feesTotal=0}}</p></td>
        <td>Title</td>
        <td>Amount<p hidden>{{$discountsTotal=0}}</p></td>
      </tr>

      @foreach($feesList as $fee)
        @if ($fee['Title'] == "Tuition Fees")
          <tr>
            <td rowspan="{{count($discountsList)+1}}">{{$fee['Title']}}</td>
            <td rowspan="{{count($discountsList)+1}}">{{$fee['Amount']}}<p hidden>{{$feesTotal+=$fee['Amount']}}</p></td>
            <td colspan="2"></td>
          </tr>
            @foreach($discountsList as $discount)
              <tr>
                <td>{{$discount['Title']}}</td>
                <td>{{$discount['Amount']}}<p hidden>{{$discountsTotal+=$discount['Amount']}}</p></td>
              </tr>
            @endforeach
        @elseif ($fee['Title'] == "Visa Renewal" || $fee['Title'] == "Visa Application")
          @if ($visa)
            <tr>
              <td>{{$fee['Title']}}</td>
              <td>{{$fee['Amount']}}<p hidden>{{$feesTotal+=$fee['Amount']}}</p></td>
              <td></td>
              <td></td>
            </tr>
          @endif
        @else
          <tr>
            <td>{{$fee['Title']}}</td>
            <td>{{$fee['Amount']}}<p hidden>{{$feesTotal+=$fee['Amount']}}</p></td>
            <td></td>
            <td></td>
          </tr>
        @endif
      @endforeach
        <tr class="text-center">
          <td>Total</td>
          <td>{{$feesTotal}}</td>
          <td>Total</td>
          <td>{{$discountsTotal}}</td>
        </tr>
        <tr class="text-center bg-dark text-light">
          <td colspan="2"><h4>Grand Total</h4></td>
          <td colspan="2"><h4>{{$feesTotal - $discountsTotal}}</td>
        </tr>
    </table>

    <br><br>

    <p class="texts"><b>THANK YOU</b><br>Financial Management<br>{{ config('app.sname') }}<br><br><br></p>
    <p class="sfont">Note: This document was automatically generated through {{ config('app.name') }} {{ config('app.url') }}</p>

  </body>
</html>