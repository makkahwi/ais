@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an email to request STAFF OR STUDENT data to be updated, from {{ config('app.name') }}<br></h2>

<table width="100%">
  <tbody>
    <tr>
      <td></td>
      <td>Current Data<br>البيانات الحالية</td>
      <td>New Data<br>البيانات الجديدة</td>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
      <td>The data requested to be changed is highlightened with blue background</td>
      <td></td>
      <td>البيانات المطلوب تغييرها هي البيانات المعلمة بالخلفية الزرقاء</td>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
      <td>
        @include('labels.sno')
      </td>
      <td colspan="2">
        {{$data['id']}}
      </td>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
      <td>
        @include('labels.level')
      </td>
      <td colspan="2">
        {{$data['level']}}
      </td>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
      <td>
        @include('labels.classroom')
      </td>
      <td colspan="2">
        {{$data['classroom']}}
      </td>
    </tr>
    @if ($data['ename'] != $data['enameNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.ename')
      </td>
      <td>
        {{$data['ename']}}
      </td>
      <td>
        {{$data['enameNew']}}
      </td>
    </tr>
    @if ($data['aname'] != $data['anameNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.aname')
      </td>
      <td>
        {{$data['aname']}}
      </td>
      <td>
        {{$data['anameNew']}}
      </td>
    </tr>
    @if ($data['gender'] != $data['genderNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.gender')
      </td>
      <td>
        {{$data['gender']}}
      </td>
      <td>
        {{$data['genderNew']}}
      </td>
    </tr>
    @if ($data['dob'] != $data['dobNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.dob')
      </td>
      <td>
        {{$data['dob']}}
      </td>
      <td>
        {{$data['dobNew']}}
      </td>
    </tr>
    @if ($data['email'] != $data['emailNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.email')
      </td>
      <td>
        {{$data['email']}}
      </td>
      <td>
        {{$data['emailNew']}}
      </td>
    </tr>
    @if ($data['phone'] != $data['phoneNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.phone')
      </td>
      <td>
        {{$data['phone']}}
      </td>
      <td>
        {{$data['phoneNew']}}
      </td>
    </tr>
    @if ($data['address'] != $data['addressNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.address')
      </td>
      <td>
        {{$data['address']}}
      </td>
      <td>
        {{$data['addressNew']}}
      </td>
    </tr>
    @if ($data['nation'] != $data['nationNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.nation')
      </td>
      <td>
        {{$data['nation']}}
      </td>
      <td>
        {{$data['nationNew']}}
      </td>
    </tr>
    @if ($data['ppno'] != $data['ppnoNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.passno')
      </td>
      <td>
        {{$data['ppno']}}
      </td>
      <td>
        {{$data['ppnoNew']}}
      </td>
    </tr>
    @if ($data['ppExpiry'] != $data['ppExpiryNew'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.ppe')
      </td>
      <td>
        {{$data['ppExpiry']}}
      </td>
      <td>
        {{$data['ppExpiryNew']}}
      </td>
    </tr>
    @if ($data['photo'] != $data['photoNewf'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.photo')
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['photo']}}">Photo</a>
        {{$data['photo']}}
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['photoNewf']}}">New Photo</a>
        {{$data['photoNewf']}}
      </td>
    </tr>
    @if ($data['passport'] != $data['passportNewf'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.pass')
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['passport']}}">Passport</a>
        {{$data['passport']}}
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['passportNewf']}}">New Passport</a>
        {{$data['passportNewf']}}
      </td>
    </tr>
    @if ($data['visa'] != $data['visaNewf'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        @include('labels.visa')
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['visa']}}">Visa</a>
        {{$data['visa']}}
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['visaNewf']}}">New Visa</a>
        {{$data['visaNewf']}}
      </td>
    </tr>
    @if ($data['doc1'] != $data['doc1Newf'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
      Document 1
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['doc1']}}">Doc 1</a>
        {{$data['doc1']}}
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['doc1Newf']}}">New Doc 1</a>
        {{$data['doc1Newf']}}
      </td>
    </tr>
    @if ($data['doc2'] != $data['doc2Newf'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        Document 2
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['doc2']}}">Doc 2</a>
        {{$data['doc2']}}
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['doc2Newf']}}">New Doc 2</a>
        {{$data['doc2Newf']}}
      </td>
    </tr>
    @if ($data['doc3'] != $data['doc3Newf'])
      <tr style="background-color:#004394; color:#ffffff;">
    @else
      <tr style="background-color:#ffffff; color:#004394;">
    @endif
      <td>
        Document 3
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['doc3']}}">Doc 3</a>
        {{$data['doc3']}}
      </td>
      <td>
        <a target="_blank" href="{{config('app.url')}}/{{$data['doc3Newf']}}">New Doc 3</a>
        {{$data['doc3Newf']}}
      </td>
    </tr>
  </tbody>
</table>

<br><br>

<p style="text-align: justify;">Thank you for updating you data, soon we'll plug the updates in the system after authenticating<br></p>
{{ config('app.name') }}
@endcomponent