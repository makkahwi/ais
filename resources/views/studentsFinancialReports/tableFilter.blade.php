<tr>
    <th>@include('labels.filters')</th>
    <th>
        <select data-column="1" class="form-control sem-filter">
          <option value="">Select a semester</option>
          @foreach($sems as $sem)
            <option value="{{$sem->title}}, {{$sem->year->title}}">{{$sem->title}}, {{$sem->year->title}}</option>
          @endforeach
        </select>
    </th>
    <th>
        <select data-column="2" class="form-control record-filter">
          <option value="">Select a type</option>
          <option value="Due مستحق">Due مستحق</option>
          <option value="Payment مدفوع">Payment مدفوع</option>
        </select>
    </th>
    <th>
        <select data-column="3" class="form-control level-filter">
          <option value="">Select a level</option>
          @foreach($levels as $level)
            <option value="{{$level->title}}">{{$level->title}}</option>
          @endforeach
        </select>
    </th>
    <th>
        <select data-column="4" class="form-control classroom-filter">
          <option value="">Select a level first</option>
        </select>
    </th>
    <th>
        <select data-column="5" class="form-control student-filter">
          <option value="">Select a classroom first</option>
        </select>
    </th>
    <th>
        <select data-column="6" class="form-control due-filter">
          <option value="">Select a category</option>
          @foreach($sfCategories as $category)
            <option value="{{$category->title}}">{{$category->title}}</option>
          @endforeach
        </select>
    </th>
    <th></th>
    <th>
        <select data-column="8" class="form-control discount-filter">
          <option value="">Select a category</option>
          @foreach($sfDiscounts as $discount)
            <option value="{{$discount->title}}">{{$discount->title}}</option>
          @endforeach
        </select>
    </th>
    <th></th>
    <th></th>
    <th>
      <input required type="date" max={{today()}} class="form-control date-filter">
    </th>
</tr>


@push('scripts') 
  <script type="text/javascript">
    $('.level-filter').on('change',function(e){ // Dynamic Classroom Change ///////////////////

      var level = e.target.value;

      $('.classroom-filter').empty();
      $('.classroom-filter').append('<option value="">Select a Classroom...</option>')
      $('.student-filter').empty();
      $('.student-filter').append('<option value="">Select a Classroom first...</option>')

      $.get('dynamicClassroomByTitle?level='+ level, function(data){
        $.each(data, function(index, clas){
          $('.classroom-filter').append('<option value="'+clas.title+'">'+clas.title+'</option>')
        });
      });
    });

    $('.classroom-filter').on('change',function(e){ // Dynamic Classroom Change ///////////////////

      var classroom = e.target.value;

      $('.student-filter').empty();
      $('.student-filter').append('<option value="">Select a Student...</option>')

      $.get('dynamicStudentsByTitle?classroom='+ classroom, function(data){
        $.each(data, function(index, student){
          $('.student-filter').append('<option value="'+student.studentNo+' | '+student.user.name+'">'+student.studentNo+' | '+student.user.name+'</option>')
        });
      });
    });
  </script>
@endpush