@extends('layouts.master')
@section('title','Home')

@section('content')
<div class="container-fluid parallax m-0 mb-5">
<div class="row m-0 d-flex justify-content-center">
<div class="col-md-4 text-center top">
    <h1 class="text-white">Software Engineer</h1>
    <h3 class="text-white">Mobile and Web</h3>
    <button class="btn btn-primary">Learn More</button>
</div>
</div>
</div>

<div class="container mt-5 mb-5">
    <h2 class="text-center">My Service</h2>
    <div class="row">
    <div class="col-md-4 p-2">
           <div class="card" style="width: 100%;">
              <img style="height: 200px;width: 250px;" src="{{asset('img/laravel.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on</p>
                        
                     </div>
             </div>

             
        </div>
        <div class="col-md-4 p-2">
           <div class="card" style="width: 100%;">
              <img style="height: 200px;width: 250px;" src="{{asset('img/laravel.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on</p>
                        
                     </div>
             </div>

             
        </div>
        <div class="col-md-4 p-2">
           <div class="card" style="width: 100%;">
              <img style="height: 200px;width: 250px;" src="{{asset('img/laravel.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on</p>
                        
                     </div>
             </div>

             
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <h2 class="text-center">Recent Projects</h2>
    <div class="row">
    <div class="col-md-4 p-2">
           <div class="card" style="width: 100%;">
              <img style="height: 200px;width: 250px;" src="{{asset('img/laravel.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on</p>
                        
                     </div>
             </div>

             
        </div>
        <div class="col-md-4 p-2">
           <div class="card" style="width: 100%;">
              <img style="height: 200px;width: 250px;" src="{{asset('img/laravel.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on</p>
                        
                     </div>
             </div>

             
        </div>
        <div class="col-md-4 p-2">
           <div class="card" style="width: 100%;">
              <img style="height: 200px;width: 250px;" src="{{asset('img/laravel.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on</p>
                        
                     </div>
             </div>

             
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center">Contact With Me</h2>
    <div class="row">
        <div class="col-md-6">
        <form>
  <div class="mb-3">
    <label  class="form-label">Your Name</label>
    <input type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Your Mobile Number</label>
    <input type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Your Email</label>
    <input type="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Your Message</label>
    <input type="text" class="form-control" >
  </div>
  <button type="submit" class="btn btn-block btn-primary">Send Now</button>
</form>
        </div>
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8603737029407!2d91.81040081440473!3d22.35890038529314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd892a14aca4b%3A0x2c26cf0e95f84c16!2sSouth%20Kulshi%20Road%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1658827259808!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

@endsection