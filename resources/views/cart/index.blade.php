@extends('layouts.app')

@section('content')

{{-- ログインしないとアクセスできない --}}
@if(!Auth::guest())

    <!-- Page Content -->
    <div class="container">

            <br>
             <h1 class="my-4">{{$user->name}}'s Cart</h1>
             <h1 class="my-4">{{count($carts)}} items</h1>

            <!-- Portfolio Item Row -->
            <div class="row">            

             @foreach($carts as $cart)
             {{-- userごとに表示 --}}
             @if(Auth::user()->id == $cart->user_id)

                 <div class="col-md-12">
                     <div class="row">
                      <div class="col-md-4">
                        <img class="img-fluid" src="/product_image/{{$cart->product_image}}" alt="" width="150px">
                      </div>
                      <div class="col-md-8">
                        <h3>{{$cart->name}}</h3>
                        <h5>qty:{{$cart->qty}}</h5>
                        <h5>Price:＄{{$cart->price}}</h5><h5>size:{{$cart->size}}</h5>
                        <a href="#" class="btn btn-primary">Add</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </div>
                     </div>
                    <hr>
                 </div>
             @endif
             @endforeach

                 <div class="container">
                   <div class="text-center">
                     <br>
                     <h2>Total Amount:</h2>
                     <h2>Quantity:{{count($carts)}}</h2>
                     {{-- <h2>Total price:{{$totalprice)}}</h2> --}}
                     <a href="#" class="btn btn-primary">Check Out</a>
                     <br><br><br>
                   </div>
                 </div>

             </div>
     </div>

 @else

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif



@endsection