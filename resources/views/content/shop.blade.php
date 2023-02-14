@extends('layouts.master')
{{-- Shopping list --}}

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="text-center">

    @foreach($items as $key => $item)
  <div class="col">
      <form method="post" action="/kopen">
          @csrf
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal">{{$item->name}}</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">€{{$item->price}}</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Beschrijving: {{$item->description}}</li>
          <li>Aantal beschikbaar: {{$item->stock}} </li></li>
        </ul>
          <input type="hidden" name="item_id" value="{{$item->id}}" />
        <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Koop</button>
      </div>
    </div>
      </form>
  </div>
@endforeach
</div>
@endsection
