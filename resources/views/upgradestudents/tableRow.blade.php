@foreach($classroom->students as $student)
    @if ($student->user->status_id < 3)
        <tr>
            <td>
                <input type="text" class="form-control" id="studentNo" value="{{ $student->studentNo }}" readonly>
            </td>
            <td class="table-column">{{ $student->user->name }}</td>
            <td>{{ $student->user->contact->gender }}</td>
            <td>
                @if ($student->financial != 1)
                    <select required class="form-control financial" name="financial" id="financial">
                        <option style="color:green;" value="1">Settled مسوّى</option>
                        <option style="color:red;" value="0" selected>Unsettled غير مسوّى</option>
                    </select>
                @else
                    <select required class="form-control financial" name="financial" id="financial">
                        <option style="color:green;" value="1" selected>Settled مسوّى</option>
                        <option style="color:red;" value="0">Unsettled غير مسوّى</option>
                    </select>
                @endif
                <p id="financialUpdateConfirmation"></p>
            </td>
            <td>{{ $student->classroom->title }}</td>
            <td>
                @foreach($currentSem as $sem)
                @foreach($marks as $mark)
                    @if ($mark->studentNo == $student->studentNo )
                    @if ($mark->note == 'Year Result' )
                    @if ($mark->type->sem_id == $sem->id )
                        {{$mark->markValue}}
                    @endif
                    @endif
                    @endif
                @endforeach
                @endforeach
            </td>
            <td>
                <select required class="form-control classroomId" name="classroom_id" id="classroom_id">
                    @foreach($classroomss as $classroomm)
                        @if ($classroomm->id ==  $student->classroom_id )
                            <option value="{{$classroomm->id}}" selected>{{$classroomm->title}}</option>
                        @else
                            <option value="{{$classroomm->id}}">{{$classroomm->title}}</option>
                        @endif
                    @endforeach
                </select>
                <p id="classroomUpdateConfirmation"></p>
            </td>
            <td>
                <select required class="form-control statusId" name="status_id" id="status_id">
                    @foreach($statuses as $status)
                        @if ($status->id == $student->user->status_id)
                            <option value="{{$status->id}}" selected>{{$status->title}}</option>
                        @else
                            <option value="{{$status->id}}">{{$status->title}}</option>
                        @endif
                    @endforeach
                </select>
                <p id="statusUpdateConfirmation"></p>
            </td>
        </tr>
    @endif
@endforeach