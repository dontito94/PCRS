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
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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


                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
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
@endsection
