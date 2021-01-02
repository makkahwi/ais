<td>{{ $due->sem->title }}, {{ $due->sem->year->title }}</td>
<td>{{ $due->studentNo }}</td>
<td>{{ $due->student->user->name }}</td>
<td>{{ $due->category->title }}</td>
<td>RM{{ $due->category->amount }}</td>

@if($due->discount_id)
    <td>{{ $due->discount->title }}</td>

    @if($due->discount->type == 'Fixed Amount')
        <td>RM{{ $due->discount->amount }}</td>
    @elseif ($due->discount->type == 'Percentage')
        <td>{{ $due->discount->amount }}%</td>
    @endif

@else
    <td>-</td>
    <td>0</td>
@endif

<td>RM{{ $due->finalAmount }}</td>

@can('update', App\Models\studentsFinancials::class)
    <td>
        <div class='btn-group'>

            <!-- Showing Button-->
            <button data-toggle="modal" data-target="#show-big-modal" id="show" data-sem="{{ $due->sem->title }}, {{ $due->sem->year->title }}" data-sno="{{ $due->studentNo }} {{ $due->student->user->name }}" data-category="{{ $due->category->title }}" data-oriamount="RM{{ $due->category->amount }}" data-discount="@if($due->discount_id){{ $due->discount->title }} @else - @endif" data-discharge="@if($due->discount_id)@if($due->discount->type == 'Fixed Amount')RM{{ $due->discount->amount }}@elseif ($due->discount->type == 'Percentage'){{ $due->discount->amount }}%@endif @else 0 @endif" data-final="RM{{ $due->finalAmount }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            <!-- Editing Button-->
            <button data-toggle="modal" data-target="#edit-big-modal" id="edit" data-id="{{ $due->id }}" data-sem="{{ $due->sem_id }}" data-sno="{{ $due->studentNo }}" data-category="{{ $due->category_id }}" data-discount="{{ $due->discount_id }}" data-discharge="@if($due->discount_id){{ $due->discount->amount }}@endif" data-final="{{ $due->finalAmount }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                
            @can('delete', App\Models\studentsFinancials::class)

                <!-- Deleting Button-->
                <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$due->id}}" data-title="{{ $due->studentNo }} {{$due->student->user->name}} | {{ $due->category->title }} {{ $due->finalAmount }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

            @endcan

        </div>
    </td>
@endcan