<!DOCTYPE html>
<html>
  <head>
    <title>{{$studentNo}} Student Payment Receipt</title>

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
      .seperator{
        width:5%;
      }
      body{
        padding: 0 3% 3% 3%;
        /* background-image: url('{{asset("img/letterbg.png")}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;*/
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

    <h2 class="text-center" style="color:#004394;">Student Payment Receipt</h2>

    <br><br>

    <table>
      <tr class="sfont">
        <td>Referance: </td>
        <td>{{$ref}}</td>
        <td width="30%"></td>
        <td>Date: </td>
        <td>{{today()->format('d M Y')}}</td>
      </tr>
    </table>

    <br><br>

    <h4 class="text-justify" style="line-height: 1.5;">We received <span style="font-size: 1.75rem;">RM{{$amount}}</span> on behalf of student <span style="font-size: 1.75rem;">{{$studentNo}} {{$name}}</span> in <span style="font-size: 1.75rem;">{{$method}}</span> as settlement of dues / fees required to be paid.</h4>
    @if ($receiptNo)
      <h5><br>Referenace No of {{$method}}: {{$receiptNo}}
    @endif

    @if ($note)
      <h5><br>Note of payment: {{$note}}</h5>
    @endif
    <br><br>

    <p class="texts"><b>THANK YOU</b><br>Financial Management<br>{{ config('app.sname') }}<br><br><br></p>
    <p class="sfont">Note: This document was automatically generated through {{ config('app.name') }} {{ config('app.url') }}</p>

  </body>
</html>