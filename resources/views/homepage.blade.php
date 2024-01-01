@extends('layout.master')

@section('content')

<div class="container" >
    <div class="row">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src={{url("assets/img/her_cover.webp")}} class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block card-title">
                    <h5>Welcome to Her store</h5>
                    <p>everything women needs</p>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="myhs" style="text-align: center;">Shop By Category</h2>
    <div class="row" style="text-align: center;">



       @foreach ($categories  as  $category)


        <div class="col-4">


             <div class="card">
                <img src="public/upload/{{ $category->image }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <p style="height: 40%"></p>
                  <h5 class="card-title">{{$category->title}}</h5>
                </div>
              </div>

        </div>
        @endforeach

<hr>
@section('browse')
<div class="container">


<h3 class="myhs" style="text-align: center;">featured products</h3>
    <div class="row">
        <?php $countP=0 ?>
        @foreach ($items as $item)
        <div class="col-2 mycard item_data">

            <div><a href="items/{{$item->id}}"><img class="img-thumbnail img-fluid" src="public/upload/{{ $item->image }}" alt="..." style="height:250px; width:270px;"></a>
                <h5 class="myhs prodtit">{{ $item->title }}</h5>
                <h5 class="myhs">{{ $item->price }} US$</h5>



                    <input type="hidden" value="{{$item->id}}" class="item_id<?php echo $countP; ?>">
                    <b>Qty:</b><input name="item_qty" type="number" value="1" class="qty" min="1" max="100" step="1" style="margin-bottom: 5px;" />
                    <button class="btn cart-btn" id="cartAdd<?php echo $countP; ?>" type="submit">Add to cart</button>

        </div>



    </div>
    <?php $countP++ ?>
    @endforeach


</div>

</div>
@stop
<script>

    $(document).ready(function(){
        <?php $maxP = count($items); ?>
        <?php for($i=0;$i<$maxP; $i++){ ?>

        $('#cartAdd<?php echo $i; ?>').click( function () {


            var item_id<?php echo $i; ?> = $(this).closest('.item_data').find('.item_id<?php echo $i; ?>').val();
            var item_qty = $(this).closest('.item_data').find('.qty').val();
            $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
              });
            $.ajax({
                type: "POST",
                url:('addtocart'),
                data: {
                    'item_id': item_id<?php echo $i; ?>,
                    'item_qty': item_qty,
                },
                success: function (response) {

                    alert(response.status);


                }
            });
        });
        <?php } ?>
    });

</script>

@endsection

