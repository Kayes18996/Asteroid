@extends('layouts.master')
 
@section('content')

<!-- sidebar + content -->


    <div class="row" style="padding-left: 50px;padding-right: 50px;">

           
        @include('partials.product-sidebar')
        

      <div class="col-md-9">
        <div class="widget">
          <h3>Featured Products</h3>

          <!-- 1st row -->

          <div class="row" style="margin-bottom: 20px;">

            <div class="col-md-3 col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/1.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/2.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>


            <div class="col-md-3  col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/3.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>


            <div class="col-md-3  col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/watch.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>

          <!-- 2nd row -->

          <div class="row" style="margin-bottom: 20px;">

            <div class="col-md-3 col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/watch.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/watch.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>


            <div class="col-md-3 col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/watch.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>


            <div class="col-md-3 col-sm-4">
              <div class="card" style="width:100%" ;>
                <img src="{{asset('images/products/watch.jpg')}}" class="card-img-top feature-image" alt="src.">
                <div class="card-body">
                  <h5 class="card-title">Samsung Mobile</h5>
                  <p class="card-text">৳ 10000</p>
                  <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

  <!-- sidebar + content end -->

@endsection