@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Commmercial-topics') }} </li>
    </ol>
</nav>

@endsection

@section('content')
<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>add-Commmercial-topics</h6>

            </div>
            <div class="ms-panel-body">
                <div class="ms-auth-container row no-gutters">
                    <div class="col-12 p-3">

                        <form action="{{route('commmercial-topics.update',$row->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @method('PUT')
                            <div class="ms-auth-container row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> En Text</label>
                                        <input type="text" name="en_text" value="{{$row->en_text}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1"> Ar Text</label>
                                        <input type="text" name="ar_text" value="{{$row->ar_text}}" class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Type </label>
                                        <select name="commerical_topic_id" class="form-control" id="">
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

                                <div class="ms-auth-container row">
                                    <div class="col-md-12">
                                        <label> En File </label>

                                        <div class="fileUpload">
                                            <div class="upload-icon">
                                                <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">

                                                <input type="file" name="en_file" class="upload up" id="en_file" onchange="readURLFile(this);" />
                                                <span class="upl" id="upload">{{$row->en_file}}</span></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ms-auth-container row">
                                    <div class="col-md-12">
                                        <label>Ar File </label>

                                        <div class="fileUpload">
                                            <div class="upload-icon">
                                                <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">

                                                <input type="file" name="ar_file" class="upload up" id="ar_file" onchange="readURLFile(this);" />
                                                <span class="upl" id="upload">{{$row->ar_file}}</span></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <br>
                                        @if($row->active == 1)
                                        <input type="checkbox" id="" name="active" checked>
                                        @else
                                        <input type="checkbox" id="" name="active">
                                        @endif
                                        <label for="category">active</label>
                                    </div>

                                </div>






                                <div class="input-group d-flex justify-content-end text-center">
                                    <a href="{{ route('commmercial-topics.index') }}" class="btn btn-dark mx-2"> Cancel</a>
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