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

            <div class="row bg-warning">
                <div class="form-group col-md-3">
                    <label for="">@include('labels.sno')</label>
                </div>

                <div class="form-group col-md-3">
                    <input required class="form-control" type="text" id="studentNo">
                </div>

                <div class="form-group col-md-3">
                    <label for="">@include('labels.batch')</label>
                </div>

                <div class="form-group col-md-3">
                    <select class="form-control" name="" id="">
                        <option value="">form control</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">New or exisiting student?<br>طالب جديد أم مسجل في المدرسة؟</label>
                </div>

                <div class="form-group col-md-3">
                    <input type="radio" name="new" id="" value="new">
                    <label for="">New</label><br>
                    <input type="radio" name="new" id="" value="exisiting">
                    <label for="">Exisiting</label>
                </div>

                <div class="form-group col-md-3">
                    <label for="">Want to calculate study fees for Sem 1 or Sem 2?<br>هل تريد حساب قيمة الرسوم الدراسية للفصل الدراسي الأول أم الثاني؟</label>
                </div>

                <div class="form-group col-md-3">
                    <input type="radio" name="sem" id="" value="1">
                    <label for="">Sem 1 الفصل الأول</label><br>
                    <input type="radio" name="sem" id="" value="2">
                    <label for="">Sem 2 الفصل الثاني</label>
                </div>
            </div>

            <div class="row bg-warning">
                <div class="form-group col-md-6">
                    <h4><u>What are the discounts you are eligible to?</u></h4>
                </div>
                <div class="form-group col-md-6">
                    <h4><u>ما هي أنواع الخصومات التي تتوفر لديك شروط استحقاقها؟</u></h4>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="">Siblings Discount<br>خصم الإخوة</label>
                </div>

                <div class="form-group col-md-3">
                    <input type="radio" name="siblings" id="" value="1">
                    <label for="">Eldest Student<br>الأخ الأكبر</label>
                </div>
            
                <div class="form-group col-md-3">
                    <input type="radio" name="siblings" id="" value="2">
                    <label for="">Second to Eldest Student<br>الأخ الثاني بعد الأكبر</label>
                </div>

                <div class="form-group col-md-3">
                    <input type="radio" name="siblings" id="" value="3">
                    <label for="">Third / Forth ... etc to Eldest Student<br>الأخ الثالث / الرابع ... إلخ بعد الأكبر</label>
                </div>
            </div>
            
            <div class="row bg-warning">
                <div class="form-group col-md-6">
                    <input type="checkbox" name="" id="" value="yes">
                    <label for="">One or both parents of school student is / are univeristy student(s)<br>أحد أو كلا والدي طالب المدرسة يدرسون في الجامعة</label>
                </div>

                <div class="form-group col-md-3">
                    <input type="checkbox" name="" id="" value="yes">
                    <label for="">Orphans<br>الأيتام</label>
                </div>

                <div class="form-group col-md-3">
                    <input type="checkbox" name="" id="" value="yes">
                    <label for="">Deposit Waive<br>إلغاء رسوم التأمين</label>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <input type="checkbox" name="" id="" value="yes">
                    <label for="">Any of both parents is staff @ our school<br>أحد أو كلا والدي الطالب يعمل في المدرسة</label>
                </div>

                <div class="form-group col-md-3">
                    <input type="checkbox" name="" id="" value="yes">
                    <label for="">Hafez Student<br>الطالب حافظ للقرآن كاملاً</label>
                </div>
                
                <div class="form-group col-md-3">
                    <input type="checkbox" name="" id="" value="yes">
                    <label for="">In advance payment discount<br>خصم تسديد رسوم السنة مقدماً</label>
                </div>

                <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-success">Calculate</button>
                </div>
            </div>

        </div>
    </div>
@endsection