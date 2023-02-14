@extends('layouts.master')
@if (Auth::user()->is_admin)

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
        <h1>Admin: Item Overview</h1>
    </div>
</div>

<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">User Overview</th>
    </tr>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
        <tr>
            <th scope="col">{{$item['id']}}</th>
            <th scope="col">{{$item['name']}}</th>
            <th scope="col">{{$item['description']}}</th>
            <th scope="col">{{$item['price']}}</th>
            <th scope="col">{{$item['stock']}}</th>
            <th>
            <form method="post" action="deleteItem">
            @csrf
                <input type="hidden"
                        name = "id"
                        value= {{item['id']}
                        hidden>
                <button type="submit">Delete</button>
            </form>
           </th>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
@endif
