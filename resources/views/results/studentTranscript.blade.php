<!DOCTYPE html>
<html>
  <head>
    <title>{{$student->schoolNo}} - Student Transcript</title>

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

    <br><hr style="border-color:#004394;">

    <table>
      <tbody>
        <tr class="sfont">
          <td colspan="4"></td>
          <td>Date: {{today()->format('d M Y')}}</td>
        </tr>

        <tr>
          <td colspan="5">
            <h3 class="text-center">Student Transcript<br><br></h3>
          </td>
        </tr>

        <tr>
          <td>Name: <br><br></td>
          <td colspan="4">{{$student->eName}}<br><br></td>
        </tr>

        <tr>
          <td>Semeter: </td>
          <td>{{$semester}}</td>
          <td></td>
          <td>Study Level: </td>
          <td>{{$student->classroom->level->title}}</td>
        </tr>
      </tbody>
    </table>

    <br><br>
    
    <table class="table" width="100%">
      <thead class="thead-dark">
        <tr>
          <th>Subject</th>
          
        	@if($student->classroom->level_id > 3 && $student->classroom->level_id != 13)
            <th>Max. Mark</th>
            <th>Min. Mark</th>
            <th>Mark</th>
        	@endif

          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <p hidden>{{$total = 0}}</p>
        @foreach($marks as $mark)
          @if($mark->type->title != 'Semester Final Result')
            <tr>
              <td>{{$mark->type->course->title}}</td>

            	@if($student->classroom->level_id > 3 && $student->classroom->level_id != 13)
                <td>100</td>
                <td>50</td>
                <td>{{$mark->markValue}}<p hidden>{{$total += $mark->markValue}}</p></td>
            	@endif

              <td>{{$mark->note}}</td>
            </tr>
          @endif
        @endforeach
      </tbody>

      <tfoot class="thead-dark">
        @foreach($marks as $mark)
          @if($mark->type->title == 'Semester Final Result')
          
            @if($student->classroom->level_id > 3 && $student->classroom->level_id != 13)
              <tr>
                <td><b>Total</b></td>
                <td><b>{{100 * (count($marks)-1)}}</b></td>
                <td><b>{{50 * (count($marks)-1)}}</b></td>
                <td><b>{{$total}}</b></td>
                <td></td>
              </tr>
            @endif

            <tr>
              <td><b>Average</b></td>
              @if($student->classroom->level_id > 3 && $student->classroom->level_id != 13)
                <td></td>
                <td></td>
                <td>
                  <b>{{$mark->markValue}}</b>
                @endif
              </td>
              <td><b>{{$mark->note}}</b></td>
            </tr>
            @break
          @endif
        @endforeach
      </tfoot>
    </table>

    <br><br>

    <p class="texts">Academic Management & Admission<br>{{ config('app.sname') }}<br><br><br></p>
    <p class="sfont">Note: This document was automatically generated through {{ config('app.name') }} https://students.aqsa.edu.my. Kindly refer to school academic management & admission to certify.</p>

  </body>
</html>