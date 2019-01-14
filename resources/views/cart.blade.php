@extends('layouts.app')

@section('content')

{{-- ログインしないとアクセスできない --}}
@if(!Auth::guest())

    <!-- Page Content -->
    <div class="container">

            <br>
             <h1 class="my-4">Your Cart</h1>
             <h1 class="my-4">3 items</h1>

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                    <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" src="/product_image/clothes1.png" alt="" width="150px">
                    </div>
                    <div class="col-md-8">
                        {{-- 中間テーブル？からデータをfetchするイメージで --}}
                        <h2>Title</h2>
                        <h2>Quantity</h2>
                        <h2>Price</h2>
                        <a href="#" class="btn btn-primary">Add</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                    </div>
                    <hr>
                </div>

                <div class="col-md-4" style="border:dashed;">
                    {{-- メソッドを定義して使う --}}
                <h2>Total Amount</h2>
                <h2>Quantity</h2>
                <h2>Total price</h2>
                <a href="#" class="btn btn-primary">Check Out</a>
                </div>

                <div class="col-md-8">
                        <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid" src="/product_image/clothes1.png" alt="" width="150px">
                        </div>
                        <div class="col-md-8">
                            <h2>Title</h2>
                            <h2>Quantity</h2>
                            <h2>Price</h2>
                            <a href="#" class="btn btn-primary">Add</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                        </div>
                        <hr>
                    </div>

                    <div class="col-md-8">
                            <div class="row">
                            <div class="col-md-4">
                                <img class="img-fluid" src="/product_image/clothes1.png" alt="" width="150px">
                            </div>
                            <div class="col-md-8">
                                <h2>Title</h2>
                                <h2>Quantity</h2>
                                <h2>Price</h2>
                                <a href="#" class="btn btn-primary">Add</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                            </div>
                            <hr>
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