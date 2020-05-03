@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Studies/Reports') }} </li>
    </ol>
</nav>

@endsection

@section('content')

<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>Studies/Reports</h6>
                <a href="{{route('study-report.create') }}" class="btn btn-dark"> add </a>
            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="courseEval" class="dattable table table-striped thead-dark  w-100">
                        <thead>
                            <th>#</th>

                            <th>En text</th>
                            <th>Ar text</th>
                            <th>En File </th>
                            <th>Ar File </th>
                            <th>Study Type</th>
                            <th>Active</th>
                            <th></th>



                        </thead>
                        <tbody>

                            @foreach($rows as $index => $row)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$row->en_text}}</td>
                                <td>{{$row->ar_text}}</td>
                                <td>{{$row->en_file}}</td>
                                <td> {{$row->ar_file}}</td>
                                <td>
                                @if($row->type)    
                                {{$row->type->ar_type}}
                                @endif
                            </td>

                                @if($row->active == 1)
                                <td><i class="fas fa-check"></i></td>
                                @else
                                <td><i class="fas fa-times"></i></td>
                                @endif



                                <td>
                                    <a href="{{ route('study-report.edit',$row->id) }}" class="btn btn-info d-inline-block">edit</a>
                                    <a href="#" onclick="destroy('this study-report','{{$row->id}}')" class="btn d-inline-block btn-danger">delete</a>
                                    <form id="delete_{{$row->id}}" action="{{ route('study-report.destroy', $row->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" value=""></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>





</div>
</div>
</div>
</div>
</div>
<hr>

</div>
</div>



@endsection
@section('scripts')

@endsection