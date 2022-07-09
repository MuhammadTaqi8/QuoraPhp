@extends('main')
@section('content')
<div class="container">
    <div class="row"> 
        <div class="col">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$data['gallery']}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$data['name']}}</h5>
                <p class="card-text">{{$data['description']}}</p>
                <form action="Post" href="/add_to_cart">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <button class="btn btn-primary">Buy</button>

            </div>
          </div>  
        </div>
    </div>
  </div>
@endsection