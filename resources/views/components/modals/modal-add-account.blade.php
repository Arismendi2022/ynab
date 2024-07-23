{{-- modal add account --}}
<div id="ember145" class="ynab-u modal-generic self-centered account-widget-modal ">
	<div class="modal" role="dialog" aria-modal="true">
		<div class="account-widget" tabindex="0">
			<!-- Primera sección -->
			<div class="account-widget-step account-widget-select-linked-unlinked account-widget-step-with-help-box">
				<div class="account-widget-header">
					<div class="hidden-header-button"></div>
					<div class="account-widget-header-title">
						<h1>Add Account</h1>
						<!---->
					</div>
					<button aria-label="Close" title="Close" type="button">
						<svg class="ynab-new-icon icon-close" width="16" height="16">
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
				<div class="account-widget-body">
					<div class="select-linked-unlinked-box select-linked-unlinked-box-linked" role="button" tabindex="0">
						<div class="select-linked-unlinked-box-text">
							<div class="select-linked-unlinked-box-icon">
								<svg class="ynab-new-icon icon-download" width="16" height="16">
									<!---->
									<use href="#icon_sprite_arrow_from_cloud">
										<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_arrow_from_cloud" fill="none" viewBox="0 0 24 24">
											<path fill="currentColor" fill-rule="evenodd"
												d="M18.5 16.6h-2.8a1 1 0 1 1 0-1.8h2.7a3.7 3.7 0 0 0 3.8-3.7c0-2.5-2-3.3-3-3.7a1 1 0 0 1-.7-.8v-.5a5 5 0 0 0-4.6-4.3c-2.1 0-3.3 1.3-4 2.2a1 1 0 0 1-1 .3l-1.1-.1A3 3 0 0 0 5 6.9v.6a1 1 0 0 1-.6.8c-1.2.5-2.7 1.2-2.7 3.4a3 3 0 0 0 3.3 3h3.2a1 1 0 1 1 0 2H5.1a5 5 0 0 1-1.9-9.9 4.6 4.6 0 0 1 5.6-4.4 6.5 6.5 0 0 1 11.5 3.4 5.5 5.5 0 0 1-1.8 10.8m-9.7 1.9H11V9.2a1 1 0 0 1 1.8 0v9.3h2.3a.5.5 0 0 1 .4.7l-3.2 4.6a.5.5 0 0 1-.8 0l-3.2-4.6a.5.5 0 0 1 .4-.7"
												clip-rule="evenodd"></path>
										</symbol>
									</use>
								</svg>
							</div>
							<div class="select-linked-unlinked-box-icon-title-message">
          <span class="select-linked-unlinked-box-title">
            Linked
          </span>
								<p class="select-linked-unlinked-box-message">
									Connect to your bank and automatically import transactions.
								</p>
							</div>
						</div>
					</div>
					<div class="separator-text">
						<span>or</span>
					</div>
					<div class="select-linked-unlinked-box select-linked-unlinked-box-unlinked" role="button" tabindex="0">
						<div class="select-linked-unlinked-box-text">
							<div class="select-linked-unlinked-box-icon">
								<svg class="ynab-new-icon icon-edit" width="16" height="16">
									<!---->
									<use href="#icon_sprite_square_and_pencil">
										<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_square_and_pencil" fill="none" viewBox="0 0 24 25">
											<path fill="currentColor" fill-rule="evenodd"
												d="M22 4.8h-.5l-2.3-2.3a.4.4 0 0 1 0-.6L20.8.4a1.2 1.2 0 0 1 1.7 0l1.1 1a1.2 1.2 0 0 1 0 1.8zM9.8 16.6l-2.8.8a.3.3 0 0 1-.4-.3l.9-2.8c.1-.5.4-1 .8-1.4l9.5-9.5c.2-.2.5-.2.6 0l2.3 2.3a.4.4 0 0 1 0 .6l-9.5 9.5a3 3 0 0 1-1.4.8m12.1-5.1v9.2a3.3 3.3 0 0 1-3.3 3.3H3.3A3.3 3.3 0 0 1 0 20.7V5.5a3.3 3.3 0 0 1 3.3-3.3h9.2a1 1 0 1 1 0 2.2H3.3a1 1 0 0 0-1.1 1v15.3c0 .6.5 1.1 1 1.1h15.3c.6 0 1.1-.5 1.1-1v-9.3a1 1 0 1 1 2.2 0"
												clip-rule="evenodd"></path>
										</symbol>
									</use>
								</svg>
							</div>
							<div class="select-linked-unlinked-box-icon-title-message">
								<span class="select-linked-unlinked-box-title">
									Unlinked
								</span>
								<p class="select-linked-unlinked-box-message">
									Start with your current balance and enter your own transactions.
								</p>
							</div>
						</div>
					</div>
					<div class="account-widget-help-box">
						<svg class="ynab-new-icon " width="16" height="16">
							<!---->
							<use href="#icon_sprite_info_circle_fill">
								<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_info_circle_fill" fill="none" viewBox="0 0 24 24">
									<path fill="currentColor" fill-rule="evenodd"
										d="M12 24a12 12 0 1 1 0-24 12 12 0 0 1 0 24m.8-16A1.6 1.6 0 0 1 11 6.5 1.6 1.6 0 0 1 12.8 5a1.6 1.6 0 0 1 1.7 1.5A1.6 1.6 0 0 1 12.8 8m.7 3.4L12 16.6c-.2.5.1 1 .6 1.3l.3.4v.2l-.5.5H11a1.5 1.5 0 0 1-1.5-1.9L11 12a1 1 0 0 0-.6-1.3l-.3-.4V10l.5-.5H12a1.5 1.5 0 0 1 1.5 1.9"
										clip-rule="evenodd"></path>
								</symbol>
							</use>
						</svg>
						<p>
							Linked or unlinked? <a href="#" onclick="return false;" tabindex="0">Learn more</a> to help you decide.
						</p>
					</div>
				</div>
			</div>
			<!-- Segunda sección -->
			<div class="account-widget-step account-widget-add-unlinked-account account-widget-step-with-help-box" style="display: none">
				<div class="account-widget-header">
					<button aria-label="Back" title="Back" type="button">
						<svg class="ynab-new-icon icon-back" width="16" height="16">
							<!---->
							<use href="#icon_sprite_chevron_left">
								<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_chevron_left" fill="none" viewBox="0 0 24 24">
									<path fill="currentColor" fill-rule="evenodd"
										d="M18.7 23.6a2 2 0 0 1-2.1 0L5.3 13a1.4 1.4 0 0 1 0-2L16.6.4a2 2 0 0 1 2 0c.7.6.7 1.5 0 2L8.6 12l10.2 9.6c.6.5.6 1.4 0 2" clip-rule="evenodd"></path>
								</symbol>
							</use>
						</svg>
					</button>
					<div class="account-widget-header-title">
						<h1>Add Unlinked Account</h1>
						<!---->
					</div>
					<button aria-label="Close" title="Close" type="button">
						<svg class="ynab-new-icon icon-close" width="16" height="16">
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
				<div class="account-widget-body">
					<p>
						<span class="header-strong">Let's go!</span>
						And don’t worry—if you change your mind, you can link your account at any time.
					</p>
					<div class="y-form-field field-with-error ">
						<label>Give it a nickname</label>
						<input id="ember146" class="ember-text-field ember-view y-input name-input user-data" autocomplete="nope" autocorrect="off" autocapitalize="words" type="text">
					</div>
					<div class="y-form-field field-with-error ">
						<label>What type of account are you adding?</label>
						<button class="account-type-select-button" type="button">
							Select account type...
							<svg class="ynab-new-icon" width="16" height="16">
								<!---->
								<use href="#icon_sprite_caret_right">
									<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_caret_right" fill="none" viewBox="0 0 24 24">
										<path fill="currentColor" d="M19.5 13 6.1 23.8c-.9.7-2.1 0-2.1-1V1.3c0-1 1.2-1.7 2-1l13.5 10.6a1.4 1.4 0 0 1 0 2.2"></path>
									</symbol>
								</use>
							</svg>
						</button>
						<!---->
					</div>
					<div class="y-form-field field-with-error  currency-input-group">
						<label>
							What is your current account balance?
						</label>
						<input id="ember147" class="ember-text-field ember-view y-input balance-input user-data" autocomplete="nope" autocorrect="off" spellcheck="false" autocapitalize="none"
							inputmode="decimal" type="text">
						<!---->
					</div>
					<!---->
				</div>
				<div class="account-widget-footer">
					<button class="ynab-button primary is-large " type="button" disabled="">Next</button>
				</div>
			</div>
			<!-- Tercera sección -->
			<div class="account-widget-step account-widget-add-unlinked-account account-widget-step-with-help-box" style="display: none">
				<div class="account-widget-header">
					<button aria-label="Back" title="Back" type="button">
						<svg class="ynab-new-icon icon-back" width="16" height="16">
							<!---->
							<use href="#icon_sprite_chevron_left">
								<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_chevron_left" fill="none" viewBox="0 0 24 24">
									<path fill="currentColor" fill-rule="evenodd"
										d="M18.7 23.6a2 2 0 0 1-2.1 0L5.3 13a1.4 1.4 0 0 1 0-2L16.6.4a2 2 0 0 1 2 0c.7.6.7 1.5 0 2L8.6 12l10.2 9.6c.6.5.6 1.4 0 2" clip-rule="evenodd"></path>
								</symbol>
							</use>
						</svg>
					</button>
					<div class="account-widget-header-title">
						<h1>Select Account Type</h1>
						<!---->
					</div>
					<button aria-label="Close" title="Close" type="button">
						<svg class="ynab-new-icon icon-close" width="16" height="16">
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
				<div class="account-widget-body">
					<div class="account-type-select">
						<div class="account-type-select-group">
							<h3>Budget Accounts</h3>
							<p>Accounts that you'll spend from in the near future (usually within the next year or two).</p>
							<button class="account-widget-list-button" data-account-type="Checking" type="button">
								Checking
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="Savings" type="button">
								Savings
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="Cash" type="button">
								Cash
								<!---->
								<svg class="ynab-new-icon" width="16" height="16">
									<!---->
									<use href="#icon_sprite_check">
										<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_check" fill="none" viewBox="0 0 24 24">
											<path fill="currentColor" d="m7.4 17.6-5-5a1.4 1.4 0 0 0-2 0 1.4 1.4 0 0 0 0 2l6 6a1.4 1.4 0 0 0 2 0L23.6 5.4a1.4 1.4 0 0 0 0-2 1.4 1.4 0 0 0-2 0z"></path>
										</symbol>
									</use>
								</svg>
							</button>
							<button class="account-widget-list-button" data-account-type="CreditCard" type="button">
								Credit Card
								<!----->
							</button>
							<button class="account-widget-list-button" data-account-type="LineOfCredit" type="button">
								Line of Credit
								<!---->
							</button>
						</div>
						<div class="account-type-select-group">
							<h3>Mortgages and Loans</h3>
							<p>Accounts that have an outstanding balance you're currently paying off, and aren't spending from.</p>
							<button class="account-widget-list-button" data-account-type="Mortgage" type="button">
								Mortgage
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="AutoLoan" type="button">
								Auto Loan
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="StudentLoan" type="button">
								Student Loan
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="PersonalLoan" type="button">
								Personal Loan
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="MedicalDebt" type="button">
								Medical Debt
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="OtherDebt" type="button">
								Other Debt
								<!---->
							</button>
						</div>
						<div class="account-type-select-group">
							<h3>Tracking Accounts</h3>
							<p>Accounts that hold money you don't plan to spend soon, such as investments or loans.</p>
							<button class="account-widget-list-button" data-account-type="OtherAsset" type="button">
								Asset (e.g. Investment)
								<!---->
							</button>
							<button class="account-widget-list-button" data-account-type="OtherLiability" type="button">
								Liability
								<!---->
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!---->
	</div>
</div>

@push('scripts')
	<script>
		//Alterna entre secciones
		document.addEventListener('DOMContentLoaded', function () {
			const buttonUnlinked = document.querySelector('.select-linked-unlinked-box-unlinked');
			const buttonType = document.querySelector('.account-type-select-button');

			const sectionOne = document.querySelector('.account-widget-select-linked-unlinked');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionThree = document.querySelector('.account-widget-step:nth-of-type(3)');

			//Seccion 1 a 2
			buttonUnlinked.addEventListener('click', () => {
				sectionOne.style.display = "none";
				sectionTwo.style.display = "";
			});

			//Seccion 2 a 3
			buttonType.addEventListener('click', () => {
				sectionTwo.style.display = "none";
				sectionThree.style.display = "";
			});

		});


		//Manejo de botones "Back"
		document.addEventListener('DOMContentLoaded', function () {
			const backButtons = document.querySelectorAll('button[aria-label="Back"]');

			const sectionOne = document.querySelector('.account-widget-select-linked-unlinked');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionThree = document.querySelector('.account-widget-step:nth-of-type(3)');

			backButtons.forEach(function (button) {
				button.addEventListener('click', function () {
					if (sectionThree.style.display === "" || sectionThree.style.display === "") {
						// De sección 3 a sección 2
						sectionTwo.style.display = "";
						sectionThree.style.display = "none";
					} else if (sectionTwo.style.display === "" || sectionTwo.style.display === "") {
						// De sección 2 a sección 1
						sectionOne.style.display = "";
						sectionTwo.style.display = "none";
					}
				});
			});

		});


		//Cierra el modal
		document.addEventListener('DOMContentLoaded', function () {
			const closeButtons = document.querySelectorAll('button[aria-label="Close"]');

			const sectionOne = document.querySelector('.account-widget-select-linked-unlinked');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionThree = document.querySelector('.account-widget-step:nth-of-type(3)');

			closeButtons.forEach(function (button) {
				button.addEventListener('click', function () {
					const modalActive = document.getElementById('ember145');
					modalActive.classList.remove('modal-overlay', 'active');
					sectionOne.style.display = "";
					sectionTwo.style.display = "none";
					sectionThree.style.display = "none";

				});
			});
		});
	
	</script>

@endpush
