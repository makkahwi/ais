<p hidden>{{$c=1}}</p>

@foreach($student->payments as $payment)
    @can('view', [App\Models\studentsPayments::class, $payment])
        <tr>
            <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
            <td>{{ $payment->sem->title }}, {{ $payment->sem->year->title }}</td>
            <td>{{ $payment->date }}</td>
            <td>{{ $payment->studentNo }}</td>
            <td>{{ $due->student->user->name }}</td>
            <td>RM{{ $payment->amount }}</td>
            <td>{{ $payment->method }}</td>

            @can('update', App\Models\studentsPayments::class)
                <td>
                    <div class='btn-group'>

                        <!-- Showing Button-->
                        <button data-toggle="modal" data-target="#show-modal" id="showing" data-sem="{{ $payment->sem->title }}, {{ $payment->sem->year->title }}" data-sno="{{ $payment->studentNo }} {{ $payment->student->user->name }}" data-category="{{ $payment->category->title }}" data-oriamount="RM{{ $payment->category->amount }}" data-discount="@if($payment->discount_id){{ $payment->discount->title }} @else Non @endif" data-discharge="@if($payment->discount_id)@if($payment->discount->type == 'Fixed Amount')RM{{ $payment->discount->amount }}@elseif ($payment->discount->type == 'Percentage'){{ $payment->discount->amount }}%@endif @else 0 @endif" data-final="RM{{ $payment->finalAmount }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

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
        </tr>
    @endcan
@endforeach