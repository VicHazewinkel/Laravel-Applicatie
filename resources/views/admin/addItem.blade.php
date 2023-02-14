@extends('layouts.master')
@if (Auth::user()->is_admin)

@section('content')
<div>
    <h1>Admin: Add Items</h1>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="post" action="/addItem">
    @csrf
<div>
    <div>
        <input type="text"
        name = "name"
        placeholder="Item Name">
    </div>
    <br>
    <div>
        <input type="text"
        name="description"
        placeholder="description">
    </div>
    <br>
    <div>
        <input type="text"
        name="price"
        placeholder="price">
    </div>
    <br>
    <div>
        <input type="text"
        name="stock"
        placeholder="stock">
    </div>
    <br>
    <div >
        <button type="submit" class="btn btn-primary">Add Item</button>
    </div>
</div>


</form>


@endsection
@endif
