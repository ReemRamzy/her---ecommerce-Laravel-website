@extends('layout.master')

@section('item')
<div class="container">



    <div class="row">
     <!--   <div class="col-1">
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
                    <img src="../public/upload/{{ $item->image }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/product_12.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/product_1.webp" class="d-block w-100" alt="...">
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
        <div class="col-6 item_data">
            <h2>{{ $item->title}}</h2>
            <h3 class="myhs">price: {{ $item->price }} US$</h3>
<hr>



                   <label for="form-select">Qty:</label>
                   <input type="number" name="item_qty" class="qty" value="1" min="1" max="100" step="1" style="margin-bottom: 5px;"/>
                      <hr>
                      <h3>description:</h3>
                      <p> {{ $item->description }} </p>
                      <h3>size:</h3>
                      <p> {{ $item->size }} </p>
                      <h3>color:</h3>
                      <p> {{ $item->color }} </p>
                      <hr>

                      <input type="hidden" value="{{$item->id}}" class="item_id">
                      <button class="w-100 btn btn-lg" id="cartAdd" type="submit">Add to cart</button>








        </div>
    </div>
</div>


<script>

    $(document).ready(function(){


        $('#cartAdd').click( function () {


            var item_id = $(this).closest('.item_data').find('.item_id').val();
            var item_qty = $(this).closest('.item_data').find('.qty').val();

            $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
              });
            $.ajax({
                type: "POST",
                url:('../addtocart'),
                data: {
                    'item_id': item_id,
                    'item_qty': item_qty,
                },
                success: function (response) {
                    alert(response.status);

                }
            });
        });

    });

</script>

@stop
