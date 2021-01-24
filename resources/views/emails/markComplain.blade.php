@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an appeal about a mark from {{ config('app.name') }}<br></h2>

<table>
  <tr>
    <td>
      <p>Student No: <b>{{$data['studentNo']}}</b></p>
    </td>
    <td width=10%></td>
    <td>
      <p>Name: <b>{{$data['studentName']}}</b></p>
    </td>
  </tr>
  <tr>
    <td>
      <p>Classroom: <b>{{$data['classroom_id']}}</b></p>
    </td>
    <td></td>
    <td>
      <p>Semester: <b>{{$data['sem_id']}}</b></p>
    </td>
  </tr>
  <tr>
    <td>
      <p>Course: <b>{{$data['course_id']}}</b></p>
    </td>
    <td></td>
    <td>
      <p>Mark: <b>{{$data['markValue']}}/{{$data['max']}}</b></p>
    </td>
  </tr>
  <tr>
    <td colspan=3>
      <p>Teacher Note: <b>{{$data['note']}}</b></p>
    </td>
  </tr>
  <tr>
    <td colspan=3>
      <p>Parent Appeal: <b>{{$data['complain']}}</b></p>
    </td>
  </tr>
</table>

<br><br>

That's All,<br>
{{ config('app.name') }}
@endcomponent