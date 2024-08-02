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
			<div class="account-widget-step account-widget-add-unlinked-account account-widget-step-with-help-box">
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
							<spa class="button-text">Select account type...</spa>
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
					<div class="y-form-field field-with-error currency-input-group">
						<label>
							What is your current account balance?
						</label>
						<input id="ember147" class="ember-text-field ember-view y-input balance-input user-data" autocomplete="nope" autocorrect="off" spellcheck="false" autocapitalize="none"
							inputmode="decimal" type="text">
						<!---->
					</div>
					<!---->
					<!-- Opciónes para Loan -->
					<div class="account-loan" style="display: none">
						<div class="add-unlinked-account-split-row">
							<div class="add-unlinked-account-current-balance">
								<div class="y-form-field field-with-error  currency-input-group">
									<label>
										Current account balance
									</label>
									<input id="ember161" class="ember-text-field ember-view y-input current-account-balance-input user-data" autocomplete="nope" autocorrect="off" spellcheck="false"
										autocapitalize="none" inputmode="decimal" type="text">
									<!---->
								</div>
							</div>
							<div class="add-unlinked-account-interest-rate">
								<div class="y-form-field field-with-error  currency-input-group interest-input-group">
									<label>Interest rate</label>
									<label class="input-icon">%</label>
									<input id="ember162" class="ember-text-field ember-view y-input interest-rate-input user-data" autocomplete="nope" autocorrect="off" spellcheck="false"
										autocapitalize="none" inputmode="decimal" type="text">
									<!---->
								</div>
							</div>
						</div>
						<!---->
						<div class="y-form-field field-with-error  currency-input-group">
							<label>
								Monthly payment required by your lender
							</label>
							<input id="ember163" class="ember-text-field ember-view y-input minimum-payment-input user-data" autocomplete="nope" autocorrect="off" spellcheck="false"
								autocapitalize="none" inputmode="decimal" type="text">
							<!---->
						</div>
						<!---->
						<div class="y-form-note">
							<div class="note-container">
								<em>Enter the total amount you are required to pay your lender each month, including principal, interest, escrow, fees, etc.</em>
							</div>
						</div>
						<div class="y-form-note">
							<div class="note-container">
								<em>You can add extra payments as a target in your budget later.</em>
							</div>
						</div>
					</div>
					<!---->
				</div>
				<div class="account-widget-footer">
					<button class="ynab-button primary is-large " type="button" disabled="">Next</button>
				</div>
			</div>
			<!-- Tercera sección Account Type -->
			<div class="account-widget-step account-widget-add-unlinked-account account-widget-step-with-help-box">
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
							<button class="account-widget-list-button" data-account-type="Checking" data-category="budget" type="button">
								Checking
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
							<button class="account-widget-list-button" data-account-type="Savings" data-category="budget" type="button">
								Savings
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
							<button class="account-widget-list-button" data-account-type="Cash" data-category="budget" type="button">
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
							<button class="account-widget-list-button" data-account-type="CreditCard" data-category="budget" type="button">
								Credit Card
								<!----->
								<svg class="ynab-new-icon" width="16" height="16">
									<!---->
									<use href="#icon_sprite_check">
										<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_check" fill="none" viewBox="0 0 24 24">
											<path fill="currentColor" d="m7.4 17.6-5-5a1.4 1.4 0 0 0-2 0 1.4 1.4 0 0 0 0 2l6 6a1.4 1.4 0 0 0 2 0L23.6 5.4a1.4 1.4 0 0 0 0-2 1.4 1.4 0 0 0-2 0z"></path>
										</symbol>
									</use>
								</svg>
							</button>
							<button class="account-widget-list-button" data-account-type="LineOfCredit" data-category="budget" type="button">
								Line of Credit
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
						</div>
						<div class="account-type-select-group">
							<h3>Mortgages and Loans</h3>
							<p>Accounts that have an outstanding balance you're currently paying off, and aren't spending from.</p>
							<button class="account-widget-list-button" data-account-type="Mortgage" data-category="loan" type="button">
								Mortgage
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
							<button class="account-widget-list-button" data-account-type="AutoLoan" data-category="loan" type="button">
								Auto Loan
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
							<button class="account-widget-list-button" data-account-type="StudentLoan" data-category="loan" type="button">
								Student Loan
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
							<button class="account-widget-list-button" data-account-type="PersonalLoan" data-category="loan" type="button">
								Personal Loan
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
							<button class="account-widget-list-button" data-account-type="MedicalDebt" data-category="loan" type="button">
								Medical Debt
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
							<button class="account-widget-list-button" data-account-type="OtherDebt" data-category="loan" type="button">
								Other Debt
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
						</div>
						<div class="account-type-select-group">
							<h3>Tracking Accounts</h3>
							<p>Accounts that hold money you don't plan to spend soon, such as investments or loans.</p>
							<button class="account-widget-list-button" data-account-type="OtherAsset" data-category="budget" type="button">
								Asset (e.g. Investment)
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
							<button class="account-widget-list-button" budgetdata-account-type="OtherLiability" data-category="budget" type="button">
								Liability
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
						</div>
					</div>
				</div>
			</div>
			<!-- Cuarta seccion -->
			
			<!-- Sección Success -->
			<div class="account-widget-step account-widget-success-screen">
				<div class="account-widget-header">
					<div class="hidden-header-button"></div>
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
					<svg class="ynab-new-icon icon-checkmark-circle" width="16" height="16">
						<!---->
						<use href="#icon_sprite_check_circle_fill">
							<symbol xmlns="http://www.w3.org/2000/svg" id="icon_sprite_check_circle_fill" fill="none" viewBox="0 0 24 24">
								<path fill="currentColor"
									d="M12 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24M8.7 17.1l-4.3-4.3a1.2 1.2 0 0 1 0-1.7 1.2 1.2 0 0 1 1.7 0l3.5 3.5 8.3-8.3a1 1 0 0 1 1.6 0 1.2 1.2 0 0 1 0 1.7l-9 9.1a1.2 1.2 0 0 1-1.8 0"></path>
							</symbol>
						</use>
					</svg>
					<h3>Success!</h3>
					<p>Add transactions on the web or in our mobile apps. You can also download a transaction file from your institution and use <a
							href="#" onclick="return false;" rel="noopener noreferrer">File-Based Import</a>.</p>
				</div>
				<div class="account-widget-footer">
					<button class="ynab-button secondary is-large js-add-another-account-btn" type="button">
						Add Another
					</button>
					<button class="ynab-button primary is-large" type="button">
						Done
					</button>
				</div>
			</div>
		</div>
		<!---->
	</div>
</div>

@push('scripts')
	<script>

		// 1. Alterna entre secciones
		document.addEventListener('DOMContentLoaded', () => {
			const buttonUnlinked = document.querySelector('.select-linked-unlinked-box-unlinked');
			const buttonType = document.querySelector('.account-type-select-button');

			const sections = Array.from(document.querySelectorAll('.account-widget-step'));

			const showSection = (indexToShow) => {
				sections.forEach((section, index) => {
					section.style.display = (index === indexToShow) ? '' : 'none';
				});
			};

			// Inicializa mostrando la sección 1
			showSection(0);

			// Manejo de eventos
			buttonUnlinked.addEventListener('click', () => showSection(1));
			buttonType.addEventListener('click', () => showSection(2));
		});

		// 2. Manejo de botones "Back"
		document.addEventListener('DOMContentLoaded', () => {
			const backButtons = document.querySelectorAll('button[aria-label="Back"]');
			const modalActive = document.getElementById('ember145');
			const sectionOne = document.querySelector('.account-widget-select-linked-unlinked');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionThree = document.querySelector('.account-widget-step:nth-of-type(3)');
			const accountTypeSelectButton = document.querySelector('.account-type-select-button .button-text');
			const accountTypeButtons = document.querySelectorAll('.account-widget-list-button');
			const accountLoan = document.querySelector('.account-loan');
			const accountBudget = document.querySelector('.currency-input-group');

			const resetFields = () => {
				modalActive.querySelectorAll('input').forEach(input => input.value = '');
				accountTypeSelectButton.textContent = 'Select account type...';
				accountTypeButtons.forEach(button => button.classList.remove('selected'));
			};

			const showSection = (sectionToShow) => {
				[sectionOne, sectionTwo, sectionThree].forEach(section => {
					section.style.display = section === sectionToShow ? '' : 'none';
				});
			};

			backButtons.forEach(button => {
				button.addEventListener('click', () => {
					if (sectionThree.style.display === '' || sectionThree.style.display === 'block') {
						// De sección 3 a sección 2
						showSection(sectionTwo);
					} else if (sectionTwo.style.display === '' || sectionTwo.style.display === 'block') {
						// De sección 2 a sección 1
						showSection(sectionOne);
						accountLoan.style.display = 'none';
						accountBudget.style.display = '';
						resetFields();
					}
				});
			});
		});

		// 3. Seccion para verificar campos input y boton y activar boton Next
		document.addEventListener('DOMContentLoaded', function () {
			const accountTypeButtons = document.querySelectorAll('.account-widget-list-button');
			const accountTypeSelectButtonSpan = document.querySelector('.account-type-select-button .button-text');
			const nicknameInput = document.querySelector('.name-input');
			const balanceInput = document.querySelector('.balance-input');
			const nextButton = document.querySelector('.account-widget-footer .ynab-button');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionThree = document.querySelector('.account-widget-step:nth-of-type(3)');

			const accountLoan = document.querySelector('.account-loan');
			const accountBudget = document.querySelector('.currency-input-group');

			// Inputs adicionales para loan
			const currentAccountBalanceInput = document.querySelector('.current-account-balance-input');
			const interestRateInput = document.querySelector('.interest-rate-input');
			const minimumPaymentInput = document.querySelector('.minimum-payment-input');

			// Map de campos requeridos por categoría
			const requiredFields = {
				budget: [nicknameInput, balanceInput],
				loan: [nicknameInput, currentAccountBalanceInput, interestRateInput, minimumPaymentInput]
			};

			function updateVisibility(category) {
				if (category === 'loan') {
					accountLoan.style.display = '';
					accountBudget.style.display = 'none';
				} else {
					accountLoan.style.display = 'none';
					accountBudget.style.display = '';
				}
			}

			function updateButtonText(selectedAccountType) {
				accountTypeSelectButtonSpan.textContent = selectedAccountType;
				accountTypeSelectButtonSpan.classList.add('selected');
			}

			function checkInputs() {
				const isAccountTypeSelected = accountTypeSelectButtonSpan.classList.contains('selected');
				const fields = requiredFields[selectedCategory] || [];
				const allFieldsFilled = fields.every(field => field.value.trim() !== '');

				if (allFieldsFilled && isAccountTypeSelected) {
					nextButton.removeAttribute('disabled');
				} else {
					nextButton.setAttribute('disabled', 'true');
				}
			}

			accountTypeButtons.forEach(button => {
				button.addEventListener('click', function () {
					selectedCategory = this.getAttribute('data-category');
					const selectedAccountType = this.textContent.trim();

					updateVisibility(selectedCategory);
					updateButtonText(selectedAccountType);

					// Manejar la visibilidad de las secciones
					sectionThree.style.display = 'none';
					sectionTwo.style.display = '';

					// Verifica el estado del botón "Next"
					checkInputs();
				});
			});

			// Asegúrate de que la función checkInputs se llame cuando cambien los inputs
			[nicknameInput, balanceInput, currentAccountBalanceInput, interestRateInput, minimumPaymentInput].forEach(input => {
				input.addEventListener('input', checkInputs);
			});
		});

		// 4. Aplica indicador a botones
		document.querySelectorAll('.account-widget-list-button').forEach(button => {
			button.addEventListener('click', function () {
				// Remover la clase 'selected' de todos los botones
				document.querySelectorAll('.account-widget-list-button').forEach(btn => btn.classList.remove('selected'));

				// Agregar la clase 'selected' al botón clickeado
				this.classList.add('selected');

				// Obtener el valor de data-account-type
				const accountType = this.getAttribute('data-account-type');

			});
		});

		// 5. Activa success
		document.addEventListener('DOMContentLoaded', function () {
			const buttonNext = document.querySelector('.account-widget-footer .is-large');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionSuccess = document.querySelector('.account-widget-success-screen');

			buttonNext.addEventListener('click', () => {
				sectionTwo.style.display = "none";
				sectionSuccess.style.display = "";

			});
		});

		// 6. Cierra el modal
		document.addEventListener('DOMContentLoaded', function () {
			const closeButtons = document.querySelectorAll('button[aria-label="Close"]');
			const modalActive = document.getElementById('ember145');
			const sectionOne = document.querySelector('.account-widget-step:nth-of-type(1)');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionThree = document.querySelector('.account-widget-step:nth-of-type(3)');
			const sectionSuccess = document.querySelector('.account-widget-step:nth-of-type(4)');
			const accountLoan = document.querySelector('.account-loan');
			const accountBudget = document.querySelector('.currency-input-group');
			const accountTypeSelectButton = document.querySelector('.account-type-select-button .button-text');
			const accountTypeButtons = document.querySelectorAll('.account-widget-list-button');
			const nextButton = document.querySelector('.account-widget-footer .ynab-button');
			const doneButton = document.querySelector('.account-widget-success-screen .ynab-button.primary.is-large');

			const scrollContainer = document.querySelector('.account-widget-body .account-type-select'); // Selecciona el contenedor del modal con scroll

			const resetInputs = () => {
				modalActive.querySelectorAll('input').forEach(input => input.value = '');
			};

			const resetAccountType = () => {
				accountTypeSelectButton.textContent = 'Select account type...';
				accountTypeButtons.forEach(button => button.classList.remove('selected'));
				// Restablece el scroll a la parte superior

			};

			const disableNextButton = () => {
				if (nextButton) nextButton.setAttribute('disabled', '');
			};

			const showSection = (section) => {
				[sectionOne, sectionTwo, sectionThree, sectionSuccess].forEach(sec => sec.style.display = 'none');
				section.style.display = '';
			};

			const closeModal = () => {
				resetInputs();
				resetAccountType();
				disableNextButton();
				modalActive.classList.remove('modal-overlay', 'active');
				showSection(sectionOne);
				accountLoan.style.display = 'none';
				accountBudget.style.display = '';

			};

			closeButtons.forEach(button => button.addEventListener('click', closeModal));
			if (doneButton) doneButton.addEventListener('click', closeModal);

		});

		// 7. Regresar a "Add Account" en Success
		document.addEventListener('DOMContentLoaded', () => {
			const addAnotherButton = document.querySelector('.js-add-another-account-btn');
			const sectionOne = document.querySelector('.account-widget-step:nth-of-type(1)');
			const sectionSuccess = document.querySelector('.account-widget-step:nth-of-type(4)');
			const nicknameInput = document.querySelector('.name-input');
			const balanceInput = document.querySelector('.balance-input');
			const accountTypeSelectButton = document.querySelector('.account-type-select-button .button-text');
			const accountTypeButtons = document.querySelectorAll('.account-widget-list-button');
			const nextButton = document.querySelector('.account-widget-footer .ynab-button');

			const resetFields = () => {
				nicknameInput.value = '';
				balanceInput.value = '';
				accountTypeSelectButton.textContent = 'Select account type...';
				accountTypeButtons.forEach(button => button.classList.remove('selected')); // Elimina la clase de selección
			};

			const resetNextButton = () => {
				nextButton.setAttribute('disabled', '');
			};

			addAnotherButton.addEventListener('click', () => {
				sectionOne.style.display = "";
				sectionSuccess.style.display = "none";
				resetFields();
				resetNextButton();
			});
		});
	
	</script>

@endpush
