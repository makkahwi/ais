@component('mail::message')
<img src="{{ asset('img/wLogo.png') }}" alt="" width="100%">

<hr><br>

<h2>This is an email to request GUARDIAN data to be updated, from {{ config('app.name') }}<br></h2>

<table width="100%">
    <tbody>
        <tr>
            <th></th>
            <th>Current Data<br>البيانات الحالية</th>
            <th>New Data<br>البيانات الجديدة</th>
        </tr>
        <tr style="background-color:#004394; color:#ffffff;">
            <th>The data requested to be changed is highlightened with blue background</th>
            <th></th>
            <th>البيانات المطلوب تغييرها هي البيانات المعلمة بالخلفية الزرقاء</th>
        </tr>
        <tr style="background-color:#ffffff; color:#004394;">
            <th>
                @include('labels.sno')
            </th>
            <th colspan="2">
                {{$data['id']}}
            </th>
        </tr>
        @if ($data['ename'] != $data['enameNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.ename')
            </th>
            <th>
                {{$data['ename']}}
            </th>
            <th>
                {{$data['enameNew']}}
            </th>
        </tr>
        @if ($data['aname'] != $data['anameNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.aname')
            </th>
            <th>
                {{$data['aname']}}
            </th>
            <th>
                {{$data['anameNew']}}
            </th>
        </tr>
        @if ($data['gender'] != $data['genderNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.gender')
            </th>
            <th>
                {{$data['gender']}}
            </th>
            <th>
                {{$data['genderNew']}}
            </th>
        </tr>
        @if ($data['relation'] != $data['relationNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.relation')
            </th>
            <th>
                {{$data['relation']}}
            </th>
            <th>
                {{$data['relationNew']}}
            </th>
        </tr>
        @if ($data['job'] != $data['jobNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.job')
            </th>
            <th>
                {{$data['job']}}
            </th>
            <th>
                {{$data['jobNew']}}
            </th>
        </tr>
        @if ($data['org'] != $data['orgNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.org')
            </th>
            <th>
                {{$data['org']}}
            </th>
            <th>
                {{$data['orgNew']}}
            </th>
        </tr>
        @if ($data['email'] != $data['emailNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.email')
            </th>
            <th>
                {{$data['email']}}
            </th>
            <th>
                {{$data['emailNew']}}
            </th>
        </tr>
        @if ($data['phone'] != $data['phoneNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.phone')
            </th>
            <th>
                {{$data['phone']}}
            </th>
            <th>
                {{$data['phoneNew']}}
            </th>
        </tr>
        @if ($data['haddress'] != $data['haddressNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.address')
            </th>
            <th>
                {{$data['haddress']}}
            </th>
            <th>
                {{$data['haddressNew']}}
            </th>
        </tr>
        @if ($data['waddress'] != $data['waddressNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.waddress')
            </th>
            <th>
                {{$data['waddress']}}
            </th>
            <th>
                {{$data['waddressNew']}}
            </th>
        </tr>
        @if ($data['more'] != $data['moreNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.more')
            </th>
            <th>
                {{$data['more']}}
            </th>
            <th>
                {{$data['moreNew']}}
            </th>
        </tr>
        @if ($data['nation'] != $data['nationNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.nation')
            </th>
            <th>
                {{$data['nation']}}
            </th>
            <th>
                {{$data['nationNew']}}
            </th>
        </tr>
        @if ($data['ppno'] != $data['ppnoNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.passno')
            </th>
            <th>
                {{$data['ppno']}}
            </th>
            <th>
                {{$data['ppnoNew']}}
            </th>
        </tr>
        @if ($data['ppExpiry'] != $data['ppExpiryNew'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.ppe')
            </th>
            <th>
                {{$data['ppExpiry']}}
            </th>
            <th>
                {{$data['ppExpiryNew']}}
            </th>
        </tr>
        @if ($data['passport'] != $data['passportNewf'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.pass')
            </th>
            <th>
                <a target="_blank" href="{{config('app.url')}}/{{$data['passport']}}">Passport</a>
                {{$data['passport']}}
            </th>
            <th>
                <a target="_blank" href="{{config('app.url')}}/{{$data['passportNewf']}}">New Passport</a>
                {{$data['passportNewf']}}
            </th>
        </tr>
        @if ($data['visa'] != $data['visaNewf'])
            <tr style="background-color:#004394; color:#ffffff;">
        @else
            <tr style="background-color:#ffffff; color:#004394;">
        @endif
            <th>
                @include('labels.visa')
            </th>
            <th>
                <a target="_blank" href="{{config('app.url')}}/{{$data['visa']}}">Visa</a>
            </th>
            <th>
                <a target="_blank" href="{{config('app.url')}}/{{$data['visaNewf']}}">New Visa</a>
            </th>
        </tr>
    </tbody>
</table>

<br><br>

<p style="text-align: justify;">Thank you for updating you data, soon we'll plug the updates in the system after authenticating<br></p>
{{ config('app.name') }}
@endcomponent