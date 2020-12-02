<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home</a>
      </li>

      @foreach ($profiles as $profile)
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.profile', $profile->name)}}">{{$profile->name}}</a>
          </li>
      @endforeach
      
    </ul>
  </div>
</div>
</nav>
