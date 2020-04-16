
@extends('Customer.webLayout.web')

@section('content')




<!--========== Start Banner ==========-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/slider2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">منظمات الأعمال </h1>
          </div>
        </div>
      </div>
    </section>
    <!--========== End Banner ==========-->



<!--========== الشعب التجارية ==========-->
    <section class="ftco-section ftco-wrap-about">
        <div class="container">
          <div class="row">
           
            <div class="col-md-12 ftco-animate">
              <div class="heading-section mb-5 my-5 my-md-0">
            </div>
            <div class="row">
                <div class="col-md-2 mr-3">
            <h5>النوع :</h5></div>
            <div class="col-md-3 mb-3 ml-3">
      
              <select name="organize_id" id="organize_id" class="browser-default custom-select" >
                                    <option value="">إختر النوع</option>
                                    @foreach ($organization as $organize)
                                    <option value='{{$organize->id}}'>
                                    @if(app()->getLocale()=='en')
                                            {{$organize->en_type}}
					@else
                    {{$organize->ar_type}}
					@endif   
                                    
                                    </option>
                                    @endforeach
                                </select>
            
            </div></div>
<div id="regionDetails">
    @include('Customer.encyclo.organizationDetails')
    
</div>
              
  
            </div>
          </div>
<!-- 
          <div class="row no-gutters my-5">
                <div class="col text-center">
                  <div class="block-27">
                    <ul>
                      <li><a href="#">&lt;</a></li>
                      <li class="active"><span>1</span></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&gt;</a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
        </div>
      </section>
      @endsection
@section('scripts')
<script>
    $(document).on('change', '#organize_id', function (e) {



$.ajax({
    type: 'GET',
 
    url : "{{ URL::to('fetch_organization') }}",
    data :
     {
        organization_id :$('#organize_id').val()
         },

    success:function(data){

        
    $('#regionDetails').html(data);
   
    },
 
});

});
    </script>
@endsection
	


