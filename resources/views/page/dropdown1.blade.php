@extends('layout.nav')
@section('content')
    
    <div class="container">
      <link href="{{ asset('css/stylehead.css') }}" rel="stylesheet">
        <h3>Single Villa</h3>
        <p></p>
        <p></p>
        <p><h4>Click on the images to show information.</h4></p>
        <div class="row">
        
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/1_King_A_Villa-1.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/1_King_A_Villa-1.jpg')}}" alt="Lights" style="width:100%; height:30%">
                <div class="caption">
                  <p>
                    <h4>King A Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 21m X 16.5m</h5>
                    Rooms 6
                    Baths 7
                    Parking Space 4
                  </p>
                </div>
              </a>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/1_King_B_Villa.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/1_King_B_Villa.jpg')}}" alt="Nature" style="width:100%">
                <div class="caption">
                <p>
                    <h4>King B Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 18.85m × 16m</h5>
                    Rooms 6
                    Baths 7
                    Parking Space 4
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/1_Prince_Villa.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/1_Prince_Villa.jpg')}}" alt="Fjords" style="width:100%">
                <div class="caption">
                  <p>
                    <h4>Prince Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 12m x 13.2m</h5>
                    Rooms 5
                    Baths 6
                    Parking Space 4
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/01_Queen_Villa_paradigm.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/01_Queen_Villa_paradigm.jpg')}}" alt="Lights" style="width:100% ">
                <div class="caption">
                  <p>
                    <h4>Queen Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 12m x 12m</h5>
                    Rooms 5
                    Baths 6
                    Parking Space 4
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/1_Queen_Villa.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/1_Queen_Villa.jpg')}}" alt="Nature" style="width:100% ">
                <div class="caption">
                  <p>
                    <h4>Queen Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 12m x 12m</h5>
                    Rooms 5
                    Baths 6
                    Parking Space 4
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/Jas4.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/Jas4.jpg')}}" alt="Fjords" style="width:100% ">
                <div class="caption">
                  <p>
                    <h4>Rosana Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 9m x 12.3m</h5>
                    Rooms 5
                    Baths 6
                    Parking Space 2
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/JJJ.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/JJJ.jpg')}}" alt="Lights" style="width:100% ">
                <div class="caption">
                  <p>
                    <h4>Jusmina Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 7.6m x 12m</h5>
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
              <a href="{{asset('images/single_villa/Prince_B_Villa_1.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/Prince_B_Villa_1.jpg')}}" alt="Nature" style="width:100% ">
                <div class="caption">
                  <p>
                    <h4>Prince B Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 7.6m x 12m</h5>
                    Rooms 5
                    Baths 6
                    Parking Space 4
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/single_villa/QB5.jpg')}}" target="_blank">
                <img src="{{asset('images/single_villa/QB5.jpg')}}" alt="Fjords" style="width:100% ">
                <div class="caption">
                  <p>
                    <h4>Queen A Villa</h4>
                    sale@yahoo.com
                    +855 10 000 000
                    <h5>House Size 12m x 12m</h5>
                    Rooms 5
                    Baths 6
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
