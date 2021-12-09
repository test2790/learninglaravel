@extends('layout.nav')
@section('content')
    @include('layout.slider')
    <div class="container">
      <link href="{{ asset('css/stylehead.css') }}" rel="stylesheet">
        <h3>The Villa Gallery</h3>
        <p></p>
        <p></p>
        <p><h4>Click on the images to show information.</h4></p>
        <div class="row">
        
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila1.jpg')}}" target="_blank">
                <img src="{{asset('images/vila1.jpg')}}" alt="Lights" style="width:100%; height:30%">
                <div class="caption">
                  <p>Queen Villa is one of the Unique and Modern House Type located...</p>
                </div>
              </a>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila2.jpg')}}" target="_blank">
                <img src="{{asset('images/vila2.jpg')}}" alt="Nature" style="width:100%">
                <div class="caption">
                  <p>Experience the most luxurious way to enjoy living on Queen Villa.</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila3.jpg')}}" target="_blank">
                <img src="{{asset('images/vila3.jpg')}}" alt="Fjords" style="width:100%">
                <div class="caption">
                  <p>Queen A Villa is outfitted with spacious external...</p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila4.jpg')}}" target="_blank">
                <img src="{{asset('images/vila4.jpg')}}" alt="Lights" style="width:100% ">
                <div class="caption">
                  <p>Experience the most luxurious way to enjoy living on Rosana Villa.</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila5.jpg')}}" target="_blank">
                <img src="{{asset('images/vila5.jpg')}}" alt="Nature" style="width:100% ">
                <div class="caption">
                  <p>Twin Villa is coming with a design of clean lines and smooth.</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila6.jpg')}}" target="_blank">
                <img src="{{asset('images/vila6.jpg')}}" alt="Fjords" style="width:100% ">
                <div class="caption">
                  <p>Rosana Villa is uniquely able to host the Khmer extended...</p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila7.jpg')}}" target="_blank">
                <img src="{{asset('images/vila7.jpg')}}" alt="Lights" style="width:100% ">
                <div class="caption">
                  <p>King A Villa  is uniquely able to host the Khmer extended family...</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila8.jpg')}}" target="_blank">
                <img src="{{asset('images/vila8.jpg')}}" alt="Nature" style="width:100% ">
                <div class="caption">
                  <p>King B Villa is outfitted with spacious external...</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('images/vila9.jpg')}}" target="_blank">
                <img src="{{asset('images/vila9.jpg')}}" alt="Fjords" style="width:100% ">
                <div class="caption">
                  <p>Experience all the key features of grandness and that are included...</p>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    
    @include('layout.footer')
@endsection