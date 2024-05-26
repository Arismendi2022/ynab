@extends('backend.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Login')
@section('content')
	<div id="login-screen" data-controller="login" data-login-otp-form-outlet="#otp-form">
		<div data-login-target="loginContainer">
			<section class="aside-content">
				<aside>
          <span class="doodle">
            <img src="https://app.ynabassets.com/24.35.2/assets/doodle-logo-beb0cccc91b52f686dbc684751aa553c11572c5512c3a49a5ee0eb4cec09f3c8.svg">
          </span>
					<p>
						Create the life you want with YNAB, a money management method that will put you on the path to less money stress.
					</p>
				</aside>
				<div class="authentications-container">
					<div class="authentications-container-item">
						<div data-login-target="loginHeader">
							<h2>Log In</h2>
						</div>
						<div data-login-target="loginSubheader">
							<p>New to YNAB? <a data-action="login#trackClickedSignUp" href="/users/sign_up">Sign up today</a>.</p>
						</div>
						<form id="login-form" class=" form login-form" action="" method="POST">
						
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection