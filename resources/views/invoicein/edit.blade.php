@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('invoicein.update',$invoicein->id)}}">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">customers id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="customers_id" required value="{{$invoicein->customers_id}}">
  </div><br>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">date in</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="date_in" required value="{{$invoicein->date_in}}">
  </div><br>
  <input type="submit" value="send"  class="btn btn-success ">
</form>


@endsection
