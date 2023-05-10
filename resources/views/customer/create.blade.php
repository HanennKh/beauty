@extends('layouts.master')
@section('content')

<div class="p-3 mb-2 bg-light text-dark">

    <form method="POST" action="{{route('customer.store')}}">
        @csrf
    <div class="mb-3">

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="textbox" class="form-control" id="exampleFormControlInput1" name="name" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">phone number</label>
        <input type="number" class="form-control" id="mobile" name="phone" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="mail" name="mail" required>
      </div><br>
    <input type="submit"  value="send" class="btn btn-success">
    </form>
@endsection
