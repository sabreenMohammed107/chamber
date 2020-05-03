@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Ministries') }} </li>
    </ol>
</nav>

@endsection

@section('content')
<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>add-Ministries</h6>

            </div>
            <div class="ms-panel-body">
                <div class="ms-auth-container row no-gutters">
                    <div class="col-12 p-3">

                        <form action="{{route('ministries.update',$row->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @method('PUT')
                            <div class="ms-auth-container row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div id="img-upload" class="img-upload">
                                            <img src="{{ asset('uploads/encyclo')}}/{{ $row->image }}" alt="">
                                            <div class="upload-icon">
                                                <input type="file" name="pic" class="upload">
                                                <i class="fas fa-camera    "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1">En Name</label>
                                        <input type="text" name="ar_name" value="{{$row->ar_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> Ar Name</label>
                                        <input type="text" name="en_name" value="{{$row->en_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> phone</label>
                                        <input type="text" name="phone" value="{{$row->phone}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> Email</label>
                                        <input type="text" name="email" value="{{$row->email}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> website</label>
                                        <input type="text" name="website" value="{{$row->website}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1">En Address </label>
                                        <input type="text" name="en_address" value="{{$row->en_address}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> Ar Address </label>
                                        <input type="text" name="ar_address" value="{{$row->ar_address}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type </label>
                                        <select name="ministry_type_id" class="form-control" id="">
                                            <option value="">
                                                @if($row->type)
                                                {{$row->type->ar_type}}
                                                @endif
                                            </option>
                                            @foreach ($types as $type)
                                            <option value='{{$type->id}}'>{{$type->ar_type}}

                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> Manager En name</label>
                                        <input type="text" name="manager_en_name" value="{{$row->manager_en_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> Manager Ar name </label>
                                        <input type="text" name="manager_ar_name" value="{{$row->manager_ar_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> order </label>
                                        <input type="number" name="order" value="{{$row->order}}" class="form-control">
                                    </div>
                                </div>


                                <div class="input-group d-flex justify-content-end text-center">
                                    <a href="{{ route('ministries.index') }}" class="btn btn-dark mx-2"> Cancel</a>
                                    <input type="submit" value="save" class="btn btn-success ">
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- add category -->








</div>




@endsection
@section('scripts')

@endsection