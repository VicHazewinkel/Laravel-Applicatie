@extends('layouts.master')
@if (Auth::user()->is_admin)

@section('content')

                <div>
                    <div>
                            <h1>Admin: Add User</h1>
                    </div>
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


<form method="post" action="/addUser">
    @csrf

<div>
    <div>
        <input type="text"
            name="name"
            @error("name") is-invalid @enderror"
            value="{{ old("name") }}"
            placeholder="Full Name">
        <div>
            <br>
        </div>
        @error("name")
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <input type="email"
            name="email"
            value="{{ old("email") }}"
            @error("email") is-invalid @enderror"
            placeholder="Email">
        <div>
            <br>
        </div>
        @error("email")
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <input type="password"
               name="password"
               @error("password") is-invalid @enderror"
               placeholder="Password">
        <div>
            <br>
        </div>
        @error("password")
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <input type="password"
               name="password_confirmation"
               placeholder="Retype Password">
        <div>
            <br>
        </div>
    </div>
    <div>
        <div>
            <div>
                <input type="hidden" name="isAdmin" value="0" />
                <input type="checkbox" name="isAdmin" value="1" />
                <label for="isAdmin">
                    make user admin
                </label>
            </div>
        </div>
        <br>
        <div >
            <button type="submit" class="btn btn-primary">Add User</button>
        </div>
    </div>
</div>
</form>


@endsection
@endif
