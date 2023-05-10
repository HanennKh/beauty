@extends('layouts.master')
@section('content')
<span class="border">



    <table class="table table-bordered"  >
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">invoice_in id</th>
            <th scope="col">products_id</th>
            <th scope="col">quantity out</th>
            <th scope="col">price</th>

          </tr>
        </thead>
        @foreach ($productouts as $productout)
        <tbody class="table-group-divider">

          <tr>

           <td>{{$productout->id}}</td>
           <td>{{$productout->invoiceouts_id}}</td>
           <td>{{$productout->products_id}}</td>
           <td>{{$productout->quantity_out}}</td>
           <td>{{$productout->price}}</td>


            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('productout.edit',$productout->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('productout.destroy',$productout->id)}}">DELETE</a></td>

        </tr>
        
          @endforeach
        </tbody>
    </table>
</span>


@endsection
