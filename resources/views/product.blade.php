@extends('main')
@section("content")
   
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        @foreach ($product as $item)
        <div class="item {{$item['id']==9?'active':''}}">
          <img src="{{$item['gallery']}}" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-black">{{$item['name']}}</h5>
            <p class="text-black">{{$item['description']}}</p>
          </div>
        </div>
        @endforeach

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container">
    <h2>Trending Products</h2>
    <div class="row">
      @foreach ($product as $item)
        <div class="col">
        <div class="card" style="width: 18rem;">
          <a href="detail/{{$item['id']}}"><img class="card-img-top" src="{{$item['gallery']}}" alt="Card image cap"></a>
            <div class="card-body">
                <h5 class="card-title">{{$item['name']}}</h5>
                <p class="card-text">{{$item['description']}}</p>
                <a href="#" class="btn btn-primary">Buy</a>
            </div>
          </div>  
        </div>
      @endforeach
    </div>
  </div>
@endsection