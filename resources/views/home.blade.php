@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row">
     <div class="col-md-3">
     <div class="row0">
        <a href="{{ url('/Caseregister') }}">Register case</a> 
        </div>
        <div class="row1">
        <a href="{{ url('/register') }}">Register officers</a> 
        </div>
        <div class="row1">
        <a href="/register">Crimes details</a> 
        </div>
        <div class="row1">
        <a href="/register">Case registered</a> 
        </div>
        <div class="row1">
        <a href="/register">Infrmations</a> 
        </div>
        <div class="row1">
        <a href="{{ url('/about') }}">About</a> 
        </div>
        <div class="row1">
        <a href="{{ url('/contacts') }}">Contacts</a> 
        </div>
        <div class="row1">
        <a href="/register">Register case</a> 
        </div>
         <div class="row1">
        <a href="/register">Register case</a> 
        </div>
     </div>
     <div class="col-md-6">
        
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <img src="img/taifa.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/3-10.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/taifa.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/3-10.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     <h1>WELCOME</h1>
         <hr/>

         <div class="row">
    <p>Whether you are looking for a custom one-page site or a comprehensive e-commerce platform, our designs seamlessly integrate with evolving technology. We keep our client's vision at the forefront as we guide them to their perfect online image.  </p>
     </div>
     </div>
   <div class="col-md-2">
       <img src="img/fae6Police-officers.jpg" class="img4">
       <h2 class="widget"><a href="">QUICK LINKS</a></h2>
       <ul>
       <li class="cat-item cat-item-3"><a href="http://nida.go.tz/swahili/" >NIDA</a></li>
        <li class="cat-item cat-item-4"><a href="http://www.nec.go.tz/" >BVR</a></li>
        <li class="cat-item cat-item-5"><a href="#" ></a></li>
        <li class="cat-item cat-item-6"><a href="#" >Category 4</a></li>
        <li class="cat-item cat-item-7"><a href="#" >Category 5</a></li>
        <li class="cat-item cat-item-1"><a href="#" >Uncategorized</a></li>
    </ul>
   </div>

 </div>
    </div>
</div>
@endsection
