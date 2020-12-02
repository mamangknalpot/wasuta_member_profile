@extends('layouts.app')

@section('content')
    @include('inc.user.navbar')
    <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="card mb-5" style="width: 28rem;">
                  <img src="{{asset('images/default.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
          </div>
          <div class="col-xl-6 mb-5">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel assumenda nihil quos dolorum quidem impedit temporibus nobis, aliquam eum, repudiandae tenetur quo, esse modi cumque magnam earum repellendus voluptas. Aperiam, perspiciatis provident vitae repellat voluptatum maiores dicta distinctio rem temporibus! Culpa velit nisi blanditiis pariatur, rerum veritatis a eaque nam at aliquam soluta consequatur cumque tenetur tempora eos adipisci dolores neque similique dolore assumenda maxime officiis deserunt autem. Dolor, reiciendis! Obcaecati officiis commodi, cum quasi expedita ipsam similique dolor fugiat nesciunt nihil sed incidunt quidem eaque quis tempora repellat quod, nobis ut et. Accusantium excepturi ipsam repudiandae consequatur deleniti.
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
