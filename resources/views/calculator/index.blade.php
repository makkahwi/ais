@extends('layouts.app')

@section('title')
  @include('calculator.title')
@endsection

@section('header.title')
  @include('calculator.titles')
@endsection

@section('dataTableTitle')
@endsection

@section('dataTableColumns')
  exportOptions: {
    columns: [ 0, 1, 2, 3, 4, 6, 7, 8, 9 ],
  },
@endsection

@section('dataTableFooterPrint')
@endsection

@section('dataTableFilters')
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-body">
      <form action="{{ route ('calculation') }}">

        <div class="row bg-primary">
          <br>
          <div class="form-group col-md-2">
            <label for="">@include('labels.sno')</label>
          </div>

          <div class="form-group col-md-3">
            <input class="form-control" type="number" min="0" id="studentNo" name="studentNo">
          </div>

          <div class="form-group col-md-1">
            <label for="">OR<br>أو</label>
          </div>

          <div class="form-group col-md-1">
            <label for="">@include('labels.batch')</label>
          </div>

          <div class="form-group col-md-2">
            <select class="form-control" id="batch" name="batch">
              <option value="">Choose a batch...</option>
              @foreach($batches as $batch)
                <option value="{{$batch->batch}}">{{$batch->batch}} or Above</option>
              @endforeach
            </select>
          </div>

          <div class="form-group col-md-1">
            <label for="">@include('labels.level')</label>
          </div>

          <div class="form-group col-md-2">
            <select required class="form-control" id="level" name="level">
                <option value="">Choose student current / potential level...</option>
                @foreach($levels as $level)
                  <option value="{{$level->id}}">{{$level->title}}</option>
                @endforeach
            </select>
          </div>
        </div>

        <div class="row">
          <br>
          <div class="form-group col-md-3">
            <label for="">New or exisiting student?<br>طالب جديد أم مسجل في المدرسة؟</label>
          </div>

          <div class="form-group col-md-3">
            <input required type="radio" value="1" id="newStudent" name="newStudent">
            <label for="">New</label><br>
            <input type="radio" value="0" id="newStudent" name="newStudent">
            <label for="">Exisiting</label>
          </div>

          <div class="form-group col-md-3">
            <label for="">Want to calculate study fees for Sem 1 or Sem 2?<br>هل تريد حساب قيمة الرسوم الدراسية للفصل الدراسي الأول أم الثاني؟</label>
          </div>

          <div class="form-group col-md-3">
            <input required type="radio" value="1" id="sem" name="sem">
            <label for="">Sem 1 الفصل الأول</label><br>
            <input type="radio" value="2" id="sem" name="sem">
            <label for="">Sem 2 الفصل الثاني</label>
          </div>
        </div>

        <div class="row">
          <br>
          <div class="form-group col-md-3">
            <label for="">Include Visa Application / renewal fees from School?<br>إضافة رسوم  التقديم / التجديد لفيزا للطالب من المدرسة؟</label>
          </div>

          <div class="form-group col-md-3">
            <input required type="radio" value="1" id="visa" name="visa">
            <label for="">Yes</label><br>
            <input type="radio" value="0" id="visa" name="visa">
            <label for="">No</label>
          </div>

          <div class="form-group col-md-3">
            <label for="">Include school bus service fees?<br>هل تريد حساب قيمة الرسوم لباص المدرسة؟</label>
          </div>

          <div class="form-group col-md-3">
            <input required type="radio" value="1" id="transporation" name="transporation">
            <label for="">Yes</label><br>
            <input type="radio" value="0" id="transporation" name="transporation">
            <label for="">No</label>
          </div>
        </div>

        <div class="row bg-primary">
          <br>
          <div class="form-group col-md-6">
            <h4><u>What are the discounts you are eligible to?</u></h4>
          </div>

          <div class="form-group col-md-6">
            <h4><u>ما هي أنواع الخصومات التي تتوفر لديك شروط استحقاقها؟</u></h4>
          </div>
        </div>

        <div class="row">
          <br>    
          @foreach($discounts as $discount)                
            <div class="form-group col-md-3">
              <input type="checkbox" value="{{$discount->title}}" id="discounts" name="discounts[]">
              <label for=""><u>{{$discount->title}}</u>: {{$discount->description}}</label>
            </div>
          @endforeach
        </div>

        <div class="row">
          <div class="form-group col-md-10">
          </div>

          <div class="form-group col-md-2">
            <button type="submit" class="btn btn-success submitbutton">Calculate</button>
            <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection