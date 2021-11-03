@extends('master')

@section('content')


<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/slide.jpg') }}" alt="Los Angeles" width="1100" height="400">
      <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/slide.jpg')}}" alt="Chicago" width="1100" height="400">
      <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/slide.jpg') }}" alt="New York" width="1100" height="400">
      <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>



<!-- <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
<div class="container" style="margin-top:30px">
<p style="font-size:25px;text-align:center;">Product List</p>
  <div class="row">
  <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>


    <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>

    <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>

    <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>


    <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>


    <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>

    <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>


    <div class="col-sm-3" style="padding-bottom:8px !important;">
    <div class="card">
  <img class="card-img-top" src="{{ asset('img/slide.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add Card</a>
  </div>
</div>
    </div>







    <!-- <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div> -->
  </div>
</div>

@endsection