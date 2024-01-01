@extends('layout.master')

@section('account_info')


<h3>my account info</h3>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">

                <ul class="list-unstyled ps-0">
                  <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                      Home
                    </button>
                    <div class="collapse" id="home-collapse" style="">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Updates</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Reports</a></li>
                      </ul>
                    </div>
                  </li>

                  <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="true">
                      Orders
                    </button>
                    <div class="collapse show" id="orders-collapse" style="">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Processed</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="border-top my-3"></li>
                  <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                      Account
                    </button>
                    <div class="collapse" id="account-collapse" style="">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
        </div>

        <div class="col-5"">
            <div class="row boxed-wide">
                <h4>hi, {{ Auth::user()->name }}</h4>
                    <div class="row" style="text-align: center;">
                        <div class="col">
                            <a href="#" class=" acc_icon">
                                <span>5<span> <br>
                                <p>coupons</p>
                               </a>
                        </div>
                        <div class="col">
                            <a href="#" class=" acc_icon">
                                <span><i class="fa-solid fa-trophy"></i></span> <br>
                                <p>points</p>
                               </a>

                        </div>
                        <div class="col">
                            <a href="#" class=" acc_icon">
                                <span><i class="fa-solid fa-wallet"></i></span> <br>
                                <p>wallet</p>
                               </a>


                        </div>
                        <div class="col">
                           <a href="#" class=" acc_icon">
                            <span><i class="fa-solid fa-gift"></i></span> <br>
                            <p>gift card</p>
                           </a>

                        </div>
                    </div>

            </div>
            <div class="row boxed-wide">
                <h4>My orders </h4>
                <div class="row" style="text-align: center;">
                    <div class="col">
                        <a href="#" class=" acc_icon">
                            <span><i class="fa-solid fa-file-invoice"></i><span> <br>
                            <p>unpaid</p>
                           </a>
                    </div>
                    <div class="col">
                        <a href="#" class=" acc_icon">
                            <span><i class="fa-solid fa-cash-register"></i></span> <br>
                            <p>processing</p>
                           </a>

                    </div>
                    <div class="col">
                        <a href="#" class=" acc_icon">
                            <span><i class="fa-solid fa-truck-fast"></i></span> <br>
                            <p>shipped</p>
                           </a>


                    </div>
                    <div class="col">
                       <a href="#" class=" acc_icon">
                        <span><i class="fa-solid fa-rotate-left"></i></span> <br>
                        <p>return</p>
                       </a>

                    </div>
                </div>


            </div>
        </div>
        <div class="col-4"">
            <div class="row boxed">
                <h4>customer service</h4>
                <div class="row" style="text-align: center;">
                    <div class="col">
                        <a href="#" class=" acc_icon">
                            <span><i class="fa-solid fa-envelope"></i><span> <br>
                            <p>Messages</p>
                           </a>
                    </div>
                    <div class="col">
                        <a href="#" class=" acc_icon">
                            <span><i class="fa-solid fa-clipboard"></i></span> <br>
                            <p>service record</p>
                           </a>

                    </div>
                </div>

            </div>
            <div class="row boxed wishbox" >
                <h4>wishlist</h4>
                <div style="text-align: center;" >you haven't saved anythig yet!</div>
            </div>
        </div>
    </div>
</div>

<p style="height: 100px;"></p>

@stop
