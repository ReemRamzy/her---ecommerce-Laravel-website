@extends('layout.master')

@section('items')
<div class="container">
    @foreach ( $items as $item )


    <div class="row">
      <!--  <div class="col-1">
            <div class="row"><img src="assets/img/product_11.webp" class="img-thumbnail" alt="..."></div>
            <div class="row"><img src="assets/img/product_12.webp" class="img-thumbnail" alt="..."></div>
            <div class="row"><img src="assets/img/product_1.webp" class="img-thumbnail" alt="..."></div>
        </div>
    -->
        <div class="col-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="http://localhost/her/public/upload/{{ $item->image }}" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="col-7">
            <h2>{{ $item->title}}</h2>
            <h3 class="myhs">price: {{ $item->price }} US$</h3>
<hr>


                <form action="">
                   <label for="form-select">Qty:</label>
                    <select class="" id="form-select" aria-label="Default select example">
                        <option selected>1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                      </select>
                      <hr>
                      <h3>description:</h3>
                      <p> {{ $item->description }} </p>
                      <h3>size:</h3>
                      <p> {{ $item->size }} </p>
                      <h3>color:</h3>
                      <p> {{ $item->color }} </p>
                      <hr>
                      <button class="w-100 btn btn-lg" type="submit">Add to cart</button>
                </form>

        </div>
    </div>
</div>
@endforeach
@stop
