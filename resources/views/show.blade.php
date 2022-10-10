@extends('welcome')


@section('form')
@foreach($product as $p)
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../images/{{$p->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$p->name}}</h5>
    <p class="card-text">{{$p->price}}</p>
  </div>
</div>
@endforeach
@endsection