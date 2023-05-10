@extends('layouts.master')
@section('content')
<span class="border">


    <table class="Table Table-Bordered"  >
        <thead>
          <tr>

            <th scope="col">p_id</th>
            <th scope="col">category_id</th>
            <th scope="col">name</th>
            <th scope="col">date</th>
            <th scope="col">price</th>
            <th scope="col">cost price</th>
            <th scope="col">description</th>
            <th scope="col">photo</th>
            <th scope="col">product_status</th>
          </tr>
        </thead>
        @foreach ($products as $product )
        <tbody class="table-group-divider">

          <tr>
           <td>{{$product->p_id}}</td>
           <td>{{$product->cat_id}}</td>
           <td>{{$product->name}}</td>
            <td>{{$product->date}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->cost_price}}</td>
            <td>{{$product->description}}</td>
            <td><img src="{{asset($product->photo)}}" width="50" height="50" class="img img_responsive">
            </td>
            <td>{{$product->product_status}}</td>
            <td><a class="btn btn-primary " role="button"  href="{{route('product.edit',$product->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button"  href="{{route('product.destroy',$product->id)}}">DELETE</a></td>

        </tr>
          @endforeach
        </tbody>
    </table>
</span>
@endsection
