@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Commercial Agreement') }} </li>
    </ol>
</nav>

@endsection

@section('content')
<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>add-Commercial Agreement</h6>

            </div>
            <div class="ms-panel-body">
                <div class="ms-auth-container row no-gutters">
                    <div class="col-12 p-3">
                    <form action="{{route('commercialAgreement.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                            <div class="ms-auth-container row">
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Agreement date
                                        </label>
                                        <br>
                                        <input style="height: 40px; border-radius: 5px;" class="col-md-12 exampleInputPassword1" for="exampleCheck1" data-date-format="dd/mm/yyyy" name="agreement_date" type="date" id="datepicker">
                                    </div>
                                </div>



                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example2">Agreement En Text </label>
                                        <div class="form-group">
                                            <textarea class="content" name="en_agreement"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example2">Agreement Ar Text </label>
                                        <div class="form-group">
                                            <textarea class="content" name="ar_agreement"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-auth-container row">
                                    <div class="col-md-12">
                                        <label> En File </label>

                                        <div class="fileUpload">
                                            <div class="upload-icon">
                                                <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">

                                                <input type="file" name="en_file" class="upload up" id="en_file" onchange="readURLFile(this);" />
                                                <span class="upl" id="upload">Upload document</span></div>

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
                                                <span class="upl" id="upload">Upload document</span></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <br>
                                        <input type="checkbox" id="" name="active" checked>
                                        <label for="category">active</label>
                                    </div>

                                </div>






                                <div class="input-group d-flex justify-content-end text-center">
                                <a href="{{ route('commercialAgreement.index') }}" class="btn btn-dark mx-2"> Cancel</a>
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