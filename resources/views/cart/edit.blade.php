@extends('layouts.master')
@section('content')
@endsection
<div class="p-3 mb-2 bg-light text-dark">
    <form method="POST" action="{{route('cart.update',$cart->id)}}">
        @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">customer id</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="customers_id" value="{{$cart->id}}" required>
      </div><br>


      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">date</label>
        <input type="datetime" class="form-control" id="exampleFormControlInput1" name="date" value="{{$cart->date}}" required>
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">confirmation</label>
        <input type="checkbox" class="form-control" id="exampleFormControlInput1" name="confirmation" value="{{$cart->confirmation}}" >
      </div><br>
      <input type="submit"  value="send" class="btn btn-success">
    </form>
</body>
</html>
