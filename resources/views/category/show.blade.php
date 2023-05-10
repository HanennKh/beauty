@extends('layouts.master')
@section('content')
<span class="border">

    <table class="table table-bordered"  >
        <thead>
          <tr>

            <th scope="col">category_id</th>
            <th scope="col">name</th>

          </tr>
        </thead>
        @foreach ($categorys as $category)
        <tbody class="table-group-divider">

          <tr>

           <td>{{$category->id}}</td>
           <td>{{$category->name}}</td>
           <td><img src="{{asset($category->photo)}}" width="50" height="50" class="img img_responsive">
           </td>

            <td><a class="btn btn-primary " role="button" aria-disabled="false" href="{{route('category.edit',$category->cat_id)}}">EDIT</a></td>
            <td><a class="btn btn-danger" role="button" aria-disabled="false" href="{{route('category.destroy',$category->cat_id)}}">DELETE</a></td>

        </tr>
        <br>
        
          @endforeach
        </tbody>
    </table>
</span>

@endsection
