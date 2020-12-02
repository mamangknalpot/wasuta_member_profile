<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse flex-column" id="navbarNav">
    <div class="container" style="min-height: 5vh;"></div>
    <ul class="navbar-nav m-auto flex-row justify-content-cente">
      <li class="nav-item active">
        {{-- <a class="nav-link" href="{{route('home')}}">Home</a> --}}
        <a class="navbar-brand" href="{{route('home')}}">Wasuta Profiles <hr></a>
      </li>     
    </ul>
    <ul class="navbar-nav m-auto flex-row">
      @foreach ($profiles as $profile)
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.profile', $profile->name)}}">{{$profile->name}}</a>
          </li>
      @endforeach
      
    </ul>
  </div>
</div>
</nav>
