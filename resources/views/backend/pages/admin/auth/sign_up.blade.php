@extends('backend.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Register')
@section('content')
	<div id="signup-screen" data-controller="signup">
		<section class="aside-content">
			<aside>
          <span class="doodle">
            <img src="/backend/assets/brand/doodle-logo.svg">
          </span>
				<p>
					Create the life you want with YNAB, a money management method that will put you on the path to less money stress.
				</p>
			</aside>
			<div class="authentications-container">
				<div class="authentications-container-item">
					<h2>Create an account</h2>
					<p>Have an account? <a data-action="login#trackClickedSignUp" href="{{ route('users.sign_in') }}">Log in</a>.</p>
					<form class="form signup-form" action="{{ route('users.create') }}" method="POST" accept-charset="UTF-8" novalidate>
						@csrf
						<div data-login-target="identityContainer">
							<p class="js-form-email">
								<label for="request_data_email" class="u-sr-only">Email:</label>
								<input class="required" autofocus="autofocus" spellcheck="false" placeholder="Email address" data-login-target="emailInput" type="email"
								name="email" id="request_data_email_signup" value="{{old('email')}}">
								@error('email')
								<label class="error" for="request_data_email_signup">{{ $message }}</label>
								@enderror
							</p>
							<p class="js-form-password">
								<label class="u-sr-only" for="request_data_password_signup">Password:</label>
								<span class="password-toggle">
										<input class="required" placeholder="Password" data-login-target="passwordInput" autocapitalize="none" autocomplete="off"
										type="password" name="password" id="request_data_password_signup">
										<label><input type="checkbox" id="togglePassword" data-password-toggle="">Show</label></span>
								@error('password')
								<label class="error" for="request_data_password_signup">{{ $message }}</label>
								@enderror
							</p>
							<p>
								<button name="sign_up" type="submit" id="sign_up" class="button button-primary" data-disable-with="Signing Up...">Sign Up</button>
							</p>
							<p class="terms-consent">
								By creating an account, you agree to the YNAB <a rel="noopener noreferrer" target="_blank" href="#" onclick="return false;">Privacy Policy</a> and <a
								rel="noopener noreferrer" target="_blank" href="#" onclick="return false;">Terms of Service</a>.
							</p>
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
@endsection
@push('scripts')
	<script>
		const passwordField = document.getElementById('request_data_password_signup');
		const togglePassword = document.getElementById('togglePassword');

		togglePassword.addEventListener('change', function () {
			// Toggle the type attribute
			const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
			passwordField.setAttribute('type', type);
		});
		// Este enfoque asegura que el mensaje de error se elimine
		document.addEventListener('DOMContentLoaded', function () {
			const passwordField = document.getElementById('request_data_email_signup');
			const errorLabel = document.querySelector('.error[for="request_data_email_signup"]');

			if (passwordField && errorLabel) {
				passwordField.addEventListener('input', function () {
					errorLabel.style.display = 'none';
				});
			}
		});
		// Este enfoque asegura que el mensaje de error se elimine
		document.addEventListener('DOMContentLoaded', function () {
			const passwordField = document.getElementById('request_data_password_signup');
			const errorLabel = document.querySelector('.error[for="request_data_password_signup"]');

			if (passwordField && errorLabel) {
				passwordField.addEventListener('input', function () {
					errorLabel.style.display = 'none';
				});
			}
		});
	</script>
@endpush