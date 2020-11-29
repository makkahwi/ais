<p hidden>{{$c=1}}{{$today=today()}}</p>
        
@foreach($sems as $sem)
    @if ($sem->deleted_at == NULL)  <!-- Not to show soft deleted records ---------------->
        @if($sem->start <= $today && $sem->end >= $today)
        <tr class="theme-main" style="font-weight:600;">
        @else
        <tr>
        @endif
            <td><b class="theme-main">{{$c}}</b></td> <!-- List Numbering ---------------->
            <td>{{ $sem->title }}</td>
            <td>{{ $sem->year->title }}</td>
            <td>{{ date("d-m-Y", strtotime($sem->start)) }}</td>
            <td>{{ date("d-m-Y", strtotime($sem->join)) }}</td>
            <td>{{ date("d-m-Y", strtotime($sem->results)) }}</td>
            <td>{{ date("d-m-Y", strtotime($sem->end)) }}</td>
            <td>
                <div class='btn-group'>

                    <!-- Showing Button-->
                    <button data-toggle="modal" data-target="#show-modal" id="showing" data-name="{{$sem->title}}" data-year="{{$sem->year->title}}" data-sdate="{{ date('d-m-Y', strtotime($sem->start)) }}" data-jdate="{{ date('d-m-Y', strtotime($sem->join)) }}" data-rdate="{{ date('d-m-Y', strtotime($sem->results)) }}" data-edate="{{ date('d-m-Y', strtotime($sem->end)) }}" class='btn btn-info btn-xs'><i class="far fa-eye"></i></button>

                    @can('update', App\Models\sems::class)

                        <!-- Editing Button-->
                        <button data-toggle="modal" data-target="#edit-modal" id="editing" data-id="{{$sem->id}}" data-name="{{$sem->title}}" data-year="{{$sem->year_id}}" data-sdate="{{ date('Y-m-d', strtotime($sem->start)) }}" data-jdate="{{ date('Y-m-d', strtotime($sem->join)) }}" data-rdate="{{ date('Y-m-d', strtotime($sem->results)) }}" data-edate="{{ date('Y-m-d', strtotime($sem->end)) }}" class='btn btn-warning btn-xs'><i class="fa fa-edit"></i></button>

                    @endcan

                    @can('delete', App\Models\sems::class)

                        <!-- Deleting Button-->
                        <button data-toggle="modal" data-target="#delete-modal" id="deleting" data-id="{{$sem->id}}" data-title="{{$sem->title}}, {{$sem->year->title}}" class='btn btn-danger btn-xs'><i class="fa fa-trash-alt"></i></button>

                    @endcan

                </div>
                    
            </td>
        </tr>
    @endif

<p hidden>{{$c++}}</p>
            
@endforeach