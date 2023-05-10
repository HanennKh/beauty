@extends('layouts.master')
@section('content')
<span class="border">


    <table class="table table-bordered"  >
        <thead>
          <tr>

            <th scope="col"> Id</th>
            <th scope="col">products id</th>
            <th scope="col">carts id</th>
            <th scope="col">price</th>
            <th scope="col">discount</th>
          </tr>
        </thead>
        @foreach ($pcs as $pc )
        <tbody class="table-group-divider">

          <tr>

           <td>{{$pc->id}}</td>
            <td>{{$pc->products_id}}</td>
            <td>{{$pc->carts_id}}</td>
            <td>{{$pc->price}}</td>
            <td>{{$pc->discount}}</td>
            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('pc.edit',$pc->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('pc.destroy',$pc->id)}}">DELETE</a></td>

        </tr>
        <a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('pc.destroyall',$pc->id)}}">DELETEALL</a>
        </tbody>
    </table>
</span>


@endsection
