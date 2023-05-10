@extends('layouts.master')
@section('content')
<form method="POST" action="{{route('category.store')}}" >
    @csrf
<div class="mb-3">

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required>
  </div><br>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">photo</label>
    <input type="file" class="form-control" id="photo" name="photo" required>
  </div><br>

  <input type="submit"  value="send" class="btn btn-success">
</form>


@endsection
