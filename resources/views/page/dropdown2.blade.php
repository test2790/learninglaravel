@extends('layout.nav')
@section('content')
    
<div class="container">
    <link href="{{ asset('css/stylehead.css') }}" rel="stylesheet">
      <h3>Twin Villa</h3>
      <p></p>
      <p></p>
      <p><h4>Click on the images to show information.</h4></p>
      <div class="row">
      
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/twin_villa/2.jpg')}}" target="_blank">
              <img src="{{asset('images/twin_villa/2.jpg')}}" alt="Lights" style="width:100%; height:30%">
              <div class="caption">
                <p>
                  <h4>Twin Villa</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 6m X 12m</h5>
                  Rooms 4
                  Baths 5
                  Parking Space 1
                </p>
              </div>
            </a>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/twin_villa/3.jpg')}}" target="_blank">
              <img src="{{asset('images/twin_villa/3.jpg')}}" alt="Nature" style="width:100%">
              <div class="caption">
              <p>
                  <h4>Twin B Villa</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 6m × 15m</h5>
                  Rooms 5
                  Baths 6
                  Parking Space 1
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/twin_villa/4.jpg')}}" target="_blank">
              <img src="{{asset('images/twin_villa/4.jpg')}}" alt="Fjords" style="width:100%">
              <div class="caption">
                <p>
                  <h4>Twin Villa</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 6m x 12m</h5>
                  Rooms 4
                  Baths 5
                  Parking Space 1
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/twin_villa/5.jpg')}}" target="_blank">
              <img src="{{asset('images/twin_villa/5.jpg')}}" alt="Lights" style="width:100% ">
              <div class="caption">
                <p>
                  <h4>Twin A Villa</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 8m x 12m</h5>
                  Rooms 4
                  Baths 5
                  Parking Space 3
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/twin_villa/6.jpg')}}" target="_blank">
              <img src="{{asset('images/twin_villa/6.jpg')}}" alt="Nature" style="width:100% ">
              <div class="caption">
                <p>
                  <h4>Twin Villa</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 7m x 12m</h5>
                  Rooms 4
                  Baths 5
                  Parking Space 2
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/twin_villa/7.jpg')}}" target="_blank">
              <img src="{{asset('images/twin_villa/7.jpg')}}" alt="Fjords" style="width:100% ">
              <div class="caption">
                <p>
                  <h4>Twin Villa</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 5m x 12m</h5>
                  Rooms 4
                  Baths 5
                  Parking Space 2
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>
    @include('layout.footer')
@endsection