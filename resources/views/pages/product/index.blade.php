@extends('layouts.master')

@section('content')

<!-- sidebar + content -->


<div class="row" style="padding-left: 50px;padding-right: 50px;">


  @include('partials.product-sidebar')


  <div class="col-md-9 col-sm-12" style="margin-top:50px;">
    <div class="widget">


      <!-- 1st row -->

      <div class="row" style="margin-bottom: 20px;">

        @foreach ($products as $product)

        <div class="col-md-3 col-sm-6 ">
          <div class="card" style="width:100%;border-radius:40px 05px 40px 05px;margin-bottom:20px;box-shadow: 0px 0px 0px 0px green">


            @php $i=1 @endphp

            @foreach ($product->images as $image)

            @if($i>0)


            <img style="width:100%;border-radius:40px 05px 05px;height:150px;" class="view overlay zoom" src="{{asset('images/products/'.$image->image)}}"></img>


            @endif

            @php $i-- @endphp

            @endforeach

            <div class="card-body">
              <h6 class="card-title"> {{$product->title}}</h6>
              <p class="card-text"> <span style="color:green;font-size:25px;">৳</span><span style="color: green;font-size:16px"> {{$product->price}} </span> </p>
              <center>
                <a href="#" class="btn btn-success" style="padding: 4px;width:48%;font-size:13px">Add to Cart</a>
                <a href="#" class="btn btn-warning" style="padding: 4px;width:48%;font-size:13px;">Buy Now</a>
              </center>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>
</div>


<!-- sidebar + content end -->

@endsection