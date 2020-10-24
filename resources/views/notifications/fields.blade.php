<!-- Type Field -->
<div class="form-group col-md-6">
    <label for="type">@include('labels.name')</label>
    <input type="text" class="form-control" name="type" id="type" required>
</div>

<!-- Notifiable Type Field -->
<div class="form-group col-md-6">
    <label for="notifiable_type">@include('labels.name')</label>
    <input type="text" class="form-control" name="notifiable_type" id="type" required>
</div>

<!-- Notifiable Id Field -->
<div class="form-group col-md-6">
    <label for="notifiable_id">@include('labels.name')</label>
    <input type="number" class="form-control" name="notifiable_id" id="notifiable_id" required>
</div>

<!-- Data Field -->
<div class="form-group col-md-12">
    <label for="data">@include('labels.name')</label>
    <textarea class="form-control" name="data" id="data" required></textarea>
</div>

<!-- Read At Field -->
<div class="form-group col-md-6">
    <label for="read_at">@include('labels.name')</label>
    <input type="date" class="form-control" name="read_at" id="read_at" required>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#read_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush