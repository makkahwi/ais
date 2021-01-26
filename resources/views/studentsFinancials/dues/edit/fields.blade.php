<!-- Sem Field -->
<div class="form-group col-md-3">
  <label for="sem_id">@include('labels.semester')@include('layouts.required')</label>
  <select readonly class="form-control" name="sem_id" id="sem_idDueEd">
    @foreach ($cnSem as $sem)
      <option value="{{$sem->id}}">{{$sem->title}}, {{$sem->year->title}}</option>
    @endforeach
  </select>
</div>

<!-- studentNo Field -->
<div class="form-group col-md-3">
  <label for="studentNo">@include('labels.sno')@include('layouts.required')</label>
  <input readonly class="form-control" name="studentNo" id="studentNoDueEd">
</div>

<!-- category Field -->
<div class="form-group col-md-3">
  <label for="category_id">@include('labels.ctitle')@include('layouts.required')</label>
  <select required class="form-control" name="category_id" id="category_idDueEd">
    <option value="">Choose a category</option>

    @foreach ($sfCategories as $category)
      <option value="{{$category->id}}">{{$category->title}} | @if( !empty($category->level->title) ){{ $category->level->title }}@else All Levels @endif</option>
    @endforeach
  </select>
</div>

<!-- category amount Field -->
<div class="form-group col-md-3">
  <label for="categoryamount">@include('labels.amount')</label>
  <input readonly class="form-control" name="categoryamount" id="categoryamountDueEd">
</div>

<!-- discount Field -->
<div class="form-group col-md-3">
  <label for="discount_id">@include('labels.dtitle')</label>
  <select required class="form-control" name="discount_id" id="discount_idDueEd">
    <option value="0">No Discount</option>

    @foreach ($sfDiscounts as $discount)
      <option value="{{$discount->id}}">{{ $discount->title }}</option>
    @endforeach
  </select>
</div>

<!-- discount amount Field -->
<div class="form-group col-md-3">
  <label for="discountamount">@include('labels.amount')</label>
  <input readonly class="form-control" name="discountamount" id="discountamountDueEd">
</div>

<!-- final Amount Field -->
<div class="form-group col-md-6">
  <label for="finalAmount">@include('labels.famount')@include('layouts.required')</label>
  <input required type="number" class="form-control" name="finalAmount" id="finalAmountDueEd">
</div>