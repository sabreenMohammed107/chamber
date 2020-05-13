<div class="category-desc col-md-8 col-xs-12">
  <div class="category-desc-pan  panel panel-default">
    <div class="test panel-heading">
      <p id="newTitle mr-5">

      </p>
    </div>
    <div class=" panel-body" >
    <div class="row">
      @foreach($announces as $announce)
      @if((app()->getLocale()=='en' && $announce->en_title )||(app()->getLocale()=='ar' &&$announce->ar_title ))
      <div class=" col-md-4 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s" data-wow-delay="0s">
      <div class="card" >
        @if($announce->gallery->first() !=null && $announce->gallery->first()->order==1)
        @if($announce->gallery->first()->image!=null)
        <img src="{{ asset('uploads/announce/'.$announce->gallery->first()->image) }}" alt="...">
        @else
        <iframe id="popup-youtube-player" width="100%" height="200" src="{{$announce->gallery->first()->vedio}}" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>
        @endif
        @else
        <img src="" alt="no image">
        @endif
        <div class="card-body">
        <div style="position: relative;height: 70px ;border-bottom: 1px solid #ccc;">
            <a href="{{ url('announceDetails/'.$announce->id) }}">
          <h5>
            @if(app()->getLocale()=='en')
            {{$announce->en_title}}
            @else
            {{$announce->ar_title}}
            @endif
          </h5>
            </a></div>
          <p>
          @if(app()->getLocale()=='en')
            <?php
            $output = nl2br(str_replace("&nbsp;", " ", $announce->en_text));
            ?>
            {{str_limit(strip_tags($output),100,'...')}}
            @else
            <?php
            $output = nl2br(str_replace("&nbsp;", " ", $announce->ar_text));
            ?>
            {{str_limit(strip_tags($output),100,'...')}}

            @endif
          </p>
        
          <a href="{{ url('announceDetails/'.$announce->id) }}" class="btn btn-primary">{{ __('titles.more') }}</a>
        </div>
      </div>
      </div>
@endif
      @endforeach











    </div>
    <div class="clearfix"></div>
    <div id="announce" class="blog-pagination justify-content-center" style="width:10% ; margin:auto ;margin_bottom:20px">

      {!! $announces->links() !!}

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

        @foreach($adsVedio as $key => $vedio)
        <iframe id="popup-youtube-player" width="100%" height="200px" src="{{$vedio->vedio_url}}" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>
        <div>
          <h5> @if(app()->getLocale()=='en')
            {{$vedio->en_title}}
            @else
            {{$vedio->ar_title}}
            @endif
          </h5>
          <p> @if(app()->getLocale()=='en')
            {{$vedio->en_subtitle}}
            @else
            {{$vedio->ar_subtitle}}
            @endif</p>



        </div>
        @endforeach


        <!-- second section -->
        <div class=" panel-heading">
          <p class="head-p bg-dark"> {{ __('titles.importNews') }}

          </p>
        </div>
        <div class="panel-body">
          @foreach($announceRandom as $announcess)
          <div class="fees">
            <div class="row ">
              <style>

              </style>
              <a href="{{ url('announceDetails/'.$announcess->id) }}" target="_blank">
                <p style="float: left; margin: 0 7px;">

                  @if($announcess->gallery->first()!=null && $announcess->gallery->first()->image!=null)
                  <img src="{{ asset('uploads/announce/'.$announcess->gallery->first()->image) }}" alt="..." class="img_imp">
                  @else
                  <img src="{{ asset('webasset/images/screen.png')}}" class="img_imp">
                  @endif

                  @if(app()->getLocale()=='en')
                  <?php
                  $output = nl2br(str_replace("&nbsp;", " ", $announcess->en_text));
                  ?>
                  {{str_limit(strip_tags($output),50,'...')}}
                  @else
                  <?php
                  $output = nl2br(str_replace("&nbsp;", " ", $announcess->ar_text));
                  ?>
                  {{str_limit(strip_tags($output),50,'...')}}

                  @endif


                </p>
              </a>
            </div>
          </div>
          @endforeach


          <div class=" panel-heading">
            <p class="head-p bg-dark"> {{ __('titles.advert') }}

            </p>
          </div>
          <div class="panel-body">
            <div class="fees">


              <!-- <a href="advertesment.html" target="_blank">
             
                <img src="images/slider1.jpg" width="100%" height="200px"></a> -->
              <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner ">
                  @foreach($ads as $key => $adsObj)
                  <div class="carousel-item {{$key == 0 ? 'active' : '' }}">

                    <img class="d-block " style="width: 100%; height: 200px; " src="{{ asset('uploads/ads/'.$adsObj->image) }}" alt="First slide">
                  </div>
                  @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                  </span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>



          </div>
        </div>
      </div>