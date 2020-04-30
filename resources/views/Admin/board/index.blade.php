@extends('Admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
        <li class="breadcrumb-item active" aria-current="page"> {{ __('Chamber-Board') }} </li>
    </ol>
</nav>

@endsection

@section('content')

 <!-- home-slider -->
 <div class="row">

<div class="col-md-12">



    <div class="ms-panel">
        <div class="ms-panel-header d-flex justify-content-between">
            <h6>Chamber-Board</h6>
            <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#add-news-page"> add</a>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                <table id="courseEval" class="dattable table table-striped thead-dark  w-100">
                    <thead>
                        <th>#</th>
                        

                        <th>From Year</th>
                        <th>to Year</th>
                        <th>Manager En Name</th>
                        <th>Manager ar Name</th>
                       
                        <th>Current</th>
                        <th></th>
                        

                    </thead>
                    <tbody>

                    @foreach($rows as $index=> $row)
                            <tr>
                                <td>{{$index+1}}</td>

                           
                            <td>{{$row->from_date}}</td>
                            <td>{{$row->to_date}}</td>
                            <td>{{$row->manager_en_name}}</td>
                            <td>{{$row->manager_ar_name}} </td>
                            
                          
                            @if($row->current == 1)
                          <td><i class="fas fa-check"></i></td>
                          @else
                          <td><i class="fas fa-times"></i></td>
                          @endif
                          

                            <td>
                            <a href="{{ route('board.edit', $row->id) }}" class="btn btn-info d-inline-block" 
                >edit</a>
              <a href="#" onclick="destroy('this Data','{{$row->id}}')" class="btn d-inline-block btn-danger">delete</a>
              <form id="delete_{{$row->id}}" action="{{ route('board.destroy', $row->id) }}"  method="POST" style="display: none;">
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
<div class="modal fade" id="add-news-page" tabindex="-1" role="dialog" aria-labelledby="addclient">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">X

            </button>
            <h3>Add </h3>

            <div class="modal-body">


                <div class="ms-auth-container row no-gutters">
                    <div class="col-12 p-3">
                    <form action="{{route('board.store')}}" method="POST"  >
                  <div class="ms-auth-container row">
                  {{ csrf_field() }}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="exampleInputPassword1" for="exampleCheck1">from year</label>
                                        <input type="date" name="from_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="exampleInputPassword1" for="exampleCheck1">to year</label>
                                        <input type="date" name="to_date" class="form-control">
                                    </div>
                                </div>


                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  class="exampleInputPassword1" for="exampleCheck1">Manage en Name</label>
                                        <input type="text" name="manager_en_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="exampleInputPassword1" for="exampleCheck1">Manage Ar Name</label>
                                        <input type="text" name="manager_ar_name" class="form-control">
                                    </div>
                                </div>
                         
                               
                              
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="" name="current" checked>
                                        <label for="category">Current</label>
                                    </div>

                                </div>
                               

                                
                              

                               
                            <div class="input-group d-flex justify-content-end text-center">
                                <input type="button" value="Cancel" class="btn btn-dark mx-2"
                                    data-dismiss="modal" aria-label="Close">
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