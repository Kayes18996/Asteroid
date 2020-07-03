<nav class="navbar navbar-expand-lg bg-light " style="padding-left: 50px;padding-right: 50px;box-shadow: 0px 0px 015px 0px grey;">
  <a class="navbar-brand text-success" href="{{route('index')}}">Asteroid</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('product')}}">Products</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link " href="{{route('contact')}}">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="search" type="submit" style="background-color:green;border: 1px solid green;"><i class="fas fa-search my-2 col-sm-12" style="color:white;"></i></button>
    </form>

    <i class="fas fa-shopping-cart my-2 " style="color:green ;padding-left: 20px;padding-right: 20px;font-size:20px"></i>

  </div>
</nav>