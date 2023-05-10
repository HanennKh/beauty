@extends('layouts.master')
@section('content')


<span class="border">


    <table class="table table-bordered"  >
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">customer id</th>



            <th scope="col">date</th>
            <th scope="col">confirmation</th>
          </tr>
        </thead>
        @foreach ($carts as $cart )
        <tbody class="table-group-divider">

          <tr>
            <td>{{$cart->id}}</td>
           <td>{{$cart->customers_id}}</td>




            <td>{{$cart->date}}</td>
            <td>{{$cart->confirmation}}</td>
            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('cart.edit',$cart->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('cart.destroy',$cart->id)}}">DELETE</a></td>

        </tr><br>
        
          @endforeach
        </tbody>
    </table>
</span>
