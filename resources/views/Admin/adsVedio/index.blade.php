@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Videos-Ads') }} </li>
    </ol>
</nav>

@endsection

@section('content')
<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>Videos-Ads</h6>
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#addclient"> add</a>

            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="courseEval" class="dattable table table-striped thead-dark  w-100">
                        <thead>
                            <th>#</th>
                            <th>en Title</th>

                            <th>ar Title</th>
                            <th>En Sub title</th>
                            <th>Ar Sub title</th>
                            <th>Video url</th>
                            <th>active</th>


                            <th></th>

                        </thead>
                        <tbody>
                            @foreach($ads as $index=> $data)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$data->ar_title}}</td>
                                <td>{{$data->en_title}}</td>


                                <td>{{$data->ar_subtitle}}</td>
                                <td>{{$data->en_subtitle}}</td>

                                <td>{{$data->vedio_url}}</td>
                                @if($data->active == 1)
                                <td><i class="fas fa-check"></i></td>
                                @else
                                <td><i class="fas fa-times"></i></td>
                                @endif



                                <td>
                                    <a href="#" class="btn btn-info d-inline-block" data-toggle="modal" data-target="#addclient{{$data->id}}">edit</a>
                                    <a href="#" onclick="destroy('this Data','{{$data->id}}')" class="btn d-inline-block btn-danger">delete</a>
                                    <form id="delete_{{$data->id}}" action="{{ route('adsVedio.destroy', $data->id) }}" method="POST" style="display: none;">
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


    <!-- Add SubCat Modal -->
    <div class="modal fade" id="addclient" tabindex="-1" role="dialog" aria-labelledby="addclient">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">X

                </button>
                <h3>Add Videos Ads</h3>

                <div class="modal-body">


                    <div class="ms-auth-container row no-gutters">
                        <div class="col-12 p-3">
                        <form action="{{route('adsVedio.store')}}" method="POST"  >
                  <div class="ms-auth-container row">
                  {{ csrf_field() }}



                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="upload-icon">
                                                <label>EN Title</label>
                                            </div>

                                            <div class="input-group">
                                                <input type="text" name="en_title" class="form-control" id="Master AR Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Ar Title</label>
                                            <div class="input-group">
                                                <input type="text" name="ar_title" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>En Sub title </label>
                                            <div class="input-group">
                                                <input type="text" name="en_subtitle" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Ar Sub title </label>
                                            <div class="input-group">
                                                <input type="text" name="ar_subtitle" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Video url</label>
                                            <div class="input-group">
                                                <input type="text" name="vedio_url" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <br>
                                            <input type="checkbox" id="" name="active" checked>
                                            <label for="category">active</label>
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
  
    <!-- /Add Sub Modal -->



    <!-- Edit SubCat Modal -->

    @foreach($ads as $data)

    <div class="modal fade" id="addclient{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="addclient">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">X

                </button>
                <h3>Edit Videos Ads</h3>

                <div class="modal-body">


                    <div class="ms-auth-container row no-gutters">
                        <div class="col-12 p-3">
                            <form action="{{route('adsVedio.update',$data->id)}}" method="POST">
                                <div class="ms-auth-container row">
                                    {{ csrf_field() }}

                                    @method('PUT')




                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="upload-icon">
                                                <label>EN Title</label>
                                            </div>

                                            <div class="input-group">
                                                <input type="text" name="en_title" value="{{$data->en_title}}" class="form-control" id="Master AR Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Ar Title</label>
                                            <div class="input-group">
                                                <input type="text" name="ar_title" value="{{$data->ar_title}}" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>En Sub title </label>
                                            <div class="input-group">
                                                <input type="text" name="en_subtitle" value="{{$data->en_subtitle}}" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Ar Sub title </label>
                                            <div class="input-group">
                                                <input type="text" name="ar_subtitle" value="{{$data->ar_subtitle}}" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Video url</label>
                                            <div class="input-group">
                                                <input type="text" name="vedio_url" value="{{$data->vedio_url}}" id="Master EN Title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <br>
                                            @if($data->active == 1)
                                            <input type="checkbox" id="partener" name="active" checked>
                                            @else
                                            <input type="checkbox" id="partener" name="active">
                                            @endif
                                            <label for="category">active</label>
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
    
    <!-- /Edit Sub Modal -->
    @endforeach


    @endsection
    @section('scripts')

    @endsection