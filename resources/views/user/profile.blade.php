@extends('layouts.app')

@section('content')
    @include('inc.user.navbar')
    <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="card mb-5" style="width: 28rem;">
                  <img src="{{ URL::asset('storage/images') }}/{{$profile->image}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">{{$profile->name}}</p>
                    <p class="card-text text-secondary"> Nickname : {{$profile->nickname}}</p>
                  </div>
                </div>
          </div>
          <div class="col-xl-6 mb-5 mt-5">
              {!!$profile->details!!}
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
