@extends('admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> </li>
    </ol>
</nav>

@endsection

@section('content')
<!-- home-slider -->
<div class="row">

    <div class="col-md-12">



        <div class="ms-panel">
            <div class="ms-panel-header d-flex justify-content-between">
                <h6>Announcements</h6>
                <a href="{{ route('announce.create') }}" class="btn btn-dark"> add</a>
            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="courseEval" class="dattable table table-striped thead-dark  w-100">
                        <thead>
                            <th>#</th>


                            <th>AR Title </th>
                            <th>EN Title</th>
                            <th>Announce Date </th>
                          
                            <th>Home Order</th>
                           
                            <th></th>


                        </thead>
                        <tbody>
                            @foreach($rows as $index => $row)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$row->ar_title}}</td>
                                <td>{{$row->en_title}}</td>
                                <td>
                        <?php $date = date_create($row->announce_date) ?>
                                    {{ date_format($date,"d-m-Y") }}
                                             </td>
                              
                                <td>{{$row->home_order}}</td>
                               
                                <td>
                                <a href="{{ route('announce.edit',$row->id) }}" class="btn btn-info d-inline-block" 
                           >edit</a>
              <a href="#" onclick="destroy('this Announcement','{{$row->id}}')" class="btn d-inline-block btn-danger">delete</a>
              <form id="delete_{{$row->id}}" action="{{ route('announce.destroy', $row->id) }}"  method="POST" style="display: none;">
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



    <!-- Add newspage Modal -->
    <div class="modal fade" id="add-Announcements" tabindex="-1" role="dialog" aria-labelledby="addclient">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">X

                </button>
                <h3>Add </h3>

                <div class="modal-body">


                    <div class="ms-auth-container row no-gutters">
                        <div class="col-12 p-3">
                            <form action="">
                                <div class="ms-auth-container row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="exampleInputPassword1" for="exampleCheck1"> AR Title</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="exampleInputPassword1" for="exampleCheck1">EN Title</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Date
                                            </label>
                                            <br>
                                            <input style="height: 40px; border-radius: 5px;" class="col-md-12 exampleInputPassword1" for="exampleCheck1" data-date-format="dd/mm/yyyy" type="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="exampleInputPassword1" for="exampleCheck1">home Order</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example2">Ar Text</label>
                                            <div class="form-group">
                                                <textarea class="content" name="example2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example2">EN Text</label>
                                            <div class="form-group">
                                                <textarea class="content" name="example3"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <br>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="" name="" checked>
                                            <label for="category">active</label>
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

</div>
<!-- HERE -->

</div>

@endsection