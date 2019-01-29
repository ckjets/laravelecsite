@extends('layouts.app')
@section('content')
<div class="container">
    {{-- あとで消す --}}
    <br><br><br><br>
<h1>Check Out</h1>
<hr>

<form action="AddressController@store" method="post">
     <div class="row">
     <div class="col">
     <label for="inputPassword4">First Name</label>
     <input type="text" class="form-control" placeholder="First name">
     
    </div>
     <div class="col">
     <label for="inputPassword4">Last Name</label>
     <input type="text" class="form-control" placeholder="Last name">
     </div>
     </div>
     <br>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
      </form>

      {{-- {!! Form::open(['action' => 'CheckoutController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
      <input name="product_id" type="hidden" value="{{$item->id}}">
      {!!Form::label('quantity','Quantity')!!}
      {{Form::selectRange('qty', 1, 10)}}
      <br>
      {!!Form::label('size','Size')!!}
      {{Form::select('size', array('L' => 'Large', 'S' => 'Small'))}}
      <br>

      {{Form::submit('Add a cart', ['class' => 'btn btn-primary'])}}
      {!! Form::close() !!} --}}
      

{{-- stripe --}}
<form action="/payment" method="POST">
    <script
      src="https://checkout.stripe.com/checkout.js"
      class="stripe-button"
      data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
      data-image="/square-image.png"
      data-name="Demo Site"
      data-description="2 widgets ($20.00)"
      data-amount="2000">
    </script>
  </form>

<br><br><br>

@endsection