@extends('layouts.master')
@section('content')
<span class="border">

    <table class="table table-bordered"  >
        <thead>
          <tr>

            <th scope="col">Customer Id</th>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        @foreach ($customers as $customer )
        <tbody class="table-group-divider">

          <tr>

           <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->password}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->mail}}</td>
            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('customer.edit',$customer->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('customer.destroy',$customer->id)}}">DELETE</a></td>

        </tr>
          @endforeach
        </tbody>
    </table>
</span>


@endsection
