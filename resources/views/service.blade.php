@extends('layouts.master')
@section('title','Service')
@section('content')

<div class="container">
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

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-5 mt-5">
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
        <div class="col-md-6 mb-5 mt-5">
            <h5>Address</h5>
            <p>Ispahani Park,South Khulshi,Chittagong</p>
            <p>018xxxxxxxx</p>
            <p>msovik399@gmail.com</p>
        </div>
    </div>

</div>

@endsection