@foreach($studentVisas as $visa)
  <tr>
    <td>{{ $visa->student->user->name }}</td>
    <td>{{ $visa->fathersPassport }}</td>
    <td>{{ $visa->mothersPassport }}</td>
    <td>{{ $visa->studentsPassport }}</td>
    <td>{{ $visa->note }}</td>
    <td>{{ $visa->status }}</td>
    <td>
      <div class='btn-group'>

        <!-- Showing Button-->
        <button data-toggle="modal" data-target="#show-modal" id="showing"
         data-student="{{ $visa->student->user->name }}" data-fpp="{{ $visa->fathersPassport }}" data-fvisa="{{ $visa->fathersVisas }}" data-vletter="{{ $visa->fathersLetter }}" data-mpp="{{ $visa->mothersPassport }}" data-mvisa="{{ $visa->mothersVisas }}" data-mletter="{{ $visa->mothersLetter }}" data-spp="{{ $visa->studentsPassport }}" data-svisa="{{ $visa->studentsVisas }}" data-embassy="{{ $visa->embassyLetter }}" data-sletter="{{ $visa->schoolLetter }}" data-status="{{ $visa->status }}" data-note="{{ $visa->note }}"
        class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

        @can('update', App\Models\studentVisas::class)
          <!-- Editing Button-->
          <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$visa->id}}" data-student="{{ $visa->studentNo }}" data-fpp="{{ $visa->fathersPassport }}" data-fvisa="{{ $visa->fathersVisas }}" data-vletter="{{ $visa->fathersLetter }}" data-mpp="{{ $visa->mothersPassport }}" data-mvisa="{{ $visa->mothersVisas }}" data-mletter="{{ $visa->mothersLetter }}" data-spp="{{ $visa->studentsPassport }}" data-svisa="{{ $visa->studentsVisas }}" data-embassy="{{ $visa->embassyLetter }}" data-sletter="{{ $visa->schoolLetter }}" data-status="{{ $visa->status }}" data-note="{{ $visa->note }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
        @endcan

        @can('delete', App\Models\studentVisas::class)
          <!-- Deleting Button-->
          <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$visa->id}}" data-title="{{ $visa->student->user->name }} | {{ $visa->studentNo }} Visa" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
        @endcan

      </div>
    </td>
  </tr>
@endforeach