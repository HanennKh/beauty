@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('invoiceout.update',$invoiceout->id)}}">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">customers id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="customers_id" required value="{{$invoiceout->customers_id}}">
  </div><br>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">date out</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="date_out" required value="{{$invoiceout->date_out}}">
  </div><br>
  <input type="submit" value="send"  class="btn btn-success ">
</form>


@endsection
