@extends('layouts.master')
@if (Auth::user()->is_admin)

@section('content')

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
                            <h1> admin</h1>
                    </div>
                </div>



@endsection

@endif
