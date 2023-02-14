@extends('layouts.master')

@section('content')
<div>
    <h2>Saldo</h2>
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

<div>
    <h3>Huidig Saldo</h3>
    <table class="table" >
        <thead class="thead-dark">
        <tr>
            <th>Saldo</th>
        </tr>
{{-- @foreach() --}}
        <tr>
                <td>{{$saldo}} €</td>
        </tr>
{{-- @endforeach() --}}
        </thead>
    </table>
</div>

<div>
    <h3>Add Saldo</h3>
    <div>
        <form method="post" action="/addSaldo">
            @csrf
            <div>
                <input type="text"
                name="saldo"
                placeholder="Add Saldo">
            </div>
            <div >
                <button type="submit" class="btn btn-primary">Add Saldo</button>
            </div>
        </form>

    </div>
</div>




@endsection
