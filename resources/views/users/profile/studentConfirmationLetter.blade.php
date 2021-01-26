<!DOCTYPE html>
<html>
  <head>
    <title>{{$schoolNo}} - Student Confirmation Letter</title>

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

    <table>
      <tr class="sfont">
        <td>Referance: </td>
        <td>{{$ref}}</td>
        <td colspan="3"></td>
        <td>Date: </td>
        <td>{{today()->format('d M Y')}}</td>
      </tr>

      <tr>
        <th colspan="7">
          <br><br>

          <h4>TO WHOM IT MAY CONCERN</h4>

          <P>Dear Sir/Madam,</P>

          <br>
        </th>
      </tr>

      <tr>
        <td width="15%">Name: </td>
        <td width="45%"><b>{{$eName}}</b></td>
        <td colspan=3 class="seperator"></td>
        <td width="18%">Nationality: </td>
        <td><b>{{$nation}}</b></td>
      </tr>

      <tr>
        <td>Student No: </td>
        <td><b>{{$schoolNo}}</b></td>
        <td colspan=3></td>
        <td>IC / Passport No: </td>
        <td><b>{{$passno}}</b></td>
      </tr>

      <tr>
        <td>Level of Study: </td>
        <td><b>{{$title}}</b></td>
        <td colspan=3></td>
        <td>Date of Birth: </td>
        <td><b>{{date("d-m-Y", strtotime($dob))}}</b></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td colspan=3></td>
        <td>Gender: </td>
        <td><b>{{$ggender}}</b></td>
      </tr>
    </table>

    <br><br>

    <p class="texts">This is to certify that the above-named is a student of {{ config('app.sname') }}. Currently, she/he is registered in {{$sem}}, {{$year}} academic session which commenced on {{date("d-m-Y", strtotime($start))}} and will finish on {{date("d-m-Y", strtotime($end))}}.<br><br>The school use both English & Arabic languages as the medium of instruction. It will be very much appreciated if you could render any assistance that she/he may require. Should you need any further information, please email your enquiry to: principal@aqsa.edu.my.</p>

    <br><br><br>

    <p class="texts"><b>THANK YOU</b><br>Academic Management & Admission<br>{{ config('app.sname') }}<br><br><br></p>
    <p class="sfont">Note: This document was automatically generated through {{ config('app.name') }} https://students.aqsa.edu.my. Kindly refer to school academic management & admission for certifying the letter.</p>

  </body>
</html>