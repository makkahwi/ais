<p hidden>{{$c=1}}</p>

@foreach($studentsFinancialsDiscounts as $discount)
    @can('view', [App\Models\studentsFinancialsDiscounts::class, $discount])
        <tr>
            <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
            <td>{{ $discount->type }}</td>
            <td>{{ $discount->title }}</td>
            <td>{{ $discount->amount }}</td>

            @can('update', [App\Models\studentsFinancialsDiscounts::class, $discount])
                <td>
                    <div class='btn-group'>

                        <!-- Showing Button-->
                        <button data-toggle="modal" data-target="#show-modal" id="showing" data-type="{{ $discount->type }}" data-title="{{ $discount->title }}" data-amount="{{ $discount->amount }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

                        <!-- Editing Button-->
                        <button data-toggle="modal" id="editing" data-target="#edit-modal" id="editing" data-id="{{ $discount->id }}" data-type="{{ $discount->type }}" data-title="{{ $discount->title }}" data-amount="{{ $discount->amount }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                            
                        @can('delete', App\Models\student::class)

                            <!-- Deleting Button-->
                            <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$discount->id}}" data-title="{{$discount->type}} | {{ $discount->title }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                        @endcan

                    </div>
                </td>
            @endcan
        </tr>
    @endcan
@endforeach