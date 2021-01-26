<tr>
  <td>{{ $exam->course->level->title }}</td>
  <td>{{ $exam->course->title }}</td>
  <td>{{ $exam->title }}</td>
  <td class="table-column">{{ date("d-m-Y", strtotime($exam->date)) }}</td>
  <td class="table-column">{{ $exam->note }}</td>
  <td>
    <div class='btn-group'>

      <!-- Showing Button-->
      <button data-toggle="modal" data-target="#show-modal" id="showing" data-sem="{{ $exam->sem->title }}, {{ $exam->sem->year->title }}" data-level="{{ $exam->course->level->title }}" data-course="{{ $exam->course->title }}" data-type="{{ $exam->title }}" data-date="{{ date('d-m-Y', strtotime($exam->date)) }}" data-note="{{ $exam->note }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

      @can('update', App\Models\exams::class)
        <!-- Editing Button-->
        <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$exam->id}}" data-sem="{{ $exam->sem_id }}" data-level="{{ $exam->course->level_id }}" data-course="{{ $exam->course_id }}" data-type="{{ $exam->title }}" data-date="{{ date('Y-m-d', strtotime($exam->date)) }}" data-note="{{ $exam->note }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
      @endcan

      @can('delete', App\Models\exams::class)
        <!-- Deleting Button-->
        <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$exam->id}}" data-title="{{$exam->level->title}} | {{ $exam->course->code }} {{ $exam->course->title }} | {{ $exam->title }}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
      @endcan

    </div>
  </td>
</tr>