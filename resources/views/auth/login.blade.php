@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="row0">
        <a href="/register">Register case</a> 
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
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <div class="col-md-2">
       <img src="img/fae6Police-officers.jpg" class="img4">
       <h2 class="widget"><a href="">QUICK LINKS</a></h2>
       <ul>
        <li class="cat-item cat-item-3"><a href="#" >Helo</a></li>
        <li class="cat-item cat-item-4"><a href="#" >hi</a></li>
        <li class="cat-item cat-item-5"><a href="#" >Category 3</a></li>
        <li class="cat-item cat-item-6"><a href="#" >Category 4</a></li>
        <li class="cat-item cat-item-7"><a href="#" >Category 5</a></li>
        <li class="cat-item cat-item-1"><a href="#" >Uncategorized</a></li>
    </ul>
   </div>
        </div>
    </div>
</div>
@endsection
