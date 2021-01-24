@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an evaluation of {{ config('app.name') }}</h2>

<h3>From: {{$data['email']}}</h3>

<table>
  <tr>
    <td><p>Outlook: <b>{{$data['outlook']}}</b></p></td>
    <td><p>Efficiency: <b>{{$data['efficiency']}}</b></p></td>
  </tr>
  <tr>
    <td><p>Accuracy: <b>{{$data['accuracy']}}</b></p></td>
    <td><p>Speed: <b>{{$data['speed']}}</b></p></td>
  </tr>
  <tr>
    <td colspan=2><p>Comment: <b>{{$data['comment']}}</b></p></td>
  </tr>
</table>

<br><br>

That's All,<br>
{{ config('app.name') }}
@endcomponent