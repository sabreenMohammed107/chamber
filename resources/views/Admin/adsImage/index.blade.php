@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Images-Ads') }} </li>
    </ol>
</nav>

@endsection

@section('content')

<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>Images-Ads</h6>

            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="courseEval" class="dattable table table-striped thead-dark  w-100">
                        <thead>
                            <th>#</th>
                            <th>Ads No</th>

                            <th>Ads Image</th>
                            <th>Ads Url</th>


                            <th></th>

                        </thead>
                        <tbody>
                            @foreach($ads as $index=> $data)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$data->ads_no}}</td>
                                <td><img src="{{ asset('uploads/ads')}}/{{ $data->image }}" alt=""></td>

                                <td>{{$data->url}}</td>



                                <td>
                                    <a href="#" class="btn btn-info d-inline-block" data-toggle="modal" data-target="#addclient{{$data->id}}">edit</a>
                                    <a href="#" onclick="destroy('this Data','{{$data->id}}')" class="btn d-inline-block btn-danger">delete</a>
                                    <form id="delete_{{$data->id}}" action="{{ route('adsImage.destroy', $data->id) }}" method="POST" style="display: none;">
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


    @foreach($ads as $data)
    <!-- Add SubCat Modal -->
    <div class="modal fade" id="addclient{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="addclient">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">X

                </button>
                <h3>Edit Images Ads</h3>

                <div class="modal-body">


                    <div class="ms-auth-container row no-gutters">
                        <div class="col-12 p-3">
                            <form action="{{route('adsImage.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                <div class="ms-auth-container row">
                                    {{ csrf_field() }}

                                    @method('PUT')



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="img-upload">
                                                <img src="{{ asset('uploads/ads')}}/{{ $data->image }}" alt="">
                                                <div class="upload-icon">
                                                    <input type="file" name="pic" class="upload">
                                                    <i class="fas fa-camera    "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="upload-icon">
                                                <label>ads no</label>
                                            </div>

                                            <div class="input-group">
                                                <input type="text" name="ads_no" value="{{$data->ads_no}}" class="form-control" id="Master AR Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>ads url</label>
                                            <div class="input-group">
                                                <input type="url" name="url" value="{{$data->url}}" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>





                                    <div class="input-group d-flex justify-content-end text-center">
                                        <input type="button" value="Cancel" class="btn btn-dark mx-2" data-dismiss="modal" aria-label="Close">
                                        <input type="submit" value="Add" class="btn btn-success ">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </main>
    <!-- /Add Sub Modal -->

    @endforeach


    @endsection
    @section('scripts')

    @endsection