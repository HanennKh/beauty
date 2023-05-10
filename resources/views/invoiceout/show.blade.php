@extends('layouts.master')
@section('content')
<span class="border">


    <table class="table table-bordered"  >
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">customer id</th>
            <th scope="col">date out</th>

          </tr>
        </thead>
        @foreach ($invoiceouts as $invoiceout)
        <tbody class="table-group-divider">

          <tr>

           <td>{{$invoiceout->id}}</td>
           <td>{{$invoiceout->customers_id}}</td>
           <td>{{$invoiceout->date_out}}</td>


            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('invoiceout.edit',$invoiceout->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('invoiceout.destroy',$invoiceout->id)}}">DELETE</a></td>

        </tr>
        <a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('invoiceout.destroyall',$invoiceout->id)}}">DELETEALL</a>
        </tbody>
    </table>
</span>

@endsection
