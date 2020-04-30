<div class="row">
    @if($newsLists!=null)
    @foreach($newsLists as $list)
    <div class=" col-md-6">
        <div class="card ">
            <a href="{{ url('newsDivisionDetails/'.$list->id) }}">
            @if($list->gallery->first() !=null && $list->gallery->first()->order==1)
                                 @if($list->gallery->first()->image!=null)
                                        <img src="{{ asset('uploads/meeting/'.$list->gallery->first()->image) }}" alt="...">
                                  @else
                                  <iframe id="popup-youtube-player" width="100%" height="200"
                                            src="{{$list->gallery->first()->vedio}}" frameborder="0"
                                            allowfullscreen="true" allowscriptaccess="always"></iframe>
                                  @endif
                                  @else
                                  <img src="" alt="no image">
                                  @endif
                <h6> @if(app()->getLocale()=='en')
                            {{$list->en_title}} 
					@else
                    {{$list->ar_title}} 
                    @endif</h6>
                    <p> 
                                            @if(app()->getLocale()=='en')
                                            {!! Str::limit($list->en_text, 70,'...') !!}
					@else
                    {!! Str::limit($list->ar_text, 100,'...') !!}
					@endif
                                                </p>
            </a>

        </div>
    </div>

@endforeach
@endif
</div>

<div class="row no-gutters my-5">
        <div class="col text-center" style="margin-right: 45%">
          <div id="newsDataPagination" class="block-27">
          {!! $newsLists->links() !!}
          </div>
        </div>
      </div>