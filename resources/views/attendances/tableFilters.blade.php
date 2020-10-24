<tr>
    <th>@include('labels.filters')</th>
    <th>
        <select data-column="1" class="form-control student-filter-{{$classroom->id}}">
            <option value="">All الكل</option>
            @foreach($students as $student)
            @if ($classroom->id == $student->classroom_id)
                <option value="{{$student->studentNo}}">{{$student->studentNo}} | {{$student->user->name}}</option>
            @endif
            @endforeach
        </select>
    </th>
    <th>
        <input data-column="2" type="date" max={{today()}} class="form-control date-filter-{{$classroom->id}}" id="date">
    </th>
    <th>
        <select data-column="3" class="form-control atten-filter-{{$classroom->id}}">
            <option value="">All الكل</option>
            <option value="Attended حاضر">Attended حاضر</option>
            <option value="Late متأخر">Late متأخر</option>
            <option value="Absent غائب">Absent غائب</option>
        </select>
    </th>
    <th colspan="2"></th>
</tr>