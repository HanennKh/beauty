@extends('layouts.master')
@section('content')
<span class="border">


    <table class="table table-bordered"  >
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">invoice_in id</th>
            <th scope="col">products_id</th>
            <th scope="col">quantity in</th>
            <th scope="col">price</th>

          </tr>
        </thead>
        @foreach ($productins as $productin)
        <tbody class="table-group-divider">

          <tr>

           <td>{{$productin->id}}</td>
           <td>{{$productin->invoiceins_id}}</td>
           <td>{{$productin->products_id}}</td>
           <td>{{$productin->quantity_in}}</td>
           <td>{{$productin->price}}</td>


            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('productin.edit',$productin->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('productin.destroy',$productin->id)}}">DELETE</a></td>

        </tr>
        
          @endforeach
        </tbody>
    </table>
</span>


@endsection
