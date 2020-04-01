@extends('Customer.webLayout.web')

@section('content')

 <!--========== Start Banner ==========-->
 <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webasset/images/slider2.jpg')}}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">أخبار  الغرفة</h1>
                </div>
            </div>
        </div>
    </section>
    <!--========== End Banner ==========-->


    <!--========== Start تنويهات و إعلانات ==========-->
    <section class="about-Adv">
        <!-- Sidebar -->
        <div class="container">
            <div class="row ">

                <div class="category-desc col-md-8 col-xs-12">
                    <div class="category-desc-pan  panel panel-default">
                        <div class="test panel-heading">
                            <p id="newTitle mr-5"> الاخبار</p>
                        </div>
                        <div class="fees panel-body" style="display: flex;flex-wrap: wrap;">
                           @foreach($news as $new)
                                    <div class="card" style=" flex-grow: 1;width: 31%;margin:0 5px 5px">
                                    @if($new->gallery->first() !=null && $new->gallery->first()->order==1)
                                 @if($new->gallery->first()->image!=null)
                                        <img src="{{ asset('uploads/news/'.$new->gallery->first()->image) }}" alt="...">
                                  @else
                                  <iframe id="popup-youtube-player" width="100%" height="200"
                                            src="{{$new->gallery->first()->vedio}}" frameborder="0"
                                            allowfullscreen="true" allowscriptaccess="always"></iframe>
                                  @endif
                                  @else
                                  <img src="" alt="no image">
                                  @endif
                                        <div class="card-body">
                                            <h5>{{$new->ar_title}}</h5>
                                            <p>  {{ Str::limit($new->ar_text, 100,'...') }}</p>

                                            <a href="{{ url('newsDetails/'.$new->id) }}" class="btn btn-primary">المزيد</a>
                                        </div>
                                    </div>
                              
                                   
@endforeach


                               
                                  
                        
                     

                         



                        </div>
                        <div class="clearfix"></div>
                        <div id="category" class="blog-pagination justify-content-center"  >
						
						{!! $news->links() !!}
						
						</div>
                    </div>
                </div>

                <div class=" col-md-3 col-xs-12 mr-5">
                    <div class="  panel panel-default ">
                        <div class=" panel-heading mb-5" >
                            <div class="panel-heading" >
                               
                            </div>
                        </div>
                        <div class=" panel-body ">

                            <!-- frist section -->
<div class="fees">

                                    <iframe id="popup-youtube-player" width="100%" height="200px"
                                        src="https://www.youtube.com/embed/of_wMCOZsms" frameborder="0"
                                        allowfullscreen="true" allowscriptaccess="always"></iframe>
                                    <div>
                                        <h5>يلا رومانسية يلا تركى </h5>
                                        <p>حياه ومراد .. كان كل حاجه </p>



                                    </div>
                               
                          

<!-- second section -->
<div class=" panel-heading">
    <p  class="head-p bg-dark"> أهم الاخبار </p>
</div>
<div class="panel-body">
@foreach($newsRandom as $news)
    <div class="fees">
    <div class="row ">
      
        <a href="{{ url('newsDetails/'.$news->id) }}" target="_blank">
        <p  style="float: left;">  
        @if($news->gallery->first()!=null && $news->gallery->first()->image!=null)
                                        <img src="{{ asset('uploads/news/'.$news->gallery->first()->image) }}" alt="..." style="float: right; height: 70px;
          width: 62px; margin-right: 15px;">
                                  @else
                                  <img src="{{ asset('webasset/images/screen.png')}}"  style="float: right; height: 70px;
          width: 62px; margin-right: 15px;">
                                  @endif
        
         
          {{ Str::limit($news->ar_text, 50,'') }}
 
         </p></a>
        </div>
    </div>
  @endforeach
   
    
        <div class=" panel-heading">
          <p  class="head-p bg-dark"> إعلانات </p>
      </div>
      <div class="panel-body">
          <div class="fees">
         
            
              <!-- <a href="advertesment.html" target="_blank">
             
                <img src="images/slider1.jpg" width="100%" height="200px"></a> -->
                <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                  <div class="carousel-inner ">
                    <div class="carousel-item active">
                      <img class="d-block " style="width: 100%; height: 200px; " src="images/meeting_room_solution_image1-1024x768.jpg"
                        alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block " style="width: 100%; height: 200px; " src="images/download-1-1024x768.jpeg"
                        alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block " style="width: 100%; height: 200px; " src="images/e1e88e69109c22068694d3894e649370.jpg"
                        alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" >
                      <i class="fa fa-angle-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true" >
                      <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only" >Next</span>
                  </a>
                </div>
           
          </div>
  
  
                                  
                          </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--========== End News ==========-->



@endsection
@section('scripts')
@endsection