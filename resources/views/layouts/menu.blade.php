<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand " href="{{url('/')}}"><img class="ml-3 logo" src="{{asset('img/logo.png')}}" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        <a class="nav-link" href="{{url('service')}}">Service</a>
        <a class="nav-link" href="{{url('portfolio')}}">PortFolio</a>
        <a class="nav-link" href="{{url('about')}}">About</a>
      </div>
    </div>
  </div>
</nav>