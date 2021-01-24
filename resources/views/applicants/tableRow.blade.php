@foreach($applicants as $student)
  @if ($student->user->status_id > 5)  <!-- Not to show soft deleted records ---------------->
    <tr>
      <td>
        <input type="number" class="form-control" id="studentNo" value="{{ $student->studentNo }}" readonly>
        <input type="hidden" class="form-control" id="oldStudentNo" value="{{ $student->studentNo }}" readonly>
        <p id="studentNoUpdateConfirmation"></p>
      </td>
      <td>
        <select required class="form-control statusId" name="status" id="status">
          @foreach($statuses as $status)
          @if ($status->id == $student->user->status_id)
            <option value="{{$status->id}}" selected>{{$status->title}}</option>
          @elseif ($status->id > 1)
            <option value="{{$status->id}}">{{$status->title}}</option>
          @endif
          @endforeach
        </select>
        <p id="statusUpdateConfirmation"></p>
      </td>
      <td class="table-column">{{ $student->eName }}</td>
      <td class="table-column">{{ $student->aName }}</td>
      <td>
        <select required class="form-control levelId" name="level" id="level">
          @foreach($levels as $level)
          @if ($level->id == $student->classroom->level_id)
            <option value="{{$level->id}}" selected>{{$level->title}}</option>
          @else
            <option value="{{$level->id}}">{{$level->title}}</option>
          @endif
          @endforeach
        </select>
        <p id="levelUpdateConfirmation"></p>
      </td>
      <td>
        <select required class="form-control classroomId" name="classroom" id="classroom">
          @foreach($classrooms as $classroom)
          @if ($classroom->id == $student->classroom_id)
            <option value="{{$classroom->id}}" selected>{{$classroom->title}}</option>
          @else
            <option value="{{$classroom->id}}">{{$classroom->title}}</option>
          @endif
          @endforeach
        </select>
        <p id="classroomUpdateConfirmation"></p>
      </td>
      <td>

        <!-- Showing Button-->
        <button data-toggle="modal" data-target="#applicant-show-modal"
        id="showing" data-no="{{$student->studentNo}}"
        data-stat="{{$student->user->status->title}}" data-ename="{{$student->eName}}"
        data-aname="{{$student->aName}}" data-name="{{$student->user->name}}"
        data-email="{{$student->user->contact->email}}"
        data-phone="{{$student->user->contact->phone}}"
        data-address="{{$student->user->contact->address}}"
        data-photo="{{$student->user->contact->photo}}"
        data-passport="{{$student->user->contact->passport}}"
        data-dob="{{ date('d-m-Y', strtotime($student->user->contact->dob)) }}"
        data-gend="{{$student->user->contact->gender}}"
        data-nat="{{$student->user->contact->nation}}"
        data-ppno="{{$student->user->contact->ppno}}"
        data-ppe="{{ date('d-m-Y', strtotime($student->user->contact->ppExpiry)) }}"
        data-ve="{{ date('d-m-Y', strtotime($student->user->contact->visaExpiry)) }}"
        data-level="{{$student->classroom->level->title}}"
        data-class="{{$student->classroom->title}}"
        data-birth="{{$student->user->contact->doc1}}"
        data-school="{{$student->user->contact->doc2}}"
        data-visa="{{$student->user->contact->visa}}"

        data-visarequest="{{$student->visa_id}}" data-transrequest="{{$student->trans}}"

        data-rename="{{$student->user->contact->relative->eName}}"
        data-raname="{{$student->user->contact->relative->aName}}"
        data-rgend="{{$student->user->contact->relative->gender}}"
        data-relation="{{$student->user->contact->relative->relation}}"
        data-job="{{$student->user->contact->relative->job}}"
        data-org="{{$student->user->contact->relative->org}}"
        data-remail="{{$student->user->contact->relative->email}}"
        data-rphone="{{$student->user->contact->relative->phone}}"
        data-rhaddress="{{$student->user->contact->relative->hAddress}}"
        data-rwaddress="{{$student->user->contact->relative->wAddress}}"
        data-rnation="{{$student->user->contact->relative->nation}}"
        data-rppno="{{$student->user->contact->relative->ppno}}"
        data-rppe="{{ date('d-m-Y', strtotime($student->user->contact->relative->ppExpiry)) }}"
        data-rve="{{ date('d-m-Y', strtotime($student->user->contact->relative->visaExpiry)) }}"
        data-rpassport="{{$student->user->contact->relative->passport}}"
        data-rvisa="{{$student->user->contact->relative->visa}}"
        class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

        <button data-toggle="tooltip" title="Student will be emailed once saved" class="btn btn-success btn-xs updateRecord"><i class="fa fa-save"></i> Save</button>
        <p id="updateConfirmation"></p>
      </td>
    </tr>
  @endif

@endforeach