<p hidden>{{$c=1}}</p>

@foreach($student->financials as $finance)
    @can('view', [App\Models\studentsFinancials::class, $finance])
        <tr>
            <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
            <td>{{ $finance->sem->title }}, {{ $finance->sem->year->title }}</td>
            <td>{{ $finance->studentNo }}</td>
            <td>{{ $finance->student->user->name }}</td>
            <td>{{ $finance->category->title }}</td>
            <td>RM{{ $finance->category->amount }}</td>

            @if($finance->discount_id)
                <td>{{ $finance->discount->title }}</td>

                @if($finance->discount->type == 'Fixed Amount')
                    <td>RM{{ $finance->discount->amount }}</td>
                @elseif ($finance->discount->type == 'Percentage')
                    <td>{{ $finance->discount->amount }}%</td>
                @endif

            @else
                <td>Non</td>
                <td>0</td>
            @endif

            <td>RM{{ $finance->finalAmount }}</td>

            @can('update', App\Models\studentsFinancials::class)
                <td>
                    <div class='btn-group'>

                        <!-- Showing Button-->
                        <button data-toggle="modal" data-target="#show-modal" id="showing" data-sem="{{ $finance->sem->title }}, {{ $finance->sem->year->title }}" data-sno="{{ $finance->studentNo }} {{ $finance->student->user->name }}" data-category="{{ $finance->category->title }}" data-oriamount="RM{{ $finance->category->amount }}" data-discount="@if($finance->discount_id){{ $finance->discount->title }} @else Non @endif" data-discharge="@if($finance->discount_id)@if($finance->discount->type == 'Fixed Amount')RM{{ $finance->discount->amount }}@elseif ($finance->discount->type == 'Percentage'){{ $finance->discount->amount }}%@endif @else 0 @endif" data-final="RM{{ $finance->finalAmount }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

                        <!-- Printing Button-->
                        <button data-toggle="modal" data-target="#print-modal" id="printing" class='btn btn-success btn-xs'><i class="fas fa-file-invoice-dollar"></i></button>

                        <!-- Editing Button-->
                        <button data-toggle="modal" id="editing" data-target="#edit-modal" id="editing" data-id="{{ $finance->id }}" data-sem="{{ $finance->sem_id }}" data-sno="{{ $finance->studentNo }}" data-category="{{ $finance->category_id }}" data-discount="{{ $finance->discount_id }}" data-discharge="@if($finance->discount_id){{ $finance->discount->amount }}@endif" data-final="{{ $finance->finalAmount }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                            
                        @can('delete', App\Models\student::class)

                            <!-- Deleting Button-->
                            <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$finance->id}}" data-title="{{ $finance->studentNo }} {{$finance->student->user->name}} | {{ $finance->category->title }} {{ $finance->finalAmount }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                        @endcan

                    </div>
                </td>
            @endcan
        </tr>
    @endcan
@endforeach