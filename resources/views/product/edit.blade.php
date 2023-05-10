@extends('layouts.master')

@section('content')
<form method="POST" action="{{route('product.edit')}}" >
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">cat_id</label>
        <select class="form-select" aria-label="Default select example"  name="cat_id" required >
       @foreach ($categories as $cat)
        <option value="{{$cat['cat_id']}}">{{$cat['name']}}</option>
            @endforeach
        </select>

      </div><br>

      <div class="mb-3">
        <label for="KexampleFormControlInput1" class="form-label">name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required value="name">
      </div><br>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="date" required value="date">
      </div><br>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="price" required value="price">
      </div><br>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">cost price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="cost_price" required value="cost_price">
      </div><br>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> description</label>
        <textarea class="form-control" id="exampleFormControlInput1" name="description"  required value="description"> </textarea>
      </div><br>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">photo</label>
       <input type="file" class="form-control" id="photo" name="photo" required value="photo">
      </div><br>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">product_status</label>
        <input type="checkbox"  name="product_status"  id="exampleFormControlInput1" value="product_status">
      </div><br>

      <input type="submit"  value="send" class="btn btn-success">
</form>
@endsection


