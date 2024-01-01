@extends('layout.master')

@section('browse')
<div class="container">



    <div class="row">
        @foreach ($items as $item)
        <div class="col-2 mycard">

            <div><a href=""><img class="img-thumbnail img-fluid" src="http://localhost/her/public/upload/{{ $item->image }}" alt="..." style="height:250px; width:270px;"></a>
                <h5 class="myhs prodtit">{{ $item->title }}</h5>
                <h5 class="myhs">{{ $item->price }} US$</h5>
                <form method="post" action="/addtocart">
                    {{ csrf_field() }}
                    <button class="btn cart-btn" type="submit">Add to cart</button>
                </form>
        </div>



    </div>
    @endforeach


</div>

</div>
@stop
