<div class="table-responsive">
  <table class="table" width="100%" id="marks-table">

    <thead>
      <tr>
        <th>@include('labels.level')</th>
        <th>Courses with marks<br>categories not filled yet</th>
        <th>Courses with total marks<br>weights below or above 100</th>
        <th>Results Issue</th>
      </tr>
    </thead>

    <tbody>
      @foreach($levels as $level)
        <tr>
          <td>{{$level->title}} <p hidden>{{$ready = 'Yes'}}</p> </td>
          <td class="text-danger">
            @foreach($level->courses as $course)
              @if (count($course->unusedmarkstypes))
                <p hidden>{{$ready = 'No'}}</p>
                {{$course->code}} | {{$course->title}}<br>
                @foreach($course->unusedmarkstypes as $type)
                  &nbsp;&nbsp;{{$type->title}}, 
                @endforeach
                <br>
                <br>
              @endif
            @endforeach
          </td>
          <td class="text-danger">
            @foreach($level->courses as $course)
              @if ($course->markstypesWeights != 100)
                <p hidden>{{$ready = 'No'}}</p>
                {{$course->code}} | {{$course->title}}<br>
              @endif
            @endforeach
          </td>
          @if ($ready == 'No')
            <td class="text-danger">Cannot Issue Yet</td>
          @else
            @if($level->courses[0]->issuedResults != 0)
              <td class="text-success"><b>Issued Already</b></td>
            @else
              <td>
                <input class="form-check-input" type="checkbox" checked value="{{$level->id}}" name="levels[]"> <p class="text-success"><b>Ready for issuance</b></p>
              </td>
            @endif
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>


