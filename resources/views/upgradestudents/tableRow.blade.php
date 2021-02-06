@foreach($classroom->students as $student)
  @if ($student->user->status_id < 3)
    <tr>
      <td>
        <input class="form-control" style="width:100px;" id="studentNo" value="{{ $student->studentNo }}" readonly>
      </td>
      <td class="table-column">{{ $student->user->name }}</td>
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
          @foreach($student->gradntedDiscounts as $gdiscount)
            <input class="form-check-input gradntedDiscounts" type="checkbox" name="gradntedDiscounts[]" checked value="{{$gdiscount->id}}"> {{$gdiscount->title}} | @if($gdiscount->type == "Percentage"){{$gdiscount->amount}}% @else RM{{$gdiscount->amount}} @endif<br>
          @endforeach
          
          @foreach($studentsFinancialsDiscounts as $discount)
            @if (!empty($student->gradntedDiscounts))
              @if(!$student->gradntedDiscounts->contains($discount))
                <input class="form-check-input gradntedDiscounts" type="checkbox" name="gradntedDiscounts[]" value="{{$discount->id}}"> {{$discount->title}} | @if($discount->type == "Percentage"){{$discount->amount}}% @else RM{{$discount->amount}} @endif<br>
              @endif
            @else
              <input class="form-check-input gradntedDiscounts" type="checkbox" name="gradntedDiscounts[]" value="{{$discount->id}}"> {{$discount->title}} | @if($discount->type == "Percentage"){{$discount->amount}}% @else RM{{$discount->amount}} @endif<br>
            @endif
          @endforeach
          <p id="gradntedDiscountsUpdateConfirmation"></p>
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
      @endcan
      @can('blockData', App\Models\student::class)
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
      <td>{{ $classroom->title }}</td>
      @can('upgradeStudents', App\Models\student::class)
        <td>
          <select required class="form-control classroomId" name="classroom_id" id="classroom_id">
            @foreach($classroomss as $class)
              @if ($class->id ==  $student->classroom_id )
                <option value="{{$class->id}}" selected>{{$class->title}}</option>
              @else
                <option value="{{$class->id}}">{{$class->title}}</option>
              @endif
            @endforeach
          </select>
          <p id="classroomUpdateConfirmation"></p>
        </td>
        <td>
          @foreach($student->exceptedCourses as $ecourse)
            <input class="form-check-input exceptedCourses" type="checkbox" name="exceptedCourses[]" checked value="{{$ecourse->id}}"> {{$ecourse->title}}<br>
          @endforeach
          
          @foreach($classroom->level->courses as $course)
            @if (!empty($student->exceptedCourses))
              @if(!$student->exceptedCourses->contains($course))
                <input class="form-check-input exceptedCourses" type="checkbox" name="exceptedCourses[]" value="{{$course->id}}"> {{$course->title}}<br>
              @endif
            @else
              <input class="form-check-input exceptedCourses" type="checkbox" name="exceptedCourses[]" value="{{$course->id}}"> {{$course->title}}<br>
            @endif
          @endforeach
          <p id="exceptedCoursesUpdateConfirmation"></p>
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