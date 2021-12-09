@extends('layout.nav')
@section('content')
<div class="container">
    <link href="{{ asset('css/stylehead.css') }}" rel="stylesheet">
      <h3>Link House</h3>
      <p></p>
      <p></p>
      <p><h4>Click on the images to show information.</h4></p>
      <div class="row">
      
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/link_house/6.jpg')}}" target="_blank">
              <img src="{{asset('images/link_house/6.jpg')}}" alt="Lights" style="width:100%; height:30%">
              <div class="caption">
                <p>
                  <h4>Link House – LE</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 4.5m X 12m</h5>
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
            <a href="{{asset('images/link_house/1.jpg')}}" target="_blank">
              <img src="{{asset('images/link_house/1.jpg')}}" alt="Nature" style="width:100%">
              <div class="caption">
              <p>
                  <h4>Link House – LC2</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 5.1m × 7.2m</h5>
                  Rooms 3
                  Baths 4
                  Parking Space 1
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/link_house/2.jpg')}}" target="_blank">
              <img src="{{asset('images/link_house/2.jpg')}}" alt="Fjords" style="width:100%">
              <div class="caption">
                <p>
                  <h4>Link House – LC2</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 5.1m x 7.2m</h5>
                  Rooms 3
                  Baths 4
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
            <a href="{{asset('images/link_house/3.jpg')}}" target="_blank">
              <img src="{{asset('images/link_house/3.jpg')}}" alt="Lights" style="width:100% ">
              <div class="caption">
                <p>
                  <h4>Link House – LC1</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 5.1m x 7.2m</h5>
                  Rooms 2
                  Baths 3
                  Parking Space 1
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/link_house/4.jpg')}}" target="_blank">
              <img src="{{asset('images/link_house/4.jpg')}}" alt="Nature" style="width:100% ">
              <div class="caption">
                <p>
                  <h4>Link House – LC2</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 5.1m x 7.2m</h5>
                  Rooms 3
                  Baths 4
                  Parking Space 1
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{asset('images/link_house/5.jpg')}}" target="_blank">
              <img src="{{asset('images/link_house/5.jpg')}}" alt="Fjords" style="width:100% ">
              <div class="caption">
                <p>
                  <h4>Link House – LA</h4>
                  sale@yahoo.com
                  +855 10 000 000
                  <h5>House Size 5.1m x 12m</h5>
                  Rooms 4
                  Baths 5
                  Parking Space 1
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>    

    @include('layout.footer')
@endsection