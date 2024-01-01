@extends('layout.master')

@section('cart')

<div class="container">
    <div class="row">
        @if(Auth::check())
        <div class="col-8">
          <div>


            <h3>order details</h3>

            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">total</th>
                    <th scope="col" hidden>remove</th>


                  </tr>
                </thead>


                <tbody>
                    <?php $counter = 1 ; ?>


                    @foreach ($data as $d )
              <tr>


                    <th scope="row">{{ $counter++ }}</th>


                    <td> <span><img class="img-thumbnail img-fluid" src="../public/upload/{{ $d->image }}" alt="..." style="height:100px; width:100px;"></span>  {{ $d->title }}</td>
                    <td> {{ $d->price }}US$</td>



                    <td><b>Qty:</b>
                    <input name="item_qty" type="number" value="{{ $d->quantity  }}" class="qty" min="1" max="100" step="1" style="margin-bottom: 5px;" />
                    </td>

                    <td> {{ $d->price * $d->quantity }} US$</td>

                    <td>
                        <a href="../delete_cart_item/{{ $d->id }}" class=" acc_icon">
                            <span><i class="fa-solid fa-x"></i></span> <br>
                           </a>
                    </td>






                  </tr>
                  @endforeach

                </tbody>

              </table>


        </div>
        </div>
        <div class="col-4">
            <div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Order summary</h5>
                      <p class="card-text"><b> subtotal</b>  <span>{{ $st }} US$ </span> </p>
                      <a href="{{url('checkout')}}">
                      <button class="btn btn-outline-dark">check out now</button>
                      </a>
                    </div>
                  </div>
            </div>

        </div>
        @else
        please login to make an order

        @endif
    </div>
</div>



@stop

