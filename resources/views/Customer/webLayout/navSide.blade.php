<!--========== Start Navbar ==========-->

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

<div class="container">

  <div class="row  navMobile">
    <!-- <div class="col-10"> -->
    <p><a href="index.html" class="font-weight-bold">الرئيسية</a></p>
    <!-- </div> -->

    <div class="col-2">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars" style="color: brown;"></span>
      </button>
    </div>
  </div>
  
  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class=" navbar-nav ">

      <li class="nav-item  "><a href="{{url('/index')}}" class="nav-link">{{ __('links.home') }}</a></li>

      <li class="nav-item dropdown show ">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          عن الغرفة
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="intro.html">كلمة رئيس الغرفة</a>
          <?php
          $current=now()->year;
          $prev=$current-1;
          $next=$current+3;
          ?>
          <a class="dropdown-item" href="{{url('/board')}}">مجلس إدارة الغرفة {{$prev}} - {{$next}}</a>
          <a class="dropdown-item" href="history.html">تاريخ غرفة تجارة القاهرة</a>
          <a class="dropdown-item" href="objectives.html">الرسالة والرؤية</a>

          <a class="dropdown-item" href="departments.html">ادارت الغرفة </a>
          <a class="dropdown-item" href="{{url('/socialres')}}">المسئولية المجتمعية</a>
        </div>
      </li>


      <li class="nav-item dropdown show ">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          المركز الإعلامي
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{url('/news')}}">أخبار الغرفة</a>
          <a class="dropdown-item" href="{{url('/album')}}">عدسة الغرفة ( أليوم الصور والفيديو
            )</a>
          <a class="dropdown-item" href="{{url('/announce')}}">تنويهات وإعلانات</a>
          <a class="dropdown-item" href="chahbander.html"> مجلة الشهبندر </a>

        </div>
      </li>

      <li class="nav-item dropdown show ">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          أكاديمية التجزئة
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="retail-academy.html">عن الأكاديمية</a>
          <a class="dropdown-item" href="academy-courses.html">الدورات وبرامج التدريب</a>
          <a class="dropdown-item" href="training.html"> التدريب من اجل التشغيل</a>





        </div>
      </li>


      <li class="nav-item dropdown show">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          خدمات الغرفة
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="excellence.html">مركز التميز</a>
          <a class="dropdown-item" href="medical-care.html"> الرعاية الصحية للتجار </a>
          <a class="dropdown-item" href="insurance.html">التأمين على حياة التجار وممتلكاتهم</a>
          <a class="dropdown-item" href="guidance.html">الإرشاد التجارى </a>
          <a class="dropdown-item" href="club.html">نادي تجار العاصمة</a>
          <a class="dropdown-item" href="hall.html">قاعة مؤتمرات غرفة القاهرة</a>
          <a class="dropdown-item" href="arbitration.html">التوفيق والتحكيم التجارى </a>
        </div>
      </li>

      <li class="nav-item dropdown show ">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          الشعب التجارية
        </a>


        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{url('/devision')}}">صفحات الشعب</a>
          <a class="dropdown-item" href="divisions.html">جدول مواعيد إجتماعات الشعب</a>

        </div>
      </li>
      
      <li class="nav-item"><a href="{{url('/conference')}}" class="dropdown-item nav-link ">مؤتمرات ومعارض</a></li>


      <li class="nav-item dropdown show ">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          فرص تجارية
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="chances.html">فرص تصديرية</a>
          <a class="dropdown-item" href="chances2.html">فرص استيرادية</a>
          <a class="dropdown-item" href="chances3.html">فرص استثمارية</a>
          <a class="dropdown-item" href="tenders.html">مناقصات و مزايدات</a>

        </div>
      </li>

      <li class="nav-item dropdown show ">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          خدمات إلكترونية
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="online-payment.html">السداد الإلكترونى</a>
          <a class="dropdown-item" href="qr-code.html">QR code خدمة</a>
          <a class="dropdown-item" href="blockchain.html">blockchain خدمة</a>

        </div>
      </li>
      <li class="nav-item dropdown show  ">
        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          لجنة المرأة والتجار
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="aboutCommitty.html">عن اللجنة</a>
          <a class="dropdown-item" href="committyExer.html">نشاطات اللجنة</a>

        </div>
      </li>

      <li class="nav-item"><a href="encyclo.html" class=" dropdown-item nav-link  ">أدلة هامة</a></li>
      <!-- <li class="nav-item"><a href="depts.html" class="nav-link  mr-2">إدارات الغرفة</a></li> -->
      <li class="nav-item "><a href="{{url('/contact')}}" class="nav-link mr-1">تواصل معنا</a></li>
    </ul>
  </div>
</div>
</nav>
<!--========== End Navbar ==========-->
