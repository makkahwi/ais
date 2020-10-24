@component('mail::message')
<img src="{{ asset('img/wLogo.png') }}" alt="" width="100%">

<hr><br>

<h2>This is an evaluation of {{ config('app.name') }}</h2>

<h3>From: {{$data['email']}}</h3>

<table>
    <tr>
        <th><p>Outlook: <b>{{$data['outlook']}}</b></p></th>
        <th><p>Efficiency: <b>{{$data['efficiency']}}</b></p></th>
    </tr>
    <tr>
        <th><p>Accuracy: <b>{{$data['accuracy']}}</b></p></th>
        <th><p>Speed: <b>{{$data['speed']}}</b></p></th>
    </tr>
    <tr>
        <th colspan=2><p>Comment: <b>{{$data['comment']}}</b></p></th>
    </tr>
</table>

<br><br>

That's All,<br>
{{ config('app.name') }}
@endcomponent