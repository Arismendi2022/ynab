@extends('backend.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Login')
@section('content')
	<div id="login-screen" data-controller="login" data-login-otp-form-outlet="#otp-form">
		<div data-login-target="loginContainer">
			<section class="aside-content">
				<aside>
          <span class="doodle">
            <img src="backend/assets/brand/doodle-logo.svg">
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
							<div data-login-target="identityContainer">
								<p class="js-form-email">
									<label for="request_data_email" class="u-sr-only">Email:</label>
									<input class="required" autofocus="autofocus" spellcheck="false" placeholder="Email address" data-login-target="emailInput" type="email"
									name="request_data[email]" id="request_data_email">
									<label class="error" for="request_data_email"></label>
								</p>
								<p class="js-form-password">
									<label class="u-sr-only" for="request_data_password">Password:</label>
									<span class="password-toggle">
										<input class="required" placeholder="Password" data-login-target="passwordInput" autocapitalize="none" autocomplete="off"
										type="password" name="request_data[password]" id="request_data_password">
										<label><input type="checkbox" id="togglePassword" data-password-toggle="">Show</label></span>
									<label class="error" for="request_data_password"></label>
								</p>
								<p class="remember-me-and-forgot-password">
									<label for="request_data_remember_me">
										<input data-login-target="rememberMeInput" type="checkbox" value="1" name="request_data[remember_me]" id="request_data_remember_me">
										Keep me logged in
									</label> <a href="/users/password/new">Forgot password?</a>
								</p>
								<p>
								</p>
								<div>
									<button name="login" type="submit" id="login" class="button button-primary" data-disable-with="Logging In...">Log In</button>
								</div>
							</div>
							<div data-login-target="ssoButtons">
								<div class="sso-buttons">
									<hr class="u-hr-text" data-content="or">
									<p class="u-sr-only">Or sign up with your Apple or Google account</p>
									<a class="button-brand button-brand-apple" data-label="Continue with Apple" data-trigger-action="false" data-login-target="appleButton"
									href="#" onclick="return false;">
										<span class="button-brand-logo"><img class="provider-logo"
											src="/backend/assets/brand/apple-logo.svg"></span><span
										class="button-brand-name">Continue with Apple
										</span>
									</a>
									<p class="apple-error"></p>
									<div class="button-brand button-brand-google" data-width="288" data-login-target="googleButton">
										<div class="button-brand-google-inner js-disabled"><span class="button-brand-logo"><img class="provider-logo"
												src="/backend/assets/brand/google-logo.svg"/></span><span
											class="button-brand-name">Continuar con Google</span></div>
										<div id="gsi_312426_985296-overlay" class="L5Fo6c-bF1uUb" tabindex="0"></div>
									</div>
									<p class="google-error"></p>
								</div>
							</div>
							<!---->
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
@endsection
@push('scripts')
	<script>
		const passwordField = document.getElementById('request_data_password');
		const togglePassword = document.getElementById('togglePassword');

		togglePassword.addEventListener('change', function () {
			// Toggle the type attribute
			const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
			passwordField.setAttribute('type', type);
		});
	</script>
@endpush

