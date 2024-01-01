@extends('admin.dashboard')

@section('add-product')
<div class="container">
    <div class="row">
        <div class="col-6">
<h3>add product:</h3>
<form   method="POST" action="../store_product"  enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-floating">
            <input name="title" type="text" class="form-control" id="title" placeholder="title">
            <label for="title">title</label>
          </div>

          <div class="form-floating">
            <input name="price" type="text" class="form-control" id="price" placeholder="price">
            <label for="price">price</label>
          </div>



        <div class="form-floating">
          <input name="description" type="text" class="form-control" id="description" placeholder="description">
          <label for="description">description</label>
        </div>


        <div class="form-floating">
          <input name="color" type="text" class="form-control" id="color" placeholder="color">
          <label for="color">color</label>
        </div>


        <div class="form-floating">
            <select name="size" class="form-select" aria-label="Default select example">
                <option selected>Select a size</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
          </div>


          <div class="form-floating">
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option selected>Select a category</option>
                @foreach ( $categories as $category )

                <option value="{{ $category->id }}">{{ $category->title }}</option>

                @endforeach
              </select>
          </div>

        <!--  <div class="checkbox mb-3">
            <label>
                <span><input name="availability" type="checkbox" >availabe</span>
            </label>
          </div>
        -->

          <label for="image">upload product image</label>
          <input type="file" class="form-control-file" name="image" id="image" >

        <button class="w-100 btn btn-lg btn-primary " type="submit" style="padding: 5px; margin:5px;">Add product</button>




</form>


</div>
<div class="col-6">
    <h3>Add a category</h3>

<form   method="POST" action="../store_category"  enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-floating">
        <input name="title" type="text" class="form-control" id="title" placeholder="title">
        <label for="title">title</label>
      </div>



    <div class="form-floating">
      <input name="description" type="text" class="form-control" id="description" placeholder="description">
      <label for="description">description</label>
    </div>

    <label for="image">upload product image</label>
    <input type="file" class="form-control-file" name="image" id="image" >

    <button class="w-100 btn btn-lg btn-primary " type="submit" style="padding: 5px; margin:5px;">Add category</button>

  <!--  <input type="number" value="0" min="0" max="100" step="1"/> -->

</form>


    </div>

    </div>
<hr>

<div class="row">

    <h3>browse products</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">price</th>
            <th scope="col">description</th>
            <th scope="col">size</th>
            <th scope="col">color</th>
            <th scope="col">image</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
           @php
                $counter=1;
            @endphp
@foreach ($items as $item )


          <tr>
            <th scope="row">{{ $counter++ }}</th>
            <td>{{$item->title}}</td>
            <td>{{ $item->price}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->size}}</td>
            <td>{{$item->color}}</td>
            <td><a href="../public/upload/{{ $item->image }}">{{$item->image}}</a></td>
            <td>


                    <a href="../delete_product/{{ $item->id }}">
                    <button class="btn btn-danger">delete</button>
                    </a>
            </td>
          </tr>
@endforeach
        </tbody>
      </table>
</div>


<div class="row">

    <h3>browse categories</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
           @php
                $counter=1;
            @endphp
@foreach ($categories as $category )


          <tr>
            <th scope="row">{{ $counter++ }}</th>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>

          <!--  <td>$item->category->title</td> -->
            <td>


                    <a href="../delete_category/{{ $category->id }}">
                    <button class="btn btn-danger">delete</button>
                    </a>
            </td>
          </tr>
@endforeach
        </tbody>
      </table>
</div>

</div>
@stop

