 <!-- Sidebar Navigation Left -->
 <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn >
      <a class=" pl-0 ml-0 text-center" href="{{ route('admin') }}"> <img src="{{ asset('adminasset/img/cairo-chamber-logo-footer.png')}}" 
      style="height:200px" alt="logo">
      </a>
    </div>
    <!-- main left  -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Home -->
      <li class="menu-item ">
        <a class="active" href="{{ route('admin') }}">
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
          <li> <a href="{{ route('slider.index') }}">Home_slider</a> </li>
          <li> <a href="{{ route('articel.index') }}">Chamber pages</a> </li>
            <li> <a href="{{ route('board.index') }}">Chamber Board</a> </li>
            <li> <a href="{{ route('socialResponsibility.index') }}">Social Responsibility</a> </li>
            <li> <a href="{{ route('section.index') }}">Sections</a> </li>
            <li> <a href="{{ route('social.index') }}">Social Media</a> </li>
            <li> <a href="{{ route('contactMsg.index') }}">Contacts Messages</a> </li>
            <li> <a href="{{ route('newsletter.index') }}">Email Newsletter</a> </li>
            <li> <a href="{{ route('adsImage.index') }}">Images Ads</a> </li>
            <li> <a href="{{ route('adsVedio.index') }}">Videos Ads</a> </li>
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
   <!--  devisions  -->
   <li class="menu-item">
     <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-devisions" aria-expanded="false" aria-controls="basic-devisions">
          <span><i class="material-icons fs-16">build</i>Chamber Devisions</span>
      </a>
      <ul id="basic-devisions" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
          <li> <a href="{{ route('devisions.index') }}">Devisions Data</a> </li>
          <li> <a href="{{ route('devMeeting.index') }}">Devisions Meetings</a> </li> 
         <li> <a href="{{ route('devNews.index') }}">Devisions News</a> </li>
         <li> <a href="{{ route('devBoard.index') }}">Devisions Board</a> </li>
         <li> <a href="{{ route('registerDev.index') }}">Register Devisions</a> </li>

      </ul>
  </li>
   <!-- Chamber pages   -->
   <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Usersdropdown" aria-expanded="false" aria-controls="contactsdropdown">
            <span><i class="material-icons fs-16">build</i>Chamber pages</span>
          </a>
            <ul id="Usersdropdown" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
             <li> <a href="{{ route('adminChance.index') }}">Commercial Chances</a> </li>
                <li> <a href="{{ route('conference.index') }}">Conferences</a> </li>
                <li> <a href="{{ route('activity.index') }}">Women Activities</a> </li>
                
               
             
            </ul>
          </li>
          <!-- end -->
      <!-- academy   -->
      <li class="menu-item">
       <a href="#" class="has-chevron" data-toggle="collapse" data-target="#contactsdropdown" aria-expanded="false" aria-controls="contactsdropdown">
            <span><i class="material-icons fs-16">build</i>Academy</span>
        </a>
        <ul id="contactsdropdown" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
            <li> <a href="{{ route('number.index') }}">Academy in Numbers</a> </li>
            <li> <a href="{{ route('academyGallery.index') }}">Gallery</a> </li>
            <li> <a href="{{ route('partener.index') }}">Partners</a> </li>
            <li> <a href="{{ route('client.index') }}">Sponsors</a> </li>
            <li> <a href="{{ route('academyData.index') }}">Contact Data</a> </li>

        </ul>
    </li>
     <!-- Encyclo  -->
  <li class="menu-item">
    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#callsdropdown" aria-expanded="false" aria-controls="callsdropdown">
    <span><i class="material-icons fs-16">call</i>Encyclo</span>
  </a>
    <ul id="callsdropdown" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
     <li> <a href="{{ route('brother.index') }}">Brothers Agreement</a> </li>
      <li> <a href="{{ route('commercialAgreement.index') }}">Commercial Agreements</a> </li>
      <li> <a href="{{ route('business-organizations.index') }}">Business Organizations</a> </li>
      <li> <a href="{{ route('study-report.index') }}">Studies / Reports</a> </li>
      <li> <a href="{{ route('embassies.index') }}">Embassies / Consulates</a> </li>
      <li> <a href="{{ route('decisions-laws.index') }}">Decisions / Laws</a> </li>
      <li> <a href="{{ route('ministries.index') }}">Ministries</a> </li>
      <li> <a href="{{ route('communications-guide.index') }}">Communications guide</a> </li>
      <li> <a href="{{ route('commmercial-topics.index') }}">Commmercial topics</a> </li>
      <li> <a href="{{ route('exporters-encyclopedia.index') }}">Exporters Encyclopedia</a> </li>
      <li> <a href="{{ route('countries-data.index') }}">Countries Data</a> </li>
     
      
      
      
      
     
    </ul>
  </li>
<!-- / Encyclo  -->
    </ul>
  </aside>