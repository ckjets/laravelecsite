@extends('layouts.app')
@section('content')

@if(!Auth::guest())

    <!-- Page Content -->
    <div class="container">

            <!--Item Heading -->
            <br>
             <h1 class="my-4">{{$item->name}}</h1>

            <!--Item Row -->
            <div class="row">

                <div class="col-md-8">
                <img class="img-fluid" src="/product_image/{{$item->product_image}}" alt="" width="60%">
                </div>

                <div class="col-md-4">
                <h3 class="my-3">Description</h3>
                <p>{{$item->description}}</p>
                <h2>Price:＄{{$item->price}}</h2>

                {!! Form::open(['action' => 'CartController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <input name="product_id" type="hidden" value="{{$item->id}}">
                {!!Form::label('quantity','Quantity')!!}
                {{Form::selectRange('qty', 1, 10)}}
                <br>
                {!!Form::label('size','Size')!!}
                {{Form::select('size', array('L' => 'Large', 'S' => 'Small'))}}
                <br>

                {{Form::submit('Add a cart', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}     
                 </div>

             </div>
     </div>
    <!-- /.container -->


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