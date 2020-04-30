 <div class="  panel panel-default">
                        <div class=" panel-heading mt-5">
                          
                        </div>
                        <div class=" panel-body">
                        <div class="row">
                      @foreach($conferences as $conference)
                                <div class="col-md-6">
                                    <div class="card">
                                        <a href="{{ url('conferenceDetails/'.$conference->id) }}">
                                        @if($conference->gallery->first() !=null && $conference->gallery->first()->order==1)
                                 @if($conference->gallery->first()->image!=null)
                                        <img src="{{ asset('uploads/conference/'.$conference->gallery->first()->image) }}" alt="...">
                                  @else
                                  <iframe id="popup-youtube-player" width="100%" height="200"
                                            src="{{$conference->gallery->first()->vedio}}" frameborder="0"
                                            allowfullscreen="true" allowscriptaccess="always"></iframe>
                                  @endif
                                  @else
                                  <img src="" alt="no image">
                                  @endif
                                   
                                            <h6>
                                            @if(app()->getLocale()=='en')
                                    {{$conference->en_title}}
					@else
                    {{$conference->ar_title}}
					@endif
                                      
                                           </h6>
                                            </a>
<p>
@if(app()->getLocale()=='en')
                                    {!! Str::limit($conference->en_text, 100,'') !!}
                    @else
                    <?php
          $output = nl2br(str_replace("&nbsp;", " ",$conference->ar_text));
          ?>
          {{str_limit(strip_tags($output),100,'...')}}
                  
					@endif
                                       
                                          
</p>
                                    </div>
                                </div>
                          
                               
                          

                            
                            @endforeach
                        </div></div>
                 
                      <!-- =============show All ========================= -->
                <div class="row">
                <div class="clearfix"></div>
                        <div id="categoryConference" class="blog-pagination justify-content-center" style="width:10% ; margin:auto ;margin_bottom:20px" >
						
						{!! $conferences->links() !!}
						
						</div>
              </div>