<div class="category-desc-pan  panel panel-default">
  <input type="hidden" id="confId" value="{{$conferenceObj->id}}">
  <div class="test panel-heading mt-3">
    <p id="newTitle mr-5 mt-3">
      @if(app()->getLocale()=='en')
      {{$conferenceObj->type->en_name}} - {{$conferenceObj->en_title}} - {{$conferenceObj->country->en_name}}
      @else
      {{$conferenceObj->type->name}} - {{$conferenceObj->ar_title}} - {{$conferenceObj->country->ar_name}}
      @endif
    </p>
    <h6>
      <?php $date = date_create($conferenceObj->conference_date) ?>
      {{ date_format($date,"d-m-Y") }}

    </h6>
  </div>
  <div class="fees panel-body">

    <div class="articleimg">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner ">
          @foreach($conferenceGallery as $key => $gallery)
          <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            @if($gallery !=null && $gallery->image!=null)
            <img src="{{ asset('uploads/conference/'.$gallery->image) }}" alt="{{$gallery->ar_title}}" title="{{$gallery->ar_title}}">
            @else
            <iframe width="560" height="315" src="{{$gallery->vedio}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif

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
    <div class="outlineSocialShare">
      <i class="fa fa-twitter"></i>

      <i class="fa fa-facebook"></i>
      <i class="fa fa-envelope"></i>
    </div>
    <div class="newsStory">

      <p>
        @if(app()->getLocale()=='en')
        {!! $conferenceObj->en_text !!}
        @else
        {!! $conferenceObj->ar_text !!}
        @endif
      </p>
    </div>

  </div>
</div>
<div class="test panel-heading">
  <p id="newTitle mr-5 mt-3" class="subTest"> {{ __('titles.relatedConference') }} </p>
</div>
<div class="newsExt">
  <div class="row">
    <div class="container text-center">

      <!-- sabreen pagination -->
      <div class="fees panel-body" style="display: flex;flex-wrap: wrap;">
        @foreach($relatedConference as $galleryConf)


        <div class="card mb-2" style=" flex-grow: 1;width: 31%;margin:0 5px 5px">
          @if($galleryConf->relatedConferences->gallery!=null && $galleryConf->relatedConferences->gallery->first()!=null)
          <img class="card-img-top" src="{{ asset('uploads/conference/'.$galleryConf->relatedConferences->gallery->first()->image) }}" alt="محمد أبو العينين - صورة أرشيفية" title="محمد أبو العينين - صورة أرشيفية">
          @else
          <img src="{{ asset('webasset/images/screen.png')}}" class="img_imp">
          @endif

          <div class="card-body">

            <a href="{{ url('conferenceDetails/'.$galleryConf->relatedConferences->id) }}">
              <p class="card-text">
                @if(app()->getLocale()=='en')
                {!! Str::limit($galleryConf->relatedConferences->en_text, 100,'') !!}
                @else
                <?php
                $output = nl2br(str_replace("&nbsp;", " ", $galleryConf->relatedConferences->ar_text));
                ?>
                {{str_limit(strip_tags($output),100,'...')}}

                @endif


              </p>
            </a>

          </div>


        </div>
        @endforeach
      </div>
      <div class="clearfix"></div>
      <div id="categoryConfer" class="blog-pagination justify-content-center" style="width:10% ; margin:auto ;margin_bottom:20px">

        {!! $relatedConference->links() !!}

      </div>



      <!-- End sabreen pagination -->

    </div>
  </div>
</div>