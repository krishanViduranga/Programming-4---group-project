@extends('master')
@section('title', 'Login|SpareMart')
@section('section')
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<div class="panel-body">
		                    <form class="form-horizontal" method="POST" action="{{ route('login') }}"> <!--login form-->
		                        {{ csrf_field() }}

		                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

		                            <div class="col-md-6">
		                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
		                                <input id="password" type="password" class="form-control" name="password" required>

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
		                                    <span>
		                                    	<label>
		                                        	<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
		                                    	</label>
		                                    </span>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                        	<div class="col-md-8 col-md-offset-2">
		                        		<a class="btn btn-link" href="{{ route('password.request') }}">
		                                    Forgot Your Password?
		                                </a>
		                        	</div>
		                            <div class="col-md-8 col-md-offset-4">		                            	
		                                <button type="submit" class="btn btn-primary">
		                                    Login
		                                </button>		                                
		                            </div>
		                        </div>
		                    </form><!--/login form-->
                		</div>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<div class="panel-body">
		                    <form class="form-horizontal" method="POST" action="{{ route('register') }}"><!--/sign up form-->
		                        {{ csrf_field() }}

		                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		                            <label for="name" class="col-md-4 control-label">Name</label>

		                            <div class="col-md-6">
		                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
		                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
		                                <input id="password" type="password" class="form-control" name="password" required>

		                                @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

		                            <div class="col-md-6">
		                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    Register
		                                </button>
		                            </div>
		                        </div>
		                    </form><!--/sign up form-->
                		</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection