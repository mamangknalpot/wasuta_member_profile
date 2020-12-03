@extends('layouts.app')

@section('content')
    @include('inc.user.navbar')
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container">
          <h1 class="display-4">Fluid jumbotron</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
      <div class="container">
        <div class="row mb-5">
            <div class="col-xl-4">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset('images/default.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
            <div class="col-xl-4">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset('images/default.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
            <div class="col-xl-4">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset('images/default.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-xl-4">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset('images/default.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
            <div class="col-xl-4">
              <div class="card" style="width: 18rem;">
                  <img src="{{asset('images/default.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container">
          <h1 class="display-4">Fluid jumbotron</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>
    <div class="bg-light pl-5 pr-5">
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
@endsection
