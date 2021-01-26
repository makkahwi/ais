<tr>
  <th class="theme-main" style="text-align:center;">@include('labels.day')</th>
  @foreach($times as $time)
    <th style="text-align:center;"><span class="theme-main">{{$time->title}}</span><br>
    <span class="text-danger">{{\Carbon\Carbon::createFromFormat('H:i:s',$time->start)->format('h:i a')}}</span> - <br>
    <span class="text-success">{{\Carbon\Carbon::createFromFormat('H:i:s',$time->end)->format('h:i a')}}</span></th>
  @endforeach
</tr>