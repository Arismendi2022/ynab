@extends('backend.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')
	<div data-controller="edit-passwords" data-edit-passwords-otp-form-outlet="#otp-form">
		<div class="passwords-container" data-edit-passwords-target="resetPasswordContainer">
			<div class="js-main_screen_or_otp_app_or_otp_backup_code">
				<h2>Reset your password</h2>
				<form class="form js-form" data-edit-passwords-target="resetForm" action="" accept-charset="UTF-8" data-remote="true" method="post" novalidate="novalidate">
					@csrf
					<input value="dpctk11i9Mfx4r-CLxq_" autocomplete="off" type="hidden" name="request_data[reset_password_token]">
					<p>
						<em>Password tip</em>: Create a password using four random words. It's easy to remember, but hard to crack.
					</p>
					<p class="js-form-password">
						<label for="request_data_password">Enter a New Password:</label>
						<span class="password-toggle"><input class="required" autofocus="autofocus" autocapitalize="none" autocomplete="off" type="password" name="request_data[password]" id="request_data_password"><label><input type="checkbox" data-password-toggle="">Show</label></span>
						<label class="error" for="request_data_password"></label>
					</p>
					<p data-edit-passwords-target="resetSubmitButton" style="margin-top: 1.25rem">
						<button name="button" type="submit" class="button button-primary" data-disable-with="Saving New Password...">Save New Password</button>
					</p>
					<div id="otp-form" data-controller="otp-form" data-otp-form-target="otpContainer" data-otp-form-using-backup-code-value="false" hidden="">
						<div>
							<p class="js-form-otp">
								<label data-otp-form-target="label" for="request_data_otp">Enter the 6-digit code from your authenticator app:</label>
								<input placeholder="6-digit code" maxlength="6" class="required" autocomplete="off" autofocus="autofocus" data-otp-form-target="input" size="6" type="text" name="request_data[otp]" id="request_data_otp">
								<label class="error" for="request_data_otp"></label>
							</p>
						</div>
						<br>
						<button name="button" type="submit" class="button button-primary" data-disable-with="Saving New Password...">Save New Password</button>
						<div>
							<p data-otp-form-target="showBackupLink">
								<a href="#" data-action="click->otp-form#showBackup">I'm having trouble</a>
							</p>
							<p data-otp-form-target="troubleshootLink" hidden="">
								<a rel="noopener noreferrer" target="_blank" href="https://support.ynab.com/en_us/how-to-protect-your-account-with-two-step-verification-rkKHuLlRc#troubleshoot">I don't have my backup code</a>
							</p>
						</div>
					</div>
				
				</form>      <p>
					<a href="/users/sign_in">Return to log in</a>
				</p>
			</div>
		</div>
	</div>
@endsection