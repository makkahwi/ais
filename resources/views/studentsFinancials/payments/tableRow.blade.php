<td>{{ $payment->sem->title }}, {{ $payment->sem->year->title }}</td>
<td>{{ $payment->date->format('d M Y') }}</td>
<td>{{ $payment->studentNo }} {{ $payment->student->user->name }}</td>
<td>RM{{ $payment->amount }}</td>
<td>{{ $payment->method }}</td>
<td>{{ $payment->receipt }}</td>
<td>{{ $payment->receiptNo }}</td>
<td>{{ $payment->note }}</td>

@can('update', App\Models\studentsPayments::class)
    <td>
        <div class='btn-group'>

            <!-- Showing Button-->
            <button data-toggle="modal" data-target="#show-modal" id="showing" data-sem="{{ $payment->sem->title }}, {{ $payment->sem->year->title }}" data-sno="{{ $payment->studentNo }} {{ $payment->student->user->name }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            <!-- Printing Button-->
            <button data-toggle="modal" data-target="#print-modal" id="printing" class='btn btn-success btn-xs'><i class="fas fa-file-invoice-dollar"></i></button>

            <!-- Editing Button-->
            <button data-toggle="modal" id="editing" data-target="#edit-modal" id="editing" data-id="{{ $payment->id }}" data-sem="{{ $payment->sem_id }}" data-sno="{{ $payment->studentNo }}" data-category="{{ $payment->category_id }}" data-discount="{{ $payment->discount_id }}" data-discharge="@if($payment->discount_id){{ $payment->discount->amount }}@endif" data-final="{{ $payment->finalAmount }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                
            @can('delete', App\Models\studentsPayments::class)

                <!-- Deleting Button-->
                <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$payment->id}}" data-title="{{ $payment->studentNo }} {{$payment->student->user->name}} | {{ $payment->category->title }} {{ $payment->finalAmount }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

            @endcan

        </div>
    </td>
@endcan