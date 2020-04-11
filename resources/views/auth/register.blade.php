
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
                <img src="{{ asset('webasset/images/cairo-chamber-logo.png')}}" style="width: 220px; height: 150px;margin-top: 30px; box-shadow: 2px 2px 2px 2px #4e4e4e;"> 

                </a>
               
            </div>

<div class="cont">
  
  <div class="form">
  <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                        
                                <input id="name" type="text" class="user" placeholder="{{ __('titles.name') }}" class="user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row">
                          
                                <input id="email" class="user" type="email" placeholder="{{ __('links.email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group row">
                           
                                <input id="password" class="pass" type="password"  placeholder="{{ __('links.password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                       
                                <input id="password-confirm" class="pass" placeholder="{{ __('links.confirmPassword') }}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group row mb-0">
                          
                                <button type="submit" class="login">
                                {{ __('links.login') }}
                                </button>
                           
                        </div>
                    </form>
   
  </div>
  

  
</div>
  </body>
</body>
</html>