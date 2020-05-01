@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('COMMUNICATIONS-GUIDE') }} </li>
    </ol>
</nav>

@endsection

@section('content')

<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>COMMUNICATIONS-GUIDE</h6>
                <a href="{{route('communications-guide.create') }}" class="btn btn-dark"> add COMMUNICATIONS-GUIDE</a>
            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="courseEval" class="dattable table table-striped thead-dark  w-100">
                        <thead>
                            <th>#</th>
                            <th>En name</th>
                            <th>Ar name</th>
                            <th>phone </th>
                            <th>fax </th>
                            <th>Email</th>
                            <th>website </th>
                            <th>En Address</th>
                            <th>Ar Address</th>
                          

                            <th></th>



                        </thead>
                        <tbody>

                            @foreach($rows as $index => $row)
                            <tr>
                                <td>{{$index+1}}</td>

                                <td>{{$row->ar_name}}</td>
                                <td>{{$row->en_name}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->fax}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->website}}</td>
                                <td>{{$row->en_address}}</td>
                                <td>{{$row->ar_address}}</td>
                                


                                <td>
                                    <a href="{{ route('communications-guide.edit',$row->id) }}" class="btn btn-info d-inline-block">edit</a>
                                    <a href="#" onclick="destroy('this communications-guide','{{$row->id}}')" class="btn d-inline-block btn-danger">delete</a>
                                    <form id="delete_{{$row->id}}" action="{{ route('communications-guide.destroy', $row->id) }}" method="POST" style="display: none;">
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