@extends('backend.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Login')
@section('content')
	<section id="login-screen" class="authentications-section" data-controller="login" data-login-otp-form-outlet="#otp-form">
		<div class="authentications-section__inner">
			<aside class="authentications-aside">
				<div class="authentications-aside__image authentications-aside__image--default"><img
						src="/backend/assets/brand/ynab-tree-logo.svg"></div>
				<h2>Transforma el dinero.</h2>
				<p>
					YNAB ha ayudado a millones de personas a aprender a gastar, ahorrar y vivir con alegría con un conjunto simple de hábitos que cambian la vida.
				</p>
			</aside>
			
			<div class="authentications-panel">
				<div class="authentications-panel__content">
					<div data-login-target="loginHeader">
						<h2>Log In</h2>
					</div>
					<div data-login-target="backupCodeHeader" hidden="">
						<h2>Log In With An Emergency Backup Code</h2>
						<p>As a last resort, log in to YNAB with an emergency backup code. This code was given to you when you first enabled two-step verification.</p>
					</div>
					<div data-login-target="loginSubheader">
						<p>
							New to YNAB?
							<a data-action="login#trackClickedSignUp" href="{{ route('users.sign_up') }}">Sign up today.</a>
						</p>
					</div>
				</div>
				<form id="login-form" class="authentications-panel__form" data-login-target="form" action="{{ route('users.login_handler') }}" accept-charset="UTF-8" method="POST"
					novalidate="novalidate">
					@csrf
					<div data-login-target="identityContainer">
						<p class="authentications-panel__input-group js-form-email">
							<label class="u-sr-only" for="request_data_email">Email:</label>
							<input class="authentications-panel__email-field required" autofocus="autofocus" spellcheck="false" placeholder="Email address" data-login-target="emailInput"
								type="email" name="email" id="request_data_email" value="{{ old('email') }}">
							@error('email')
							<label class="error" for="request_data_email">{{ $message }}</label>
							@enderror
						</p>
						<p class="authentications-panel__input-group js-form-password">
							<label class="u-sr-only" for="request_data_password">Password:</label>
							<span class="password-toggle"><input class="authentications-panel__password-field required" placeholder="Password" data-login-target="passwordInput"
									autocapitalize="none" autocomplete="off" type="password" name="password" id="request_data_password" value="{{ old('password') }}">
								<label><input type="checkbox" id="togglePassword" data-password-toggle="" data-gtm-form-interact-field-id="0">Show</label>
							</span>
							@error('password')
							<label class="error" for="request_data_password">{{ $message }}</label>
							@enderror
						</p>
						<p class="authentications-panel__form-options">
							<label for="request_data_remember_me">
								<input data-login-target="rememberMeInput" type="checkbox" value="1" name="request_data[remember_me]" id="request_data_remember_me">
								Keep me logged in
							</label> <a href="{{ route('users.forgot-password') }}">Forgot password?</a>
						</p>
						<p>
							<button name="login" type="submit" id="login-button" class="authentications-panel__form-button button button-primary" data-disable-with="Logging In...">Log In
							</button>
						</p>
					</div>
					<div class="authentications-panel__otp-form">
						<div id="otp-form" data-controller="otp-form" data-otp-form-target="otpContainer" data-otp-form-using-backup-code-value="false" hidden="">
							<div>
								<p class="js-form-otp">
									<label data-otp-form-target="label" for="request_data_otp">Enter the 6-digit code from your authenticator app:</label>
									<input placeholder="6-digit code" maxlength="6" class="required" autocomplete="off" autofocus="autofocus" data-otp-form-target="input" size="6" type="text"
										name="request_data[otp]" id="request_data_otp">
									<label class="error" for="request_data_otp"></label>
								</p>
							</div>
							<br>
							<button name="button" type="submit" class="button button-primary" data-disable-with="Verifying...">Verify</button>
							<div>
								<p data-otp-form-target="showBackupLink">
									<a href="#" data-action="click->otp-form#showBackup">I'm having trouble</a>
								</p>
								<p data-otp-form-target="troubleshootLink" hidden="">
									<a rel="noopener noreferrer" target="_blank"
										href="#">I don't have my backup code</a>
								</p>
							</div>
						</div>
					</div>
					<div data-login-target="ssoButtons">
						<div class="authentications-sso-buttons">
							<hr class="u-hr-text authentications-sso-buttons__separator" data-content="or"/>
							<div class="u-sr-only">Or sign up with your Apple or Google account</div>
							<div class="authentications-sso-buttons__button">
								<a class="sso-button sso-button--apple js-disabled" data-label="Continue with Apple" data-trigger-action="false" data-login-target="appleButton"
									href="#"><span class="sso-button__logo"><img class="sso-provider-logo"
											src="/backend/assets/brand/apple-logo.svg"/></span><span class="sso-button__label">Continue with Apple</span></a>
								<p class="authentications-sso-button__error authentications-sso-button__error--apple"></p>
							</div>
							<div class="authentications-sso-buttons__button">
								<div class="sso-button sso-button--google" data-login-target="googleButton">
									<div class="sso-button__inner js-disabled" aria-labelledby="button-label"><span class="sso-button__logo"><img class="sso-provider-logo"
												src="/backend/assets/brand/google-logo.svg"/></span><span
											class="sso-button__label1">Continuar con Google</span></div>
								</div>
								<p class="authentications-sso-button__error authentications-sso-button__error--google"></p>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection
@push('scripts')
	<script>
		//Muetra la contraseña
		const passwordField = document.getElementById('request_data_password');
		const togglePassword = document.getElementById('togglePassword');

		togglePassword.addEventListener('change', function () {
			// Toggle the type attribute
			const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
			passwordField.setAttribute('type', type);
		});
		// Este enfoque asegura que el mensaje de error se elimine
		document.addEventListener('DOMContentLoaded', function () {
			const passwordField = document.getElementById('request_data_email');
			const errorLabel = document.querySelector('.error[for="request_data_email"]');

			if (passwordField && errorLabel) {
				passwordField.addEventListener('input', function () {
					errorLabel.style.display = 'none';
				});
			}
		});
		// Este enfoque asegura que el mensaje de error se elimine
		document.addEventListener('DOMContentLoaded', function () {
			const passwordField = document.getElementById('request_data_password');
			const errorLabel = document.querySelector('.error[for="request_data_password"]');

			if (passwordField && errorLabel) {
				passwordField.addEventListener('input', function () {
					errorLabel.style.display = 'none';
				});
			}
		});
		
		//Evitar que la pagina se recarge
		/*const formLogin = document.querySelector("#login-form");

		formLogin.addEventListener('submit', (e) => {
			e.preventDefault();

			const request = new XMLHttpRequest();

			//console.log('Form has been submitted:');

		});*/
	
	</script>
@endpush

