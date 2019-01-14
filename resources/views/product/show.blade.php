@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

            <!-- Portfolio Item Heading -->
            <br>
             <h1 class="my-4">{{$item->name}}</h1>

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                <img class="img-fluid" src="/product_image/{{$item->product_image}}" alt="" width="60%">
                </div>

                <div class="col-md-4">
                <h3 class="my-3">Description</h3>
                <p>{{$item->description}}</p>
                <h2>Price:＄{{$item->price}}</h2>


                {!!Form::label('quantity','Quantity')!!}
                {{Form::select('number', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10], null, ['class' => 'quantity'])}}
                <br>
                {!!Form::label('size','Size')!!}
                {{Form::select('text', ["S", "M", "L"], null, ['class' => 'size'])}}
                <br>

                <a href="/cart" class="btn btn-primary">Add a cart</a>
                </div>

            </div>
            </div>
    <!-- /.container -->

</html>
@endsection