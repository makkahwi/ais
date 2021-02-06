<p hidden>{{$c=0}}</p>

@foreach($batch->categories as $category)
  @can('view', [App\Models\studentsFinancialsCategories::class, $category])
    <tr>
      <td><b class="theme-main">{{++$c}}</b></td> <!-- List Numbering ---------------->
      <td>{{ $batch->batch }}</td>
      <td>{{ $category->frequency }}</td>
      <td>{{ $category->title }}</td>
      <td>@if($category->level_id){{ $category->level->title }}@else All Levels @endif</td>
      <td>{{ $category->amount }}</td>

      @can('update', App\Models\studentsFinancialsCategories::class)
        <td>
          <div class='btn-group'>

            <!-- Showing Button-->
            <button data-toggle="modal" data-target="#show-modal" id="showing" data-batch="{{ $batch->batch }}" data-frequency="{{ $category->frequency }}" data-title="{{ $category->title }}" data-level="@if($category->level_id){{ $category->level->title }}@else All Levels @endif" data-amount="{{ $category->amount }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

            <!-- Editing Button-->
            <button data-toggle="modal" id="editing" data-target="#edit-modal" id="editing" data-id="{{ $category->id }}" data-batch="{{ $category->batch_id }}" data-frequency="{{ $category->frequency }}" data-title="{{ $category->title }}" data-level="{{ $category->level_id }}" data-amount="{{ $category->amount }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>
              
            @can('delete', App\Models\student::class)
              <!-- Deleting Button-->
              <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$category->id}}" data-title="{{$batch->batch}} | {{ $category->title }} | @if($category->level_id){{ $category->level->title }}@else All Levels @endif" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>
            @endcan

          </div>
        </td>
      @endcan
    </tr>
  @endcan
@endforeach