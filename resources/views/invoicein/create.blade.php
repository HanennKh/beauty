@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('invoicein.store')}}">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">customers id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="customers_id" required>
  </div><br>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">date in</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="date_in" required>
  </div><br>
  <input type="submit" value="send" class="btn btn-success">
</form>


@endsection
