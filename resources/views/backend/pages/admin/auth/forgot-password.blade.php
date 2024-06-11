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
			<form class="form js-form" id="password-reset-form" action="{{ route('users.send-password-reset-link') }}" accept-charset="UTF-8" data-remote="true" method="POST" novalidate>
				@csrf
				<p class="js-form-email">
					<label for="request_data_email">Email:</label>
					<input class="required" autofocus="autofocus" spellcheck="false" type="email" name="email" value="{{ old('email') }}" id="request_data_email"/>
					<label class="error" id="email-error" for="request_data_email" style="display: none;"></label>
				</p>
				<p style="margin-top: 1.25rem;">
					<button name="button" type="submit" class="button button-primary" data-disable-with="Sending Reset Instructions...">Send Reset Instructions</button>
				</p>
				<p>
					<a href="{{ route('users.sign_in') }}">Return to log in</a>
				</p>
			</form>
		</section>
		<section data-new-passwords-target="passwordsSuccessContainer" style="display: none;">
			<h2>Reset password instructions sent!</h2>
			<p>
				Instructions to reset your password have been sent to <strong class="js-email"></strong>.
			</p>
			<p>
				<a class="button" href="{{ route('users.sign_in') }}">Return to log in</a>
			</p>
		</section>
	</div>
@endsection
@push('scripts')
	<script>
		$(document).ready(function () {
			$('#password-reset-form').on('submit', function (e) {
				e.preventDefault();

				var form = $(this);
				var actionUrl = form.attr('action');
				var formData = form.serialize();

				$.ajax({
					type: 'POST',
					url: actionUrl,
					data: formData,
					dataType: 'json',
					success: function (response) {
						// Restablecer los mensajes de error
						$('#email-error').hide().text('');

						if (response.success) {
							// Ocultar la sección del formulario
							$('[data-new-passwords-target="passwordsContainer"]').hide();

							// Mostrar la sección de éxito
							$('[data-new-passwords-target="passwordsSuccessContainer"]').show();

							// Actualizar el email en el mensaje de éxito
							$('.js-email').text(response.email);
						} else {
							// Mostrar mensajes de error en el DOM
							if (response.errors.email) {
								$('#email-error').text(response.errors.email[0]).show();
							}
						}
					},
					error: function (xhr) {
						var response = xhr.responseJSON;
						if (response && response.errors) {
							if (response.errors.email) {
								$('#email-error').text(response.errors.email[0]).show();
							}
						}
					}
				});
			});
		});
	</script>
@endpush
