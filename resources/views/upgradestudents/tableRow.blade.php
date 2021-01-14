@foreach($classroom->students as $student)
    @if ($student->user->status_id < 3)
        <tr>
            <td>
                <input class="form-control" style="width:100px;" id="studentNo" value="{{ $student->studentNo }}" readonly>
            </td>
            <td class="table-column">{{ $student->user->name }}</td>
            <td>{{ $student->user->contact->gender }}</td>
            @can('updateFinancial', App\Models\student::class)
                <td>
                    <select required class="form-control sponsor" name="sponsor" id="sponsor">
                        @if ($student->sponsor != "Scholarship")
                            <option value="Self-Sponsor" selected>Self-sponser</option>
                            <option value="Scholarship">Scholarship</option>
                        @else
                            <option value="Self-Sponsor">Self-sponser</option>
                            <option value="Scholarship" selected>Scholarship</option>
                        @endif
                    </select>
                    <p id="sponsorUpdateConfirmation"></p>
                </td>
                <td>
                    <select class="form-control discounts" name="discounts" id="discounts" multiple>
                        @foreach($studentsFinancialsDiscounts as $discount)
                            @if ($student->tuitiondiscounts && $student->tuitiondiscounts != "null")
                                @if (array_search($discount->id, json_decode($student->tuitiondiscounts), true))
                                    <option selected value="{{$discount->id}}">{{$discount->title}} | @if($discount->type == "Percentage"){{$discount->amount}}% @else RM{{$discount->amount}} @endif</option>
                                @else
                                    <option value="{{$discount->id}}">{{$discount->title}} | @if($discount->type == "Percentage"){{$discount->amount}}% @else RM{{$discount->amount}} @endif</option>
                                @endif
                            @else
                                <option value="{{$discount->id}}">{{$discount->title}} | @if($discount->type == "Percentage"){{$discount->amount}}% @else RM{{$discount->amount}} @endif</option>
                            @endif
                        @endforeach
                    </select>
                </td>
                <td>
                    <select required class="form-control tuitionfreq" name="tuitionfreq" id="tuitionfreq">
                        @if ($student->tuitionfreq != 1)
                            <option value="1">Monthly</option>
                            <option value="0" selected>Semesterly</option>
                        @else
                            <option value="1" selected>Monthly</option>
                            <option value="0">Semesterly</option>
                        @endif
                    </select>
                    <p id="tuitionfreqUpdateConfirmation"></p>
                </td>
                <td>
                    <select required class="form-control financial" name="financial" id="financial">
                        @if ($student->financial != 1)
                            <option style="color:green;" value="1">Settled مسوّى</option>
                            <option style="color:red;" value="0" selected>Unsettled غير مسوّى</option>
                        @else
                            <option style="color:green;" value="1" selected>Settled مسوّى</option>
                            <option style="color:red;" value="0">Unsettled غير مسوّى</option>
                        @endif
                    </select>
                    <p id="financialUpdateConfirmation"></p>
                </td>
            @endcan
            <td>{{ $student->classroom->title }}</td>
            @can('upgradeStudents', App\Models\student::class)
                <td>
                </td>
                <td>
                    <select required class="form-control classroomId" name="classroom_id" id="classroom_id">
                        @foreach($classroomss as $classroom)
                            @if ($classroom->id ==  $student->classroom_id )
                                <option value="{{$classroom->id}}" selected>{{$classroom->title}}</option>
                            @else
                                <option value="{{$classroom->id}}">{{$classroom->title}}</option>
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
            @endcan
        </tr>
    @endif
@endforeach