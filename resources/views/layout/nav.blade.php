@extends('layout.head')
<!DOCTYPE html>
<html lang="en">
<head>

  <!--  dropdown hover menu
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
        $(".dropdown3").hover(function(){
            var dropdownMenu = $(this).children(".dropdown3-menu");
            if(dropdownMenu.is(":visible")){
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });     
    </script>
  -->

  <title>Queen Villa</title>
  <!-- icon title-->
  <link rel = "icon" href ="https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" 
        type = ""> 

  <link href="{{ asset('css/stylehead.css') }}" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid navbar1-custom1">
    <div class="navbar-header">
      <!--<a class="navbar-brand" href="#">The Vila</a>-->
      <img src="{{asset('images/vila.jpg')}}" alt="logo" style="width:45px; height:45px;">
    </div>
    
    <ul class="nav navbar-nav">
      <li class="{{Request::is('/'?'active':null)}}"><a href="{{url('/')}}">Home</a></li>
      <li class=" dropdown3 {{Request::is('dropdown/*'?'active':null)}}"><a class="dropdown-toggle" data-toggle="dropdown" href="" >House Types <span class="caret"></span></a>
        
        <ul class="dropdown-menu dropdown1-menu1 dropdown1 dropdown3-menu">
          <li class="{{ Request::is('dpage1')?' active':null }}"><a href="{{route('dpage1')}}">Single Villa</a></li>
          <li class="{{ Request::is('dpage2')?' active':null }}"><a href="{{route('dpage2')}}">Twin Villa </a></li>
          <li class="{{ Request::is('dpage3')?' active':null }}"><a href="{{route('dpage3')}}">Link House</a></li>
        </ul>
        
      </li>
      <li class="{{Request::is('tpage2')?'active':null}}"><a href="{{route('tpage2')}}">Contact</a></li>
      <li class="{{Request::is('tpage3')?'active':null}}"><a href="{{route('tpage3')}}">About</a></li>
      <li class="search">
        <form class="form-inline ml-auto ">
        <input type="text" class="form-control mr-sm-2" placeholder="Search">
        <button type="button" class="btn btn-outline-light">Search</button>
        </form>

      </li>

    </ul>
  
  </div>
</nav>
  
<div class="container">
    @yield('content')

</div>

</body>
</html>