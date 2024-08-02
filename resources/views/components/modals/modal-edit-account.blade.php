{{-- Modal Edit Account --}}
<div id="ember42" class="ynab-u modal-popup account-modal">
	<div class="modal" role="dialog" aria-modal="true" style="left: 720px; top: 171.5px;">
		
		<div class="modal-header modal-header-with-close">
        <span class="modal-header-with-close-title">
          Edit Account
        </span>
			<button type="button" class="close-modal-button">
				<svg class="ynab-new-icon" width="16" height="16">
					<!---->
					<use href="#icon_sprite_close">
						<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_close" fill="none" viewBox="0 0 24 24">
							<path fill="currentColor" fill-rule="evenodd"
								d="M22.5 22.5a1.4 1.4 0 0 1-2 0L12 13.9l-8.6 8.6a1.4 1.4 0 0 1-1.9-2l8.6-8.5-8.6-8.5a1.4 1.4 0 0 1 2-2l8.5 8.6 8.5-8.6a1.4 1.4 0 1 1 2 2L13.9 12l8.6 8.6a1.4 1.4 0 0 1 0 1.9"
								clip-rule="evenodd"></path>
						</symbol>
					</use>
				</svg>
			</button>
		</div>
		<div class="modal-content account-details-modal-scrollable">
			<!---->
			<div class="fieldset">
				<dl>
					<dt class="section-header">Account Information</dt>
				</dl>
			</div>
			<div class="fieldset modal-account-settings-name edit-account-name">
				<dl>
					<dt>Account Nickname</dt>
					<dd class="user-data">
						<div class="field-with-error">
							<div>
								<input>
							</div>
							<!---->
						</div>
					</dd>
				</dl>
			</div>
			<div class="fieldset modal-account-settings-name edit-account-note">
				<dl>
					<dt>Account Notes</dt>
					<dd class="user-data">
						<textarea aria-label="Account Notes"></textarea>
					</dd>
				</dl>
			</div>
			<hr>
			<div class="fieldset edit-working-balance">
				<dl>
					<dt class="section-header">Working Balance</dt>
					<dd class="user-data">
						<div class="field-with-error">
							<div>
								<div id="ember43" class="ynab-new-currency-input is-editing legacy-currency-input">
									<!---->
									<div class="input-wrapper">
										<input id="ember157" class="ember-text-field ember-view" placeholder="What is the balance of this account right now?" title="Working Balance"
											aria-label="Working Balance" type="text">
										<button class="user-data currency positive">
											<bdi>$</bdi>
											2,400,000.00
										</button>
									</div>
									<!---->
								</div>
							</div>
							<!---->
							<!---->
						</div>
						<div class="info space-top">An adjustment transaction will be created automatically if you change this amount.</div>
					</dd>
				</dl>
			</div>
			<!---->
			<hr>
			<div class="fieldset edit-direct-import-toggle">
				<dl>
					<dt class="section-header">Financial Institution Connection</dt>
					<dd class="user-data">
						<button class="ynab-button primary   link-to-bank" type="button">
							Link Account
						</button>
						<div class="info">
							Link your account to your financial institution and import transactions without ever leaving YNAB.
						</div>
						<!---->
					</dd>
				</dl>
			</div>
			<!---->
		</div>
		<div class="modal-actions top-border">
			<button class="ynab-button destructive left-button" type="button">
				Delete Account
			</button>
			<button class="ynab-button secondary button-cancel" type="button">
				Cancel
			</button>
			<button class="ynab-button primary js-primary-action save-account-button" type="button">
				Save
			</button>
		</div>
		<!---->
	</div>
</div>

@push('scripts')
	<script>
		//Cerrar modal
		document.addEventListener('DOMContentLoaded', function () {
			const cancelButton = document.querySelector('.button-cancel');
			const closeButton = document.querySelector('.close-modal-button');
			const modalOverlay = document.getElementById('ember42');

			// Función para cerrar el modal
			const closeModal = () => {
				modalOverlay.classList.remove('modal-overlay', 'active');
			};

			// Agrega el evento de clic a ambos botones
			cancelButton.addEventListener('click', closeModal);
			closeButton.addEventListener('click', closeModal);
		});
	
	</script>
@endpush
