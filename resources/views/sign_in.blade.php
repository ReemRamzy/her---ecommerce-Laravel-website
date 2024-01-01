@extends('layout.master')

@section('form')

<div class="container">
    <div class="row">
        <div class="col-6" >
            <h1 class="h3 mb-3 fw-normal">sign in</h1>
<form method="POST" action="sign_in">

    {{ csrf_field() }}
            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg " type="submit">Sign in</button>
</form>
            <hr>

                <div class="google-btn">
                    <div class="google-icon-wrapper">
                      <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                    </div>
                    <p class="btn-text"><b>Sign in with google</b></p>
                  </div>
                  <p style="height:10px;"></p>
                  <button class="loginBtn loginBtn--facebook">
                    Login with Facebook
                  </button>

</div>







        <div class="col-6 vert" >
            <form  method="POST" action="sign_up">
                {{ csrf_field() }}

                <h1 class="h3 mb-3 fw-normal">sign up</h1>

                <div class="form-floating">
                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="YourName">
                    <label for="floatingInput">Name</label>
                  </div>

                <div class="form-floating">
                  <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input name="re_password" type="password" class="form-control" id="floatingPassword" placeholder="re-write Password">
                    <label for="floatingPassword">re-write Password</label>
                  </div>

                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> I agree to the terms of service
                    </label>
                  </div>

                <button class="w-100 btn btn-lg " type="submit">Sign up</button>



              </form>
        </div>
    </div>
</div>

@stop
