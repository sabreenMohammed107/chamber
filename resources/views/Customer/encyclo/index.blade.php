@extends('Customer.webLayout.web')

@section('content')

<!--========== Start Banner ==========-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/slider2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">أدلة هامة
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--========== End Banner ==========-->


    <!--========== أدلة هامة ==========-->
    <section class="ftco-section">
        <div class="container">
            <div class="section-header mb-4">
                <h3>   أدلة هامة</h3>
        
              </div>
             
            <div >

                <!-- <div class="row">
                    <div class="col-md-1"></div>
                    <div class="container-1 mr-3" >
                      <span class="icon"><i class="fa fa-search"></i></span>
                      <input type="text" id="mySearch-deptt"  onkeyup="myFunctiondept()" placeholder=" ..إبحث هنا .." title="Type in a category">
                     
            
                  </div> -->
                    <!-- <div class="col-md-3 mt-3 mb-4">
                        <input type="text" id="mySearch-dept" style="width: 100%; border-radius: 5px;"
                            onkeyup="myFunctiondept()" placeholder=" ..إبحث فى الأدله.." title="Type in a category">

                    </div> -->
                <!-- </div> -->

                <nav>
                    <ul id="myMenu2">
                        <li><a href="{{url('/brother')}}" class="text-dark text-decoration"> اتفاقات التآخي
                            </a> </li>
                        <li><a href="{{url('/region')}}" class="text-dark text-decoration"> بيانات الدول
                            </a></li>
                        <li><a href="{{url('/commerical')}}" class="text-dark text-decoration"> اتفاقات تجارية وقعتها مصر
                            </a></li>
                        <li><a href="{{url('/organization')}}" class="text-dark text-decoration">
                                منظمات الأعمال </a></li>
                        <li><a href="{{url('/embassy')}}" class="text-dark text-decoration">
                                سفارات و قنصليات
                            </a>
                        </li>
                        <li><a href="{{url('/studies')}}" class="text-dark text-decoration">
                          دراسات وتقارير
                        </a>
                    </li>
                    <li><a href="{{url('/laws')}}" class="text-dark text-decoration">
قوانين  وقرارات                       </a>
                  </li>
                        <li><a href="{{url('/ministry')}}" class="text-dark text-decoration">
                            وزارات و هيئات حكومية
                        </a>
                        </li>
                        <li><a href="{{url('/communication')}}" class="text-dark text-decoration">
                            أدلة الاتصالات
                        </a></li>
                        <li><a href="{{url('/topics')}}" class="text-dark text-decoration">
                            موضوعات تجارية
                        </a></li>
                        <li><a href="{{url('/expencyclopedia')}}" class="text-dark text-decoration">
                            موسوعة المصدرين
                        </a></li>
                       


                    </ul>
                </nav>
            </div>


        </div>
    </section>







@endsection
@section('scripts')
@endsection