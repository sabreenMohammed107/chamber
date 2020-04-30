@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
    <li class="breadcrumb-item active" aria-current="page"> {{ __('home_slider') }} </li>
  </ol>
</nav>

@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
      <div class="ms-panel-header d-flex justify-content-between">
        <h6>Edit </h6>

      </div>
      <div class="ms-panel-body col-md-6 col-md-offset-2">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </div>
      <div class="col-md-12">
      <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data" >
                  <div class="ms-auth-container row">
                  {{ csrf_field() }}

@method('PUT')
              <div class="ms-auth-container row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="img-upload">
                      <img src="{{ asset('uploads/slider')}}/{{ $slider->image }}" alt="">
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
                      <label>Master AR Title</label>
                    </div>

                    <div class="input-group">
                      <input type="text" name="master_ar_text" value="{{$slider->master_ar_text}}" class="form-control" id="Master AR Title">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label>Sub AR Title</label>
                    <div class="input-group">
                      <input type="text" id="Sub AR Title" name="sub_ar_text" value="{{$slider->sub_ar_text}}" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
               

                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label>Master EN Title</label>
                    <div class="input-group">
                      <input type="text" name="master_en_text" value="{{$slider->master_en_text}}" id="Master EN Title" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="example2">Sub EN Text</label>
                    <div class="input-group">
                      <input type="text" name="sub_en_text"  value="{{$slider->sub_en_text}}" class="form-control" id="Master AR Title">
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label>URL</label>
                    <div class="input-group">
                      <input type="text" id="Sub EN Title" name="url" value="{{$slider->url}}" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label> Order </label>
                    <div class="input-group">
                      <input type="text" id="Sub EN Title" name="order" value="{{$slider->order}}" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="custom-control custom-checkbox">
                  @if($slider->active == 1)
                          <input type="checkbox" id="active" name="active"
                            checked>
                          @else
                          <input type="checkbox" id="active" name="active"
                            >
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
@endsection
@section('scripts')
@endsection