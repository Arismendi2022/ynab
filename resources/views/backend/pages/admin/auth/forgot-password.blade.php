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
			<form class="form js-form" data-new-passwords-target="initiateForm" data-action="" action="" accept-charset="UTF-8" data-remote="true" method="post">
				@csrf
				<p class="js-form-email">
					<label for="request_data_email">Email:</label>
					<input class="required" autofocus="autofocus" spellcheck="false" data-new-passwords-target="emailInput" type="email" name="request_data[email]" id="request_data_email"/>
					<label class="error" for="request_data_email"></label>
				</p>
				<p style="margin-top: 20px;">
					<button name="button" type="submit" class="button button-primary" data-disable-with="Sending Reset Instructions...">Send Reset Instructions</button>
				</p>
				<p>
					<a href="{{ route('users.sign_in') }}">Return to log in</a>
				</p>
			</form>
		</section>
	</div>
@endsection

