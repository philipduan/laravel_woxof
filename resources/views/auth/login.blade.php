 @extends('layouts.app')

@section('content')
<div class="login">

        <form method="POST" action="{{ route('login') }}"class="login-form">
            @csrf      
            <div class="email">
                
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

           <div class="password">
               
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
    
            <button type="submit" class="login-button">
                {{ __('Login') }}
            </button>
            
        </form>
    
</div>
@endsection 

