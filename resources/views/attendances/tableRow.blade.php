<tr>
    <td>{{ $attendance->sem->title }}, {{ $attendance->sem->year->title }}</td>
    <td>{{ $attendance->schoolNo }} | {{ $attendance->user->name }}</td>
    <td class="table-column">{{ date("Y-m-d", strtotime($attendance->date)) }}</td>

    @if ($attendance->attendance == 2)
        <td style="background-color:green; color:white;">
        Attended حاضر <span hidden>{{$count2++}}</span>
    @elseif ($attendance->attendance == 1)
        <td style="background-color:yellow;">
        Late متأخر <span hidden>{{$count1++}}</span>
    @else
        <td style="background-color:red; color:white;">
        Absent غائب <span hidden>{{$count0++}}</span>
    @endif
    </td>

    <td class="table-column">{{ $attendance->note }}</td>
    <td>
        <div class='btn-group'>

            <!-- Showing Button-->
            <button data-toggle="modal" data-target="#show-modal" id="showing" data-sem="{{ $attendance->sem->title }}, {{ $attendance->sem->year->title }}" data-student="{{ $attendance->schoolNo }} | {{ $attendance->user->name }}" data-date="{{ date('d-m-Y', strtotime($attendance->date)) }}" data-atten="{{ $attendance->attendance }}" data-note="{{ $attendance->note }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            <!-- Editing Button-->
            @can('update', App\Models\attendances::class)
                <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$attendance->id}}" data-sem="{{ $attendance->sem_id }}" data-student="{{ $attendance->schoolNo }}" data-date="{{ date('Y-m-d', strtotime($attendance->date)) }}" data-atten="{{ $attendance->attendance }}" data-note="{{ $attendance->note }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
            @endcan

            @can('delete', App\Models\attendances::class)

                <!-- Deleting Button-->
                <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$attendance->id}}" data-title="{{ $attendance->schoolNo }} {{ $attendance->user->name }}  {{ date('d-m-Y', strtotime($attendance->date)) }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

            @endcan

        </div>
    </td>
</tr>