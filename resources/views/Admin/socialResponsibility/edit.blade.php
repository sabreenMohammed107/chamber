@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Social-Responsibility') }} </li>
    </ol>
</nav>

@endsection

@section('content')

  <!-- home-slider -->
  <div class="row">

<div class="col-md-12">



    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>edit-Social-Responsibility</h6>

        </div>
        <div class="ms-panel-body">
            <div class="ms-auth-container row no-gutters">
                <div class="col-12 p-3">
                <form action="{{route('socialResponsibility.update',$row->id)}}" method="POST" enctype="multipart/form-data" >
                            <div class="ms-auth-container row">
                                {{ csrf_field() }}

                                @method('PUT')
                      
                        <div class="ms-auth-container row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="img-upload">
                                        <img  src="{{ asset('uploads/socialty')}}/{{ $row->image }}" alt="">
                                        <div class="upload-icon">
                                            <input type="file" name="pic" class="upload">
                                            <i class="fas fa-camera    "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class="exampleInputPassword1" for="exampleCheck1">En Title</label>
                                    <input type="text" name="en_title" value="{{$row->en_title}}" class="form-control">
                                </div>
                            </div>


                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class="exampleInputPassword1" for="exampleCheck1">Ar Title</label>
                                    <input type="text" name="ar_title" value="{{$row->ar_title}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example2">EN Text</label>
                                    <div class="form-group">
                                        <textarea class="content"  name="en_text">{{$row->en_text}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example2">Ar Text</label>
                                    <div class="form-group">
                                        <textarea class="content" name="ar_text">{{$row->ar_text}}</textarea>
                                    </div>
                                </div>
                            </div>
                           
                           
                          
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <br>
                                    @if($row->active == 1)
                                        <input type="checkbox" id="partener" name="active" checked>
                                        @else
                                        <input type="checkbox" id="partener" name="active">
                                        @endif
                                    <label for="category">active</label>
                                </div>

                            </div>






                            <div class="input-group d-flex justify-content-end text-center">
                                <input type="button" value="Cancel" class="btn btn-dark mx-2"
                                    data-dismiss="modal" aria-label="Close">
                                <input type="submit" value="save" class="btn btn-success ">
                            </div>
                    </form>
                </div>
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