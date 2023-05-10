@extends('layouts.master')
@section('content')
<div class="p-3 mb-2 bg-light text-dark">
    <form method="POST" action="{{route('customer.update',$customer->id)}}">
        @csrf


      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="textbox" class="form-control" id="exampleFormControlInput1" name="name" value="{{$customer->name}}" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" name="password" value="{{$customer->password}}" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">phone number</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="phone" value="{{$customer->phone}}" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="mail" value="{{$customer->mail}}" required>
      </div><br>
      <input type="submit"  value="send" class="btn btn-success">

    </form>


@endsection
