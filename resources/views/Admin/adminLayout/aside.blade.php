 <!-- Sidebar Navigation Left -->
 <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn >
      <a class=" pl-0 ml-0 text-center" href="home.html"> <img src="{{ asset('adminasset/img/cairo-chamber-logo-footer.png')}}" 
      style="height:200px" alt="logo">
      </a>
    </div>
    <!-- main left  -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Home -->
      <li class="menu-item ">
        <a class="active" href="home.html">
          <span><i class="material-icons fs-16">home</i>Home </span>
        </a>
      </li>
      <!-- /Home -->
      <!-- Setup  -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#create" aria-expanded="false"
          aria-controls="tables">
          <span><i class="material-icons fs-16">build</i>Setup</span>
        </a>
        <ul id="create" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
          <li> <a href="home_slider.html">Home_slider</a> </li>
      </ul>
  </li>
  <!--  Setup  -->
  <li class="menu-item">
     <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
          <span><i class="material-icons fs-16">build</i>Media Center</span>
      </a>
      <ul id="basic-elements" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
          <li> <a href="{{ route('news.index') }}">news_page</a> </li>
          <li> <a href="{{ route('album.index') }}">Chamber Gallery</a> </li>
          <li> <a href="{{ route('announce.index') }}">Announcements</a> </li>

      </ul>
  </li>
      <!-- academy   -->
      <li class="menu-item">
       <a href="#" class="has-chevron" data-toggle="collapse" data-target="#contactsdropdown" aria-expanded="false" aria-controls="contactsdropdown">
            <span><i class="material-icons fs-16">build</i>Academy</span>
        </a>
        <ul id="contactsdropdown" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
            <li> <a href="{{ route('number.index') }}">Academy in Numbers</a> </li>
            <li> <a href="Gallery.html">Gallery</a> </li>
            <li> <a href="{{ route('partener.index') }}">Partners</a> </li>
            <li> <a href="{{ route('client.index') }}">Sponsors</a> </li>
            <li> <a href="Contact Data.html">Contact Data</a> </li>

        </ul>
    </li>
    </ul>
  </aside>