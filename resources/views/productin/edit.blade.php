@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('productin.update',$productin->id)}}">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">invoicein id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="invoiceins_id" required value="{{$productin->invoiceins_id}}">
  </div><br>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">products id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="products_id" required value="{{$productin->products_id}}">
  </div><br>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">quantity in </label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="quantity_in" required value="{{$productin->quantity_in}}">
  </div><br>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> price</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="price" required value="{{$productin->price}}">
  </div><br>
  <input type="submit" value="send" class="btn btn-success">
</form>


@endsection
