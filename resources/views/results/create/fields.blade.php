<div class="table-responsive">
  <table class="table" width="100%" id="marks-table">

    <thead>
      <tr>
        <th>@include('labels.level')</th>
        <th>Marks Entry<br>Completed?</th>
        <th>Results Issue</th>
      </tr>
    </thead>

    <tbody>
      @foreach($levels as $level)
        <tr>
          <td>{{$level->title}}</td>
          @if ($level->done)
            <td class="text-success">
              Yes
            </td>
          @if ($level->issued)
            <td class="text-success">
              Done Already
            </td>
          @else
            <td>
              <input class="form-check-input" type="checkbox" checked value="{{$level->id}}" name="levels[]">
            </td>
          @endif
          @else
          <td class="text-danger">
            No
          </td>
          <td class="text-danger">
            <i class="fas fa-arrow-left"></i> Can't issue yet
          </td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>