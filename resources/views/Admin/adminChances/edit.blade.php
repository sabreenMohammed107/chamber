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
                <form action="{{route('adminChance.update',$row->id)}}" method="POST"  >
                            <div class="ms-auth-container row">
                                {{ csrf_field() }}

                                @method('PUT')
                        <div class="ms-auth-container row">
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chance Type</label>
                                        <select name="chance_type" class="form-control" id="">
                                            <option value="">
                                          
                                            {{$row->chance_type == 1 ? ' فرص إستيرادية' : '' }}
                                    {{$row->chance_type == 2 ? 'فرص تصديرية' : '' }}
                                    {{$row->chance_type == 3 ? 'فرص إستثمارية' : '' }}
                                    {{$row->chance_type == 4 ? 'مناقصات ومزايدات' : '' }}
                             
                                            </option>
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
                                    <?php $date = date_create($row->chance_date) ?>
                                        <input style="height: 40px; border-radius: 5px;" class="col-md-12 exampleInputPassword1" for="exampleCheck1" data-date-format="dd/mm/yyyy" name="announce_date" type="date" id="datepicker" value="{{ date_format($date,'Y-m-d') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="exampleInputPassword1"  for="exampleCheck1"> En Subject </label>
                                    <input type="text" name="en_subject" value="{{$row->en_subject}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="exampleInputPassword1"  for="exampleCheck1"> Ar Subject</label>
                                    <input type="text" name="ar_subject" value="{{$row->ar_subject}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="chance_country_id" id="chance_country_id" class="browser-default custom-select" >
                                    <option value="">  @if($row->country)
                                {{$row->country->ar_name}}
                                @endif</option>
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
                                    <input type="text" name="en_field" value="{{$row->en_field}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="exampleInputPassword1" for="exampleCheck1">
                                        Ar field</label>
                                    <input type="text" name="ar_field" value="{{$row->ar_field}}" class="form-control">
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example2">En Details </label>
                                    <div class="form-group">
                                        <textarea class="content" name="en_contact">{{$row->en_contact}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example2">Ar Details </label>
                                    <div class="form-group">
                                        <textarea class="content" name="ar_contact">{{$row->ar_contact}}</textarea>
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