@extends('layouts.master')
@section('content')

<div class="p-3 mb-2 bg-light text-dark">

    <form method="POST" action="{{route('pc.store')}}">
        @csrf
    <div class="mb-3">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">products_id</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="products_id" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">carts_id</label>
        <input type="number" class="form-control" id="password" name="carts_id" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">price</label>
        <input type="text" class="form-control" id="mobile" name="price" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">discount</label>
        <input type="text" class="form-control" id="mail" name="discount" required>
      </div><br>
    <input type="submit"  value="send" class="btn btn-success">
    </form>
@endsection
