@extends('backend.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')
	<div id="passwords-screen" data-controller="new-passwords">
		<section data-new-passwords-target="passwordsContainer">
			<h2>Forgot your password?</h2>
			<p>
				No sweat. Enter the email address you signed up with and we'll send you instructions to reset your password.
			</p>
			<hr>
			<form class="form js-form" action="{{ route('users.send-password-reset-link') }}" accept-charset="UTF-8" data-remote="true" method="POST" novalidate>
				@csrf
				<p class="js-form-email">
					<label for="request_data_email">Email:</label>
					<input class="required" autofocus="autofocus" spellcheck="false" type="email" name="email"  value="{{ old('email') }}" request_data_email"/>
					@error('email')
					<label class="error" for="request_data_email">{{ $message }}</label>
					@enderror
				</p>
				<p style="margin-top: 1.25rem;">
					<button name="button" type="submit" class="button button-primary" data-disable-with="Sending Reset Instructions...">Send Reset Instructions</button>
				</p>
				<p>
					<a href="{{ route('users.sign_in') }}">Return to log in</a>
				</p>
			</form>
		</section>
	</div>
@endsection

