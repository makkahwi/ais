<!-- School No Field -->
<div class="form-group col-md-6">
  <label for="schoolNo">@include('labels.sno')</label>
  <input type="number" min="0" class="form-control" name="schoolNo" id="schoolNoEd" required>
</div>

<!-- role_id Field -->
<div class="form-group col-md-6">
  <label for="role_id">@include('labels.Role')</label>
  <select required class="form-control" name="role_id" id="roleEd">
    <option value="">Select a Role...</option>
    @foreach($roles as $role)
      <option value="{{$role->id}}">{{$role->title}}</option>
    @endforeach
  </select>
</div>

<!-- Name Field -->
<div class="form-group col-md-6">
  <label for="name">@include('labels.name')</label>
  <input type="text" class="form-control" name="name" id="nameEd" required>
</div>


<!-- Email Field -->
<div class="form-group col-md-6">
  <label for="emailEd">@include('labels.email')</label>
  <input type="text" class="form-control" name="email" id="emailEd" required>
</div>

<!-- Status Field -->
<div class="form-group col-md-6">
  <label for="status">@include('labels.status')</label>
  <select required class="form-control" name="status_id" id="statusEd">
    <option value="">Select a Status...</option>
    @foreach($status as $status)
      <option value="{{$status->id}}">{{$status->title}}</option>
    @endforeach
  </select>
</div>

<!-- ldate Field -->
<div class="form-group col-md-6">
  <label for="ldateEd">@include('labels.ldate')</label>
  <input type="date" class="form-control" name="ldateEd" id="ldateEd" required>
</div>

<!-- Password Field -->
<div class="form-group col-md-12">
  <label for="password">@include('labels.pword')</label>
  <input type="password" class="form-control" name="passwords" id="passwordEd" required>
</div>