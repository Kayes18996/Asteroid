@extends('layouts.master')


@section('content')



    <div class="row" style="padding-left: 50px;padding-right: 50px;">
      
      
        @include('partials.product-sidebar')
    

      <div class="col-md-9">
        <section>
          <div class="container" style="margin: 20px;">
            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <div>
                      <h4 style="color: green;">CONTACT US</h4 ><hr>
                    </div>
                    <form method="post" data-form-title="CONTACT US">
                      <input type="hidden" data-form-email="true">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-secondary bg-success">Send Message</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  
  </section>

</body>

</html>



@endsection