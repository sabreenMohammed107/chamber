@extends('Customer.webLayout.web')

@section('content')

 <!--========== Start Banner ==========-->
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/slider2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread"> تسجيل فى الدورة
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--========== End Banner ==========-->


    <!--==========تسجيل  ==========-->
<section class="mb-5">
    <div class="container">
        <div class="section-header mb-4 mt-5">
            <h3>تفاصيل الدورة </h3>
    
          </div>
       
        <div class="row ">

            <div class="category-desc col-md-8 col-xs-12" >
                <div class="category-desc-pan  panel panel-default">
                   
                    <div class=" panel-body">
                        <div class="row greyly">
                            <div class=" col-md-4 ">
                              
                                    <img src="{{ asset('uploads/academy/'.$details->image) }}" alt="..." class="img-thumbnail" >
                                    
                                
                            </div>



                            <div class=" col-md-3 " style="border-left: 1px solid #CCC;">
 
                                <h4 class="card-title">مده الدورة </h4>
                                <p class="card-text">{{$details->course_hourse}}</p> 
                                <hr>
                                <p class="card-text"> ووجود ساعات إضافيه  . </p>
                            </div>
                            <div class="col-md-3">
                              
                                <h4 class="card-title">سعر الدورة </h4>
                                <p class="card-text">{{$details->course_cost}}</p>
                                <hr>
                                <p class="card-text">الحصول على شهادة معتمدة . </p>
                             
                            </div>
                        </div>
                      
                        <!-- <div class="row"> -->
                            <div class="container">
                                <div class="courses-details" >
                                <div class="row no-gutters" >
                                  
                                  <div class="col-sm-3">
                                    <ul class="nav nav-tabs tabs-right" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">وصف الدورة <i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> محتوى الدورة<i class="fa fa-angle-left"></i></a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">المستهدفون من الدورة <i class="fa fa-angle-left"></i></a></li>
                                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">تسجيل  بياناتك<i class="fa fa-angle-left"></i></a></li>
                                  </ul>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="reg-content">
                                    <div class="tab-content ">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                    @if(app()->getLocale()=='en')
                                                {!! $details->en_description !!}
                                                @else
                                                {!! $details->ar_description !!}
                                                @endif
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                    @if(app()->getLocale()=='en')
                                                {!! $details->content !!}
                                                @else
                                                {!! $details->content !!}
                                                @endif
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages"> <h4>المستهدفون من الدورة :</h4>
                                    @if(app()->getLocale()=='en')
                                                {!! $details->audience !!}
                                                @else
                                                {!! $details->audience !!}
                                                @endif
                                </div>
                                    <div role="tabpanel" class="tab-pane" id="settings"> <h4>سجل بياناتك </h4>
                                        <div class="contact-form">
                                            <form action="{{route('registerationForm')}}" method="post">
                                                <!-- Message Input Area Start -->
                                                <input type="hidden" name="course_id" value="{{$details->id}}">
                                                @csrf
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="name" id="name" placeholder="الاسم " required>
                                                            </div>
                                                       
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="mobile" id="name" placeholder="الموبايل  " required>
                                                            </div>
                                                      
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="email" id="name" placeholder="البريد الإلكتروني " required>
                                                            </div>
                                                      
                                                            <div class="form-group">
                                                                <textarea  class="form-control" name="notes"  cols="30" rows="3" placeholder="ملاحظات" required></textarea>
                                                            </div>
                                                    
                                                        <div class="col-12 mb-4">
                                                            <button type="submit" class="btn fancy-btn fancy-dark bg-transparent"> إرسال  </button>
                                                        </div>
                                                
                                               
                                            </form>
                                        </div>
                                    </div>
                                  </div></div>
                                  </div>
                               
                              </div>
                        
                              
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <div class=" col-md-3 col-xs-12 mr-5">
                <div class="  panel panel-default ">
                    <div class=" panel-heading mb-5">
                        <div class="panel-heading">

                        </div>
                    </div>
                    <div class=" panel-body ">

                        <!-- frist section -->
                        <div class="fees">
                            <h3>دورات أخرى </h3>
                            <div class="related-posts">
                                @foreach($coursegalleries as $gallery)
                                <div class="block" style="display: flow-root;">
                                    <div class="thumb lazyloaded"
                                       
                                        style="background-image: url({{ asset('uploads/academy/'.$gallery->image) }});">
                                    </div>
                                    <h5> 
                                    @if(app()->getLocale()=='en')
                                                {{$gallery->en_name}}
                                                @else
                                                {{$gallery->ar_name}}
                                                @endif
                                    </h5>
                                </div>
                               @endforeach 
                               
                            </div>



                        </div>
                    </div>
               
                    
                </div>
            </div></div> </div>  </section>



@include('Customer.academy.footeracademy')



@endsection