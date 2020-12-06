@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an appeal about a mark from {{ config('app.name') }}<br></h2>

<table>
    <tr>
        <th>
            <p>Student No: <b>{{$data['studentNo']}}</b></p>
        </th>
        <th width=10%></th>
        <th>
            <p>Name: <b>{{$data['studentName']}}</b></p>
        </th>
    </tr>
    <tr>
        <th>
            <p>Classroom: <b>{{$data['classroom_id']}}</b></p>
        </th>
        <th></th>
        <th>
            <p>Semester: <b>{{$data['sem_id']}}</b></p>
        </th>
    </tr>
    <tr>
        <th>
            <p>Course: <b>{{$data['course_id']}}</b></p>
        </th>
        <th></th>
        <th>
            <p>Mark: <b>{{$data['markValue']}}/{{$data['max']}}</b></p>
        </th>
    </tr>
    <tr>
        <th colspan=3>
            <p>Teacher Note: <b>{{$data['note']}}</b></p>
        </th>
    </tr>
    <tr>
        <th colspan=3>
            <p>Parent Appeal: <b>{{$data['complain']}}</b></p>
        </th>
    </tr>
</table>

<br><br>

That's All,<br>
{{ config('app.name') }}
@endcomponent