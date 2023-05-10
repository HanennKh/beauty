@extends('layouts.master')
@section('content')
<span class="border">


    <table class="table table-bordered"  >
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">customer id</th>
            <th scope="col">date in</th>

          </tr>
        </thead>
        @foreach ($invoiceins as $invoicein)
        <tbody class="table-group-divider">

          <tr>

           <td>{{$invoicein->id}}</td>
           <td>{{$invoicein->customers_id}}</td>
           <td>{{$invoicein->date_in}}</td>


            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('invoicein.edit',$invoicein->id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('invoicein.destroy',$invoicein->id)}}">DELETE</a></td>

        </tr>
          @endforeach
        </tbody>
    </table>
</span>


@endsection
