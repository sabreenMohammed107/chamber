<!--========== Start Parteners ==========-->

<section class=" contact-section bg-light" id="parteners">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-5">
                    <div class="col-md-12 mb-5 text-center">
                        <h3 class="font-weight-bold">الرعاة</h3>
                        <hr class="TitlesHr" style="width: 3%; margin-top: 30px; margin-right: 47%">
                    </div>
                    @foreach($sponsors as $sponser)
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/academy/'.$sponser->image) }}" class="img-fluid wow fadeInDown animated" data-wow-delay="0.2s">
                    </div>
                    @endforeach



                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-5" style="border-right: 1px solid #CCC;">
                    <div class="col-md-12 mb-5 text-center">
                        <h3 class="font-weight-bold">شركاء النجاح </h3>
                        <hr class="TitlesHr" style="width: 3%; margin-top: 30px; margin-right: 47%">
                    </div>
                    @foreach($parteners as $partener)
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/academy/'.$partener->image) }}" class="img-fluid wow fadeInDown animated" data-wow-delay="0.2s">
                    </div>
                    @endforeach 

                </div>
            </div>
        </div>

    </div>
</section>
<!--========== End Parteners ==========-->
<hr>
<section id="contactNew" class="section-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h3> تواصل معنا</h3>
            <p class="text-center mt-5">هدفنا الوصول اليك في كل وقت ومكان. فإرضائك هو هدفنا.</p>
        </div>




        <div class="row contact-infoNew">

            <div class="col-md-4">
                <div class="contact-whatsapp wow fadeInDown animated" data-wow-delay="1s">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    <h3> واتساب :</h3>
                    <p><a ><span dir='ltr'>{{$contactAcademy->whatsapp}}</span></a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phoneNew wow fadeInDown animated" data-wow-delay="1.5s">
                    <i class="fa fa-phone" aria-hidden="true"></i>

                    <h3>تليفون :</h3>
                    <p> إدارة التدريب :<a ><span dir='ltr'>{{$contactAcademy->mangment_phone}}</span></a></p>
                    <p> إدارة التسويق : <a ><span dir='ltr'>{{$contactAcademy->marketing_phone}}</span></a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-emailNew wow fadeInDown animated" data-wow-delay="2s">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <!-- <i class="fa fa-email"></i> -->
                    <h3> بريد إلكتروني :</h3>
                    <p><a href="{{$contactAcademy->email}}">{{$contactAcademy->email}}</a></p>
                </div>
            </div>

        </div>
    </div>
</section>




</div>
</section>


<!--========== End Parteners ==========-->