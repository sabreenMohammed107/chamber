@extends('Customer.webLayout.web')

@section('content')
<!--========== Start Banner ==========-->
<!--========== Start Banner ==========-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/slider2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">
            @if(app()->getLocale()=='en')
                                            {{$section->en_name}}
					@else
                    {{$section->ar_name}}
					@endif
            </h1>
          </div>
        </div>
      </div>
    </section>
    <!--========== End Banner ==========-->
      <!--========== End Banner ==========-->
<!--========== الإدارة ==========-->
<section class="ftco-section ftco-wrap-about">
        <div class="container">
          <div class="row">

            <div class="col-md-2">
                <img src="{{ asset('uploads/sections/'.$section->image) }}" class="img-thumbnail">
            </div>
           
            <div class="col-md-12 ftco-animate">
            @if(app()->getLocale()=='en')
                                            {!!$section->en_text!!}
					@else
                    {!!$section->ar_text!!}
					@endif
  
            </div>
          </div>
        </div>
      </section>

		




@endsection
@section('scripts')
@endsection
