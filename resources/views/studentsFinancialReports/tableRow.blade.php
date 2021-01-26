<p hidden>{{$c=1}}</p>

@foreach($levels as $level)
  @foreach($level->classrooms as $classroom)
    @foreach($classroom->students as $student)
      @foreach($student->dues as $due)
        <tr class="text-danger">
          <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
          <td>{{$due->sem->title}}, {{$due->sem->year->title}}</td>
          <td>Due مستحق</td>
          <td>{{$level->title}}</td>
          <td>{{$classroom->title}}</td>
          <td>{{$student->studentNo}} | {{$student->user->name}}</td>
          <td>{{$due->category->title}}</td>
          <td>RM{{$due->category->amount}}</td>
          @if ($due->discount)
            <td>{{$due->discount->title}}</td>
            <td>RM{{$due->discount->amount}}</td>
          @else
            <td>-</td>
            <td>-</td>
          @endif
          <td>RM{{$due->finalAmount}}</td>
          <td>{{$due->created_at->format('Y-m-d')}}</td>
        </tr>
      @endforeach
      @foreach($student->payments as $payment)
        <tr class="text-success">
          <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
          <td>{{$payment->sem->title}}, {{$payment->sem->year->title}}</td>
          <td>Payment مدفوع</td>
          <td>{{$level->title}}</td>
          <td>{{$classroom->title}}</td>
          <td>{{$student->studentNo}} | {{$student->user->name}}</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>RM{{$payment->amount}}</td>
          <td>{{$payment->created_at->format('Y-m-d')}}</td>
        </tr>
      @endforeach
    @endforeach
  @endforeach
@endforeach