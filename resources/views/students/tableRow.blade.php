<p hidden>{{$c=1}}</p>

@foreach($classroom->students as $student)
    @can('view', [App\Models\student::class, $student])
        <tr>
            <td><b class="theme-main">{{$c++}}</b></td> <!-- List Numbering ---------------->
            <td>{{ $student->studentNo }}</td>
                
            @if($student->user->status_id == 2)
                <td style="color:green;">                    
            @else
                <td style="color:red;"> 
            @endif
                                        
                {{ $student->user->status->title }}</td>

            <td class="table-column">{{ $student->eName }}</td>
            <td class="table-column">{{ $student->aName }}</td>
            @can('viewStudentsContacts', [App\Models\classrooms::class, $classroom])
                <td>{{ $student->user->contact->relative->phone }}</td>
                <td class="table-column">{{ $student->user->contact->relative->hAddress }}</td>
            @endcan

            <td>
                <h5>
                    @if (empty($student->user->contact->photo) || empty($student->user->contact->passport) || empty($student->user->contact->visa) || empty($student->user->contact->doc1) || empty($student->user->contact->doc2))
                        <i class="text-danger fas fa-times-circle"> N</i>
                    @else
                        <i class="text-success fas fa-check-circle"> Y</i>
                    @endif
                </h5>
            </td>

            @can('update', [App\Models\classrooms::class, $classroom])
                <td>
                    <div class='btn-group'>

                        <!-- Showing Button-->
                        <button data-toggle="modal" data-target="#show-big-modal" id="showing" data-no="{{$student->studentNo}}" data-stat="{{$student->user->status->title}}" data-ename="{{$student->eName}}" data-aname="{{$student->aName}}" data-name="{{$student->user->name}}" data-email="{{$student->user->contact->email}}" data-phone="{{$student->user->contact->phone}}" data-address="{{$student->user->contact->address}}" data-photo="{{$student->user->contact->photo}}" data-passport="{{$student->user->contact->passport}}" data-dob="{{ date('d-m-Y', strtotime($student->user->contact->dob)) }}" data-gend="{{$student->user->contact->gender}}" data-nat="{{$student->user->contact->nation}}" data-ppno="{{$student->user->contact->ppno}}" data-ppe="{{ date('d-m-Y', strtotime($student->user->contact->ppExpiry)) }}" data-trans="{{$student->trans}}" data-ve="{{ date('d-m-Y', strtotime($student->user->contact->visaExpiry)) }}" data-leveln="{{$student->classroom->level->description}}" data-class="{{$student->classroom->title}}" data-doc1="{{$student->user->contact->doc1}}" data-school="{{$student->user->contact->doc2}}" data-visa="{{$student->user->contact->visa}}" data-rename="{{$student->user->contact->relative->eName}}" data-raname="{{$student->user->contact->relative->aName}}" data-relation="{{$student->user->contact->relation}}" data-job="{{$student->user->contact->relative->job}}" data-org="{{$student->user->contact->relative->org}}" data-remail="{{$student->user->contact->relative->email}}" data-rphone="{{$student->user->contact->relative->phone}}" data-haddress="{{$student->user->contact->relative->hAddress}}" data-waddress="{{$student->user->contact->relative->wAddress}}" data-more="{{$student->user->contact->relative->more}}" data-rgend="{{$student->user->contact->relative->gender}}" data-rnat="{{$student->user->contact->relative->nation}}" data-rppno="{{$student->user->contact->relative->ppno}}" data-rppe="{{ date('d-m-Y', strtotime($student->user->contact->relative->ppExpiry)) }}" data-rve="{{ date('d-m-Y', strtotime($student->user->contact->relative->visaExpiry)) }}" data-rpassport="{{$student->user->contact->relative->passport}}" data-rvisa="{{$student->user->contact->relative->visa}}" class='btn btn-info btn-xs'><i class="far fa-eye"></i> <i class="fas fa-file-download"></i></button>

                        <!-- Editing Button-->
                        <button data-toggle="modal" id="editing" data-target="#edit-big-modal" id="editing" data-no="{{$student->id}}" data-id="{{$student->studentNo}}" data-stat="{{$student->user->status_id}}" data-ename="{{$student->eName}}" data-aname="{{$student->aName}}" data-name="{{$student->user->name}}" data-email="{{$student->user->contact->email}}" data-phone="{{$student->user->contact->phone}}" data-address="{{$student->user->contact->address}}" data-photo="{{$student->user->contact->photo}}" data-passport="{{$student->user->contact->passport}}" data-dob="{{ date('Y-m-d', strtotime($student->user->contact->dob)) }}" data-gend="{{$student->user->contact->gender}}" data-nat="{{$student->user->contact->nation}}" data-ppno="{{$student->user->contact->ppno}}" data-ppe="{{ date('Y-m-d', strtotime($student->user->contact->ppExpiry)) }}" data-ve="{{ date('Y-m-d', strtotime($student->user->contact->visaExpiry)) }}" data-level="{{$student->classroom->level_id}}" data-class="{{$student->classroom_id}}" data-fin="{{$student->financial}}" data-trans="{{$student->trans}}" data-svisa="{{$student->visa_id}}" data-doc1="{{$student->user->contact->doc1}}" data-school="{{$student->user->contact->doc2}}" data-visa="{{$student->user->contact->visa}}" data-relative="{{$student->user->contact->relative_id}}" data-relation="{{$student->user->contact->relation}}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
                            
                        @can('delete', App\Models\student::class)

                            <!-- Deleting Button-->
                            <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$student->id}}" data-title="{{$student->eName}} {{$student->aName}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                        @endcan

                    </div>
                </td>
            @endcan
        </tr>
    @endcan
@endforeach