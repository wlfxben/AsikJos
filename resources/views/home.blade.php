<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="website icon" type="png" href="{{ ('assets/img/AJ1.png') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>AsikJos</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
       

    </head>

    <body>
    <nav class="navbar navbar-dark navbar-expand-lg " style="background-color: #3887BE;" >
  <div class="container flex justify-content-between">
    <a class="navbar-link " href="{{ route( 'home' ) }}">
        <img class="i1"  src="{{ ('assets/img/AsikJos.png') }}" alt="AsikJos Logo"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-0 mx-lg-3" >
        <li class="nav-item d-block d-lg-none d-xl-block" style="padding-top: 20px; padding-left:55px;">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}" style="font-family: 'rubik';">Home</a>
        </li>
        <li class="nav-item" style="padding-top: 20px; padding-left:55px;">
          <a class="nav-link" href="#" style="font-family: 'rubik';">Discussions</a>
        </li>
        <li class="nav-item" style="padding-top: 20px; padding-left:55px;">
          <a class="nav-link text-nowrap" href="#" style="font-family: 'rubik';">About Us</a>
        </li>
        
      </ul>
      <form class="d-flex w-100  ms-4 me-4 pt-3 my-2 my-lg-0" role="search" action="#" method="get">
        <div class="input-group">
          <span class="input-group-text bg-white border-end-0"> <img  class="search1"   src="{{ url('assets/img/search-button.png') }}" alt="search"></span>
        <input class="form-control border-start-0 ps-0"   type="search" placeholder="Search..." name="" value=""> 
        </div>      
      </form>
      <ul class="navbar-nav ms-auto my-2 my-lg-0">
      <li class="nav-item my-auto" style="padding-top: 15px; font-family: 'rubik'; font-weight: 500px;">
          <a class="btn btn-outline-info text-nowrap" href="#">Make a Thread</a>
        </li>
      <li class="nav-item ps-1 pe-0" style="margin-right: -150px; font-family: 'rubik'; margin-top: 15px;">
          <a class="btn btn-primary-white" href="#">Sign Up</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    </body>
</html>
