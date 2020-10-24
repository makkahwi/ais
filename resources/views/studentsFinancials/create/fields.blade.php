<!-- Sem Field -->
<div class="form-group col-md-6">
    <label for="sem_id">@include('labels.semester')@include('layouts.required')</label>
    <select required class="form-control" name="sem_id" id="sem_idCr">
        @foreach ($cnSem as $sem)
            <option value="{{$sem->id}}">{{$sem->title}}, {{$sem->year->title}}</option>
        @endforeach
    </select>
</div>

<!-- level Field -->
<div class="form-group col-md-6">
    <label for="level">@include('labels.level')@include('layouts.required')</label>
    <select required class="form-control" name="level" id="levelCr">
        <option value="">Choose a level</option>

        @foreach ($levels as $level)
            <option value="{{$level->id}}">{{$level->title}}</option>
        @endforeach
    </select>
</div>

<!-- classroom Field -->
<div class="form-group col-md-6">
    <label for="classroom">@include('labels.classroom')@include('layouts.required')</label>
    <select required class="form-control" name="classroom" id="classroomCr">
        <option value="">Choose a level first</option>
    </select>
</div>

<!-- studentNo Field -->
<div class="form-group col-md-6">
    <label for="studentNo">@include('labels.sno')@include('layouts.required')</label>
    <select required class="form-control" name="studentNo" id="studentNoCr">
        <option value="">Choose a classroom first</option>
    </select>
</div>

<!-- category Field -->
<div class="form-group col-md-6">
    <label for="category_id">@include('labels.ctitle')@include('layouts.required')</label>
    <select required class="form-control" name="category_id" id="category_idCr">
        <option value="">Choose a category</option>

        @foreach ($sfCategories as $category)
            <option value="{{$category->id}}">{{$category->title}} | @if( !empty($category->level->title) ){{ $category->level->title }}@else All Levels @endif</option>
        @endforeach
    </select>
</div>

<!-- category amount Field -->
<div class="form-group col-md-6">
    <label for="categoryamount">@include('labels.amount')</label>
    <input readonly class="form-control" name="categoryamount" id="categoryamountCr">
</div>

<!-- discount Field -->
<div class="form-group col-md-6">
    <label for="discount_id">@include('labels.dtitle')</label>
    <select required class="form-control" name="discount_id" id="discount_idCr">
        <option value="0">Choose a discount</option>

        @foreach ($sfDiscounts as $discount)
            <option value="{{$discount->id}}">{{ $discount->title }}</option>
        @endforeach
    </select>
</div>

<!-- discount amount Field -->
<div class="form-group col-md-6">
    <label for="discountamount">@include('labels.amount')</label>
    <input readonly class="form-control" name="discountamount" id="discountamountCr">
</div>

<!-- final Amount Field -->
<div class="form-group col-md-6">
    <label for="finalAmount">@include('labels.famount')@include('layouts.required')</label>
    <input required type="number" class="form-control" name="finalAmount" id="finalAmountCr">
</div>