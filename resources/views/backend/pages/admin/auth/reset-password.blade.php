@extends('backend.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Reset password')
@section('content')
	<div data-controller="edit-passwords" data-edit-passwords-otp-form-outlet="#otp-form">
		<div class="passwords-container" data-edit-passwords-target="resetPasswordContainer">
			<div class="js-main_screen_or_otp_app_or_otp_backup_code">
				<h2>Reset your password</h2>
				<form class="form js-form" action="{{ route('users.reset-password-handler') }}" accept-charset="UTF-8" data-remote="true" method="POST" novalidate="novalidate">
					@csrf
					<input value="{{ request()->token }}" autocomplete="off" type="hidden" name="token">
					<p>
						<em>Password tip</em>: Create a password using four random words. It's easy to remember, but hard to
						crack.
					</p>
					<p class="js-form-password">
						<label for="request_data_password">Enter a New Password:</label>
						<span class="password-toggle"><input class="required" autofocus="autofocus" autocapitalize="none" autocomplete="off" type="password" name="new_password"
							id="request_data_password" value="{{ old('new_password') }}"><label><input type="checkbox" id="togglePassword" data-password-toggle="">Show</label></span>
						@error('new_password')
						<label class="error" for="request_data_password">{{ $message }}</label>
						@enderror
					</p>
					<p data-edit-passwords-target="resetSubmitButton" style="margin-top: 1.25rem">
						<button name="button" type="submit" class="button button-primary" data-disable-with="Saving New Password...">Save New Password</button>
					</p>
				</form>
				<p>
					<a href="{{ route('users.sign_in') }}">Return to log in</a>
				</p>
			</div>
		</div>
		<div data-edit-passwords-target="resetSuccessContainer" hidden="">
			<div data-edit-passwords-target="nonOTPSuccessContainer" hidden="">
				<h2>Your password has been reset.</h2>
				<p>
					You can now log in and make further edits in account settings.
				</p>
				<p>
					<a class="button button-launch-app launch_app_button" id="launch_app_button" href="/">Open
						Budget</a>
				</p>
			
			</div>
			<br>
			<p>
				Need help? Chat with us in the app or email us at <a href="mailto:help@ynab.com">help@ynab.com</a>.
			</p>
		
		</div>
	</div>

@endsection
@push('scripts')
	<script>
	
	</script>
@endpush
