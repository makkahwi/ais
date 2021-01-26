<td>{{ $payment->sem->title }}, {{ $payment->sem->year->title }}</td>
<td>{{ $payment->date->format('d M Y') }}</td>
<td>{{ $payment->studentNo }} {{ $payment->student->user->name }}</td>
<td>RM{{ $payment->amount }}</td>
<td>{{ $payment->method }}</td>
<td>{{ $payment->receiptNo }}</td>
<td>{{ $payment->note }}</td>
<td>
  <div class='btn-group'>

    <!-- Showing Button-->
    <button data-toggle="modal" data-target="#show-modal" id="showing" data-sem="{{ $payment->sem->title }}, {{ $payment->sem->year->title }}" data-date="{{ $payment->date->format('d M Y') }}" data-student="{{ $payment->studentNo }} {{ $payment->student->user->name }}" data-amount="RM{{$payment->amount}}" data-method="{{$payment->method}}" data-receiptno="{{$payment->receiptNo}}" data-note="{{$payment->note}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>


    @can('update', App\Models\studentsPayments::class)
      <!-- Download Receipt Button-->
      <a href="{{$payment->receipt}}" download class='btn btn-success btn-xs'><i class="fas fa-file-invoice-dollar"></i></a>

      <!-- Editing Button-->
      <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{ $payment->id }}" data-sem="{{ $payment->sem_id }}" data-date="{{ $payment->date->format('Y-m-d') }}" data-student="{{ $payment->studentNo }}" data-amount="{{$payment->amount}}" data-method="{{$payment->method}}" data-receiptno="{{$payment->receiptNo}}" data-note="{{$payment->note}}" data-receipt="{{$payment->receipt}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
    @endcan

    @can('delete', App\Models\studentsPayments::class)
      <!-- Deleting Button-->
      <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$payment->id}}" data-title="{{ $payment->studentNo }} {{$payment->student->user->name}} | {{ $payment->title }} {{ $payment->amount }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
    @endcan

  </div>
</td>