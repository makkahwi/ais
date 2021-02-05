@component('mail::message')
<a target="_blank" href="{{config('app.url')}}"><img src="{{ asset('img/wLogo.png') }}" alt="" width="100%"></a>

<hr><br>

<h2>This is an email to request GUARDIAN data to be updated, from {{ config('app.name') }}<br></h2>

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
  @if ($data['relation'] != $data['relationNew'])
    <tr style="background-color:#004394; color:#ffffff;">
  @else
    <tr style="background-color:#ffffff; color:#004394;">
  @endif
    <td>
    @include('labels.relation')
    </td>
    <td>
    {{$data['relation']}}
    </td>
    <td>
    {{$data['relationNew']}}
    </td>
  </tr>
  @if ($data['job'] != $data['jobNew'])
    <tr style="background-color:#004394; color:#ffffff;">
  @else
    <tr style="background-color:#ffffff; color:#004394;">
  @endif
    <td>
    @include('labels.job')
    </td>
    <td>
    {{$data['job']}}
    </td>
    <td>
    {{$data['jobNew']}}
    </td>
  </tr>
  @if ($data['org'] != $data['orgNew'])
    <tr style="background-color:#004394; color:#ffffff;">
  @else
    <tr style="background-color:#ffffff; color:#004394;">
  @endif
    <td>
    @include('labels.org')
    </td>
    <td>
    {{$data['org']}}
    </td>
    <td>
    {{$data['orgNew']}}
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
  @if ($data['haddress'] != $data['haddressNew'])
    <tr style="background-color:#004394; color:#ffffff;">
  @else
    <tr style="background-color:#ffffff; color:#004394;">
  @endif
    <td>
    @include('labels.address')
    </td>
    <td>
    {{$data['haddress']}}
    </td>
    <td>
    {{$data['haddressNew']}}
    </td>
  </tr>
  @if ($data['waddress'] != $data['waddressNew'])
    <tr style="background-color:#004394; color:#ffffff;">
  @else
    <tr style="background-color:#ffffff; color:#004394;">
  @endif
    <td>
    @include('labels.waddress')
    </td>
    <td>
    {{$data['waddress']}}
    </td>
    <td>
    {{$data['waddressNew']}}
    </td>
  </tr>
  @if ($data['more'] != $data['moreNew'])
    <tr style="background-color:#004394; color:#ffffff;">
  @else
    <tr style="background-color:#ffffff; color:#004394;">
  @endif
    <td>
    @include('labels.more')
    </td>
    <td>
    {{$data['more']}}
    </td>
    <td>
    {{$data['moreNew']}}
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
    </td>
    <td>
    <a target="_blank" href="{{config('app.url')}}/{{$data['visaNewf']}}">New Visa</a>
    </td>
  </tr>
  </tbody>
</table>

<br><br>

<p class="text-justify">Thank you for updating you data, soon we'll plug the updates in the system after authenticating<br></p>
{{ config('app.name') }}
@endcomponent