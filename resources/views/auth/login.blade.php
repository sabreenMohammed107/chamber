
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('webasset/css/login.css')}}">
<body>

<div class="container">
                <a  href="{{ url('/') }}">
                <img src="{{ asset('webasset/images/cairo-chamber-logo.png')}}" style="width: 220px; height: 150px;margin-top: 30px;box-shadow: 2px 2px 2px 2px #4e4e4e;"> 
			
				</a>
			
               
            </div>
		
<div class="cont">
  
  <div class="form">
    <form method="POST" action="{{ route('login') }}">
                        @csrf
      <h1>{{ __('links.login') }}</h1>
	  <input id="email" type="email"  placeholder="{{ __('links.email') }}" class="user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
	  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     <input id="password" type="password"  placeholder="{{ __('links.password') }}" class="pass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	  <button class="login">{{ __('links.login') }}</button>
	 
	
	</form>
	@guest
                         
						 @if (Route::has('register'))
   <button class="login"><a href="{{ route('register') }}" style="color:aliceblue !important">{{ __('links.registerLogin') }}</a></button>
   @endif
					 @else
					 @endguest
  </div>
  

  
</div>
  </body>
</body>
</html>