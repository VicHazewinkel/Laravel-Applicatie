@extends('layouts.master')
@if (Auth::user()->is_admin)

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
        <h1>Admin: User Overview</h1>
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
      <th scope="col">Email</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="col">{{$user['id']}}</th>
            <th scope="col">{{$user['name']}}</th>
            <th scope="col">{{$user['email']}}</th>
            <th scope="col">{{$user['saldo']}}</th>
        </tr>
    @endforeach
  </tbody>

</table>
@endsection
@endif