@extends('layouts.app')



  @section('content')
<div class="container">
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
        
      
     <h1>About us</h1>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@endsection