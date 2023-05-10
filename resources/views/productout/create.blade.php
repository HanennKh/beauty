@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('productout.store')}}">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">invoiceout id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="invoiceouts_id" required>
  </div><br>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">products id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="products_id" required>
  </div><br>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">quantity out </label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="quantity_out" required>
  </div><br>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> price</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="price" required>
  </div><br>
  <input type="submit" value="send" class="btn btn-success">
</form>


@endsection
