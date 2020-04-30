@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
    <li class="breadcrumb-item active" aria-current="page"> {{ __('Chances') }} </li>
  </ol>
</nav>

@endsection

@section('content')
 <!-- home-slider -->
 <div class="row">

<div class="col-md-12">



    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>add_Commerical-Chances</h6>

        </div>
        <div class="ms-panel-body">
            <div class="ms-auth-container row no-gutters">
                <div class="col-12 p-3">
                <form action="{{route('adminChance.store')}}" method="POST"  >
                                    @csrf
                        <div class="ms-auth-container row">
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chance Type</label>
                                        <select name="chance_type" class="form-control" id="">
                                            <option value="">select....</option>
                                            <option value="1">فرص إستيراديه</option>
                                            <option value="2">فرص تصديرية</option>
                                            <option value="3">فرص أستثمارية</option>
                                            <option value="4">مناقصات ومزايدات</option>

                                        </select>
                                    </div>
                                </div>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chance Date
                                    </label>
                                    <br>
                                    <input style="height: 40px; border-radius: 5px;"
                                        class="col-md-12 exampleInputPassword1"  name="chance_date" for="exampleCheck1"
                                        data-date-format="dd/mm/yyyy" type="date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="exampleInputPassword1"  for="exampleCheck1"> En Subject </label>
                                    <input type="text" name="en_subject" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="exampleInputPassword1"  for="exampleCheck1"> Ar Subject</label>
                                    <input type="text" name="ar_subject" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="chance_country_id" id="chance_country_id" class="browser-default custom-select" >
                                    <option value="">Country</option>
                                    @foreach ($countries as $country)
                                    <option value='{{$country->id}}'>{{$country->ar_name}}
                  
                                    </option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="exampleInputPassword1" for="exampleCheck1">
                                        En field</label>
                                    <input type="text" name="en_field" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="exampleInputPassword1" for="exampleCheck1">
                                        Ar field</label>
                                    <input type="text" name="ar_field" class="form-control">
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example2">En Details </label>
                                    <div class="form-group">
                                        <textarea class="content" name="en_contact"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example2">Ar Details </label>
                                    <div class="form-group">
                                        <textarea class="content" name="ar_contact"></textarea>
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
                            <a href="{{ route('adminChance.index') }}" class="btn btn-dark mx-2"> Cancel</a>
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

</main>

<!--  Setup  -->

@endsection
@section('scripts')

@endsection