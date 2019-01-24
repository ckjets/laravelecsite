@extends('layouts.app')
@section('contents')

{!! Form::open(['action' => 'CartController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
{!!Form::label('quantity','Quantity')!!}
{{Form::select('number', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10], null, ['class' => 'qty'])}}
<br>
{!!Form::label('size','Size')!!}
{{Form::select('text', ["S", "M", "L"], null, ['class' => 'size'])}}
<br>

{{Form::submit('Add a cart', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection