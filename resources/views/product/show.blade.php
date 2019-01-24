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

                {!! Form::open(['action' => 'CartController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                {{-- {{Form::hidden('product_id', '2') }} --}}
                <input name="product_id" type="hidden" value="{{$item->id}}">
                {!!Form::label('quantity','Quantity')!!}
                {{Form::selectRange('qty', 1, 10)}}
                <br>
                {!!Form::label('size','Size')!!}
                {{Form::select('size', array('L' => 'Large', 'S' => 'Small'))}}
                <br>

                {{Form::submit('Add a cart', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}


                        {{-- <label for="inputQty">Qty</label>
                        <select id="inputQty">
                          <option selected>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                        <br>

                        <label for="inputSize">Size</label>
                        <select id="inputSize">
                          <option selected>S</option>
                          <option>M</option>
                          <option>L</option>
                        </select>
                        <br> --}}

                        {{-- <button href="{{view('cart.index')}}" type="button" class="btn btn-primary">Add a cart</button> --}}

        

                 </div>

             </div>
     </div>
    <!-- /.container -->

</html>
@endsection