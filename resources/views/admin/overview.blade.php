@extends('layouts.master')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
        <h1>@if(Auth::user()->is_admin)
                Admin
            @else
                Gebruiker
            @endif Sales Overview</h1>
    </div>
</div>

<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">verkochte items</th>
    </tr>

    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Item Name</th>
      <th scope="col">Transaction</th>
    </tr>
  </thead>
  <tbody>
@foreach($verkopen as $verkoop)
          
    <tr>
      <th scope="row">{{ $verkoop->id }}</th>
      <td>{{$verkoop->user->name}}</td>
      <td>{{$verkoop->item->name}}</td>
      <td>- €{{ number_format($verkoop->item->price, 2) }}</td>
    </tr>
@endforeach
  </tbody>

</table>


@endsection


