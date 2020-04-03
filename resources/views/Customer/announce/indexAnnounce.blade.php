
                <div class="category-desc col-md-8 col-xs-12">
                    <div class="category-desc-pan  panel panel-default">
                        <div class="test panel-heading">
                            <p id="newTitle mr-5">  {{ __('titles.announce') }}
                  
                            </p>
                        </div>
                        <div class="fees panel-body" style="display: flex;flex-wrap: wrap;">
                           @foreach($announces as $announce)
                                    <div class="card" style=" flex-grow: 1;width: 31%;margin:0 5px 5px">
                                    @if($announce->gallery->first() !=null && $announce->gallery->first()->order==1)
                                 @if($announce->gallery->first()->image!=null)
                                        <img src="{{ asset('uploads/announce/'.$announce->gallery->first()->image) }}" alt="...">
                                  @else
                                  <iframe id="popup-youtube-player" width="100%" height="200"
                                            src="{{$announce->gallery->first()->vedio}}" frameborder="0"
                                            allowfullscreen="true" allowscriptaccess="always"></iframe>
                                  @endif
                                  @else
                                  <img src="" alt="no image">
                                  @endif
                                        <div class="card-body">
                                            <h5>
                                            @if(app()->getLocale()=='en')
                                            {{$announce->en_title}}
					@else
                    {{$announce->ar_title}}
					@endif
                                            </h5>
                                            <p> 
                                            @if(app()->getLocale()=='en')
                                            {{ Str::limit($announce->en_text, 70,'...') }}
					@else
                    {{ Str::limit($announce->ar_text, 100,'...') }}
					@endif
                                                </p>
{{$announce->id}}
                                            <a href="{{ url('announceDetails/'.$announce->id) }}" class="btn btn-primary">{{ __('titles.more') }}</a>
                                        </div>
                                    </div>
                              
                                   
@endforeach


                               
                                  
                        
                     

                         



                        </div>
                        <div class="clearfix"></div>
                        <div id="announce" class="blog-pagination justify-content-center" style="width:10% ; margin:auto ;margin_bottom:20px" >
						
						{!! $announces->links() !!}
						
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
    <p  class="head-p bg-dark"> {{ __('titles.importNews') }} 

                </p>
</div>
<div class="panel-body">
@foreach($announceRandom as $announcess)
    <div class="fees">
    <div class="row ">
      <style>
         
          </style>
        <a href="{{ url('announceDetails/'.$announcess->id) }}" target="_blank">
        <p  style="float: left;">  
        
        @if($announcess->gallery->first()!=null && $announcess->gallery->first()->image!=null)
                                        <img src="{{ asset('uploads/announce/'.$announcess->gallery->first()->image) }}" alt="..." class="img_imp">
                                  @else
                                  <img src="{{ asset('webasset/images/screen.png')}}"  class="img_imp">
                                  @endif
        
                                  @if(app()->getLocale()=='en')
                                  {{ Str::limit($announcess->en_text, 50,'') }}
					@else
                    {{ Str::limit($announcess->ar_text, 50,'') }}
                    @endif
        
 
         </p></a>
        </div>
    </div>
  @endforeach
   
    
        <div class=" panel-heading">
          <p  class="head-p bg-dark"> {{ __('titles.advert') }} 
        
          </p>
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