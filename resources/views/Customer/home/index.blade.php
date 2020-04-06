@extends('Customer.webLayout.web')

@section('content')
 <!--========== Start Slider ==========-->
 <section class="  home-slider owl-carousel js-fullheight">

@foreach($sliders as $slider)



<div class="slider-item js-fullheight" style="background-image: url({{ asset('uploads/slider/'.$slider->image) }});">
  <div class="overlay"></div>

  <div class=" slider-text-edited js-fullheight justify-content-center align-items-center"
    data-scrollax-parent="true">

    <div class="col-md-6 text-lg-right sasa-ani">
      <div class="sasa-ani-ani">
        <h1 class="mb-4 text-dark">
        @if(app()->getLocale()=='en')
                                            {{$slider->master_en_text}}
					@else
                    {{$slider->master_ar_text}}
					@endif        </h1>

        <p> @if(app()->getLocale()=='en')
                                            {{$slider->sub_en_text}}
					@else
                    {{$slider->sub_ar_text}}
					@endif</p>

        <button class="btn btn-primary  mr-3 ml-3 float-right font-weight-bold">
          <a href="shahbandr.cairochamber.org.eg" target="_blank"><span class="fa fa-angle-double-left"></span>
          {{ __('titles.more') }} </a>
        </button>
      </div>
    </div>

    <div class="col-md-6"></div>

  </div>
  <!--==================== End  edit slider-text sasa=================== -->
  <!-- </div> -->
</div>

@endforeach
</section>
<!--========== End Slider ==========-->
<!--========== start Adv section Slider ==========-->
<section class=" advertisement ">

<div class="container">



  <!-- Grid row -->
  <div class="row mt-5 ">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-3">

      <div class="cube">
        <div class="flippety wow fadeInDown" data-wow-delay="0.5s">
          <h1>إعلانك هنا </h1>

        </div>
        <div class="flop">
          <h2>إعلانك هنا </h2>
        </div>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-3">

      <div class="cube">
        <div class="flippety wow fadeInDown" data-wow-delay="0.7s">
          <h1>إعلانك هنا </h1>
        </div>
        <div class="flop">
          <h2>إعلانك هنا</h2>
        </div>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-3 ">

      <div class="cube">
        <div class="flippety wow fadeInDown" data-wow-delay="0.9s">
          <h1>إعلانك هنا</h1>
        </div>
        <div class="flop">
          <h2>إعلانك هنا</h2>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>



</div>
</section>
<!--========== End  Adv section ==========-->


<!--========== Start Tabs ==========-->
<section class="  mainNews">
<div class="container">
  <div class="ftco-search">
    <div class="row">
      <div class="col-md-12 nav-link-wrap">
        <div class="nav nav-pills d-flex   text-center justify-content-center align-items-center" id="v-pills-tab"
          role="tablist" aria-orientation="vertical">
          <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
            aria-controls="v-pills-1" aria-selected="true">
            <span>الأخبار</span>

          </a>

          <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
            aria-controls="v-pills-2" aria-selected="false">
            <span> الخدمات الإلكترونية</span>

          </a>

          <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
            aria-controls="v-pills-3" aria-selected="false">
            <span>خدمات الغرفة</span>
          </a>

          <!-- <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
            aria-controls="v-pills-4" aria-selected="false">
            <span>الفعاليات</span>
          </a> -->

          <!-- <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
            aria-controls="v-pills-5" aria-selected="false">
            <span>التدريبات و التوظيف</span>
          </a> -->


        </div>
      </div>
      <div class="col-md-12 tab-wrap">

        <div class="tab-content" id="v-pills-tabContent">

          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
            <div class="row d-flex align-items-stretch">
              <div class="col-md-1"></div>
              <div class=" col-md-10 col-xs-12">
                <div class=" panel panel-default">
                  <div class=" panel-heading mt-5">
                    <!-- <p id="newTitle"> الاخبار</p> -->
                  </div>
                  <div class=" panel-body ">
                    <div class="row">
                      <div class=" col-md-4 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s"
                        data-wow-delay="0s">
                        <div class="card ">
                          <img src="images/slider2.jpg" alt="...">
                          <div class="card-body">
                            <h5>الإعلان الأول</h5>
                            <p>تفاصيل الإعلان الأول في جزء الأخبار من الصفحة الرئيسية/تفاصيل الإعلان
                              الأول في جزء الأخبار من الصفحة الرئيسية</p>

                            <a href="news-one.html" class="btn btn-primary">المزيد</a>
                          </div>
                        </div>
                      </div>



                      <div class=" col-md-4 wow wow fadeInDown" data-wow-delay="0.4s">
                        <div class="card">
                          <iframe id="popup-youtube-player" width="100%" height="200"
                            src="https://www.youtube.com/embed/J06I7TD5QpI" frameborder="0" allowfullscreen="true"
                            allowscriptaccess="always"></iframe>

                          <div class="card-body">
                            <h5>الإعلان الأول</h5>
                            <p>تفاصيل الإعلان الأول في جزء الأخبار من الصفحة الرئيسية/تفاصيل الإعلان
                              الأول في جزء الأخبار من الصفحة الرئيسية</p>

                            <a href="news-one.html" class="btn btn-primary">المزيد</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 wow wow fadeInDown" data-wow-delay="0.6s">
                        <div class="card">
                          <img src="images/slider2.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5>الإعلان الأول</h5>
                            <p>تفاصيل الإعلان الأول في جزء الأخبار من الصفحة الرئيسية/تفاصيل الإعلان
                              الأول في جزء الأخبار من الصفحة الرئيسية</p>

                            <a href="news-one.html" class="btn btn-primary">المزيد</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 wow wow fadeInDown" data-wow-delay="0.8s" data-wow-delay="0s"">
                        <div class=" card">
                        <iframe id="popup-youtube-player" width="100%" height="200"
                          src="https://www.youtube.com/embed/J06I7TD5QpI" frameborder="0" allowfullscreen="true"
                          allowscriptaccess="always"></iframe>
                        <div class="card-body">
                          <h5>الإعلان الأول</h5>
                          <p>تفاصيل الإعلان الأول في جزء الأخبار من الصفحة الرئيسية/تفاصيل الإعلان
                            الأول في جزء الأخبار من الصفحة الرئيسية</p>

                          <a href="news-one.html" class="btn btn-primary">المزيد</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 wow wow fadeInDown" data-wow-delay="1s">
                      <div class="card">
                        <img src="images/slider2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5>الإعلان الأول</h5>
                          <p>تفاصيل الإعلان الأول في جزء الأخبار من الصفحة الرئيسية/تفاصيل الإعلان
                            الأول في جزء الأخبار من الصفحة الرئيسية</p>

                          <a href="news-one.html" class="btn btn-primary">المزيد</a>
                        </div>
                      </div>
                    </div>



                    <div class="col-md-4 wow wow fadeInDown" data-wow-delay="1.2s">
                      <div class="card">
                        <img src="images/slider2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5>الإعلان الأول</h5>
                          <p>تفاصيل الإعلان الأول في جزء الأخبار من الصفحة الرئيسية/تفاصيل الإعلان
                            الأول في جزء الأخبار من الصفحة الرئيسية</p>

                          <a href="news-one.html" class="btn btn-primary">المزيد</a>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>




            <div class="col-md-4 text-center"></div>

            <div class="col-md-4 text-center  mt-5">
              <p><a href="news.html" class="btn btn-primary w-100">عرض الكل</a></p>
            </div>


          </div>
        </div>
        <!--===================End News tab ====================-->

        <div class="tab-pane fade " id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab"
          style="padding: 50px 0 100px 0!important; ">
          <div class="row d-flex justify-content-center greyly " style="padding: 130px 0 !important; ">



            <div class="col-md-4 col-5 text-center electronicPayment">
              <a href="online-payment.html">
                <img src="images/icons/payment.png" class="img-fluid mb-4">
                <h5>خدمة <br> السداد الإلكتروني</h5>
              </a>
            </div>

            <div class="col-md-4 col-5 text-center electronicPayment">
              <a href="qr-code.html">
                <img src="images/icons/qr-code.png" class="img-fluid mb-4">
                <h5>خدمة <br> QR CODE</h5>
              </a>
            </div>

            <div class="col-md-4 col-5 text-center electronicPayment">
              <a href="blockchain.html">
                <img src="images/icons/blockchain.png" class="img-fluid mb-4">
                <h5>خدمة <br> BLOCKCHAIN</h5>
              </a>
            </div>



          </div>
        </div>

        <div class="tab-pane fade greyly" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab"
          style="padding: 80px 0 100px 0!important; margin-top: 70px;">
          <div class="row d-md-flex justify-content-center chamberServices" style="padding: 30px 0 !important; ">


            <div class="col-md-3 col-6 text-center ">
              <a href="#">
                <img src="images/icons/heartbeat.png" class="img-fluid mb-4">
                <h5>التأمين على حياة التجار و ممتلكاتهم</h5>
              </a>
            </div>



            <div class="col-md-3 col-6 text-center">
              <a href="#">
                <img src="images/icons/first-aid-kit.png" class="img-fluid mb-4">
                <h5>الرعاية الصحية للتجار</h5>
              </a>
            </div>
            <div class="col-md-3 col-6 text-center">
              <a href="retail-academy.html">
                <img src="images/icons/champr-serv-icon-3 (1).png" class="img-fluid mb-4">
                <h5>التوفيق والتحكيم التجاري  </h5>
              </a>
            </div>

            <div class="col-md-3 col-6 text-center">
              <a href="retail-academy.html">
                <img src="images/icons/education.png" class="img-fluid mb-4">
                <h5>مركز التميز</h5>
              </a>
            </div>


            <div class="col-md-4 col-6 text-center mt-5">
              <a href="#">
                <img src="images/icons/meeting.png" class="img-fluid mb-4">
                <h5>قاعة مؤتمرات غرفة القاهرة</h5>
              </a>
            </div>


            <div class="col-md-4 col-6 text-center mt-5">
              <a href="#">
                <img src="images/icons/global-community.png" class="img-fluid mb-4">
                <h5>نادي تجار العاصمة</h5>
              </a>
            </div>


            <div class="col-md-4 col-6 text-center mt-5">
              <a href="#">
                <img src="images/icons/business-people.png" class="img-fluid mb-4">
                <h5>الإرشاد التجاري</h5>
              </a>
            </div>



          </div>
        </div>

        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">

          <!--=======================End events tab=========================-->

          <!-- <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
            <div class="row justify-content-center">




            </div>
          </div> -->

        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--========== End Tabs ==========-->
<!--===========strat traning section =============-->
<!-- =======================calender section ===
================== -->
<section class="event-calender ">
<div class="container">
  <div class="section-header">
    <h3>الفعاليات</h3>

    <div class="row ">
<div class="col-md-1"></div>
      <div class="col-md-5 col-xs-12 " style=" margin-top: 40px; ">
        <div id="calendar" class="calendar-base wow fadeInDown"></div>
      </div>
      <!-- calendar-left -->
      <div class="col-md-5 col-xs-12 mr-3 wow fadeInDown" data-wow-delay="0.5s" style=" margin-top: 10px;">
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
          <div class="carousel-inner ">
            <div class="carousel-item active">
              <img class="d-block calendar-base" style="width: 100%; height: 300px; margin-top: 30px;"
                src="images/meeting_room_solution_image1-1024x768.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block calendar-base" style="width: 100%; height: 300px;  margin-top: 30px;"
                src="images/download-1-1024x768.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block calendar-base" style="width: 100%; height: 300px; margin-top: 30px;"
                src="images/e1e88e69109c22068694d3894e649370.jpg" alt="Third slide">
            </div>
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
      <div class="col-md-4 text-center"></div>
      <div class="col-md-4 text-center mt-5">
        <p><a href="conferences.html" class="btn btn-primary w-100">صفحة الفعاليات</a></p>
      </div>
    </div>
  </div></div>
</section>
<!-- ======================end calender================= -->
<!--========== End Magazin Parallex ==========-->
<section class=" joinTraining">
<div class="container ">
  <div class="section-header mb-4">
    <h3>عن الأكاديمية</h3>

  </div>
  <div class="row mt-5">
    <div class="col-md-4 col-12 wow fadeInDown">
      <div class="row h100   ml-1">

        <!-- <img src="images/form.jpg" class=" img-fullwidth h100 join-image " alt="alt text"> -->
        <iframe width="560" height="315" class="greyly  img-fullwidth h100 join-image "
          src="https://www.youtube.com/embed/J06I7TD5QpI" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-4 col-12">

      <div class="row h100 mb-4 ">
        <div class="col-md-11  mb-4 greyly  event wow fadeInDown" data-wow-delay="1s">
          <a href="#" class="text-black ">
            <h5 class="text-black cstm">خدمات التدريب</h5>
            <p class="eventP">خدمات التدريب بالغرفة التجارية بالقاهرة تعمل على إحداث طفرة حقيقية للقطاع الخاص
              ودعم إمكاناته عبر تقديم خدمات التدريب والتأهيل لمواجهة تحديات المستقبل ومتطلبات
              التنمية، بالإضافة إلى تقديم نشاطات تدريبية موجهة للتطوير المستمر لمهارات القطاع الخاص،
              وذلك للمساهمة الفعالة في تشجيع الشباب للانخراط والعمل في القطاع الخاص وذلك بعد تدريبه بالشكل
              الملائم والمناسب.

            </p>



            <div class="overlay ">
              <div class="text">
                <button class="btn btn-primary">
                  <a href="#">معرفة المزيد</a>
                </button>
              </div>
            </div>

          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12 ">
      <div class="row  mb-4 h100 ">
        <div class="col-md-11  mb-4 greyly  event wow fadeInDown" data-wow-delay="0.5s">
          <a href="#" class="text-black">
            <h5 class="text-black cstm">خدمات التوظيف</h5>
            <p class="eventP"> خدمات التدريب بالغرفة التجارية بالقاهرة تعمل على إحداث طفرة حقيقية للقطاع الخاص
              ودعم إمكاناته عبر تقديم خدمات التدريب والتأهيل لمواجهة تحديات المستقبل ومتطلبات
              التنمية، بالإضافة إلى تقديم نشاطات تدريبية موجهة للتطوير المستمر لمهارات القطاع الخاص،
              وذلك للمساهمة الفعالة في تشجيع الشباب للانخراط والعمل في القطاع الخاص وذلك بعد تدريبه بالشكل
              الملائم والمناسب.

            </p>



            <div class="overlay">
              <div class="text">
                <button class="btn btn-primary">
                  <a href="#">معرفة المزيد</a>
                </button>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>


 

  </div>
</div>

</section>

<!--===========end traning section =============-->

<section class="MagazinParallex">
<div class="section-header mb-4">
  <h3>تنويهات هامة</h3>
</div>

<div class="container adv mt-5">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div id="advCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

        <div class="carousel-inner">

          <div class=" row carousel-item active">
            <img src="images/adv/mixed-ethnic-group-business-people-21282326.jpg" alt="Image"
              style="max-width:100%;">
            <div class="advr">
              <div class="carousel-caption line-height:inherit">

                <div class="row">
                  <span class="col-md-3 col-2 banner-text-bg bounceInLeft aimated text-span">25 نوفمبر 2019</span>
                  <a href="advertesment.html"><span class="col-md-9 col-10 test-news">ملتقى الإدراج يناقش متطلبات الطرح وفرص السوق
                      والحوافز</span></a> </div>
                <!-- <a class="more" style="z-index:20" href="advertesment.html">المزيد...</a> -->


              </div>
            </div>
          </div>
          <!--.item-->

          <div class="row carousel-item">
            <img
              src="images/adv/44440440-smiling-business-team-holding-poster-against-modern-blue-and-white-room.jpg"
              alt="Image" style="max-width:100%;">
            <div class="advr">
              <div class=" carousel-caption line-height:inherit">

                <div class="row">
                  <span class="col-md-3 col-2 banner-text-bg bounceInLeft aimated text-span">25 نوفمبر 2019</span>
                  <a href="advertesment.html"><span class="col-md-9 col-10 test-news">ملتقى الإدراج يناقش متطلبات الطرح وفرص السوق
                      والحوافز</span></a> </div>

                <!-- <a class="more" style="z-index:20" href="advertesment.html">المزيد...</a> -->


              </div>
            </div>
          </div>
          <!--.item-->

          <div class="row carousel-item">
            <img src="images/adv/BS-Business-Group-Showing-Ethnic-6479327.jpg" alt="Image" style="max-width:100%;">
            <div class="advr">
              <div class="carousel-caption line-height:inherit">
                <div class="row">
                  <span class="col-md-3 col-2 banner-text-bg bounceInLeft aimated text-span">25 نوفمبر 2019</span>
                  <a href="advertesment.html"><span class="col-md-9 col-10 test-news">ملتقى الإدراج يناقش متطلبات الطرح وفرص السوق
                      والحوافز</span></a>
                </div>

                <!-- <a class="more" style="z-index:20" href="advertesment.html">المزيد...</a> -->


              </div>
            </div>
          </div>
          <!--.item-->
          <a class="latestNews" href="advertesment.html">آخر التنويهات</a>

        </div>
        <!--.carousel-inner-->
        <a data-slide="prev" href="#advCarousel" class="left carousel-control">
          <span class="ion-ios-arrow-back">
            <</span> </a> <a data-slide="next" href="#advCarousel" class="right carousel-control"><span
                class="ion-ios-arrow-forward">></span></a>
      </div>
      <!--.Carousel-->
    </div>
  </div>
</div>

</section>




@endsection
@section('scripts')
@endsection