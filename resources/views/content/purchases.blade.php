@extends('layouts.master')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
        <h1>Purchases</h1>
    </div>
</div>

<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">User Overview</th>
    </tr>
    <tr>
      <th scope="col">id</th>
      <th scope="col">User Name</th>
      <th scope="col">Item Name</th>
      <th scope="col">Transaction</th>
    </tr>
  </thead>
  {{-- <tbody>
    @foreach()
        <tr>
            <th scope="col">{{$item['id']}}</th>
        </tr>
    @endforeach
  </tbody> --}}
</table>
@endsection
