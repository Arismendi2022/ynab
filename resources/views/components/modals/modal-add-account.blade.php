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
			<!-- Cuarta seccion cc-step -->
			<div class="account-widget-step account-widget-budget-balance account-widget-cc-step">
				<div class="account-widget-header">
					<button aria-label="Back" title="Back" type="button">
						<svg class="ynab-new-icon icon-back" width="16" height="16">
							<!---->
							<use href="#icon_sprite_chevron_left"></use>
						</svg>
					</button>
					<div class="account-widget-header-title">
						<h1>Add Unlinked Account</h1>
						<!---->
					</div>
					<button aria-label="Close" title="Close" type="button">
						<svg class="ynab-new-icon icon-close" width="16" height="16">
							<!---->
							<use href="#icon_sprite_close"></use>
						</svg>
					</button>
				</div>
				<div class="account-widget-body">
					<h3>Your credit card has an existing balance:</h3>
					<button class="account-widget-account-list-item account-widget-account-card" disabled="" type="button">
						<div class="account-widget-account-list-item-name-and-amount">
							<div class="account-widget-account-list-item-name">MasterCard</div>
							<div class="account-widget-account-list-item-amount account-widget-negative">−
								<bdi>$</bdi>
								1,400,000.00
							</div>
						</div>
						<div class="account-widget-account-list-item-type-and-mask">
							<div class="account-widget-account-list-item-type">
								<svg class="ynab-new-icon y-icon-account-type" width="16" height="16">
									<!---->
									<use href="#icon_sprite_credit_card"></use>
								</svg>
								Credit Card
							</div>
							<div class="account-widget-account-list-item-mask">
							
							</div>
						</div>
					</button>
					<h3>How do you plan to pay off this balance?</h3>
					<div class="account-widget-radio-button-list">
						<label class="radio">
							<input name="howToBudget" type="radio" value="overTime">
							<span>Pay it off over time</span>
						</label>
						<label class="radio">
							<input name="howToBudget" type="radio" value="entireBalance">
							<span>Pay it all at once</span>
						</label>
					</div>
					<p><em>Just like you set aside money for groceries, you need to set aside money for your credit card bill.</em></p>
					<p><em>We'll use your answer to help you figure out exactly how much you need. Don't worry—you can easily change it later!</em></p>
				</div>
				<div class="account-widget-footer">
					<button class="ynab-button primary is-large" type="button">
						Next
					</button>
				</div>
			</div>
			<!-- Quinta seccion cc-goal -->
			<div class="account-widget-step account-widget-set-cc-goal account-widget-cc-step">
				<div class="account-widget-header">
					<button aria-label="Back" title="Back" type="button">
						<svg class="ynab-new-icon icon-back" width="16" height="16">
							<!---->
							<use href="#icon_sprite_chevron_left"></use>
						</svg>
					</button>
					<div class="account-widget-header-title">
						<h1>Add Unlinked Account</h1>
						<!---->
					</div>
					<button aria-label="Close" title="Close" type="button">
						<svg class="ynab-new-icon icon-close" width="16" height="16">
							<!---->
							<use href="#icon_sprite_close"></use>
						</svg>
					</button>
				</div>
				<div class="account-widget-body">
					<h3>Paying off the balance over time:</h3>
					<button class="account-widget-account-list-item account-widget-account-card" disabled="" type="button">
						<div class="account-widget-account-list-item-name-and-amount">
							<div class="account-widget-account-list-item-name">MasterCard</div>
							<div class="account-widget-account-list-item-amount account-widget-negative">−
								<bdi>$</bdi>
								1,400,000.00
							</div>
						</div>
						<div class="account-widget-account-list-item-type-and-mask">
							<div class="account-widget-account-list-item-type">
								
								<svg class="ynab-new-icon y-icon-account-type" width="16" height="16">
									<!---->
									<use href="#icon_sprite_credit_card"></use>
								</svg>
								Credit Card
							</div>
							<div class="account-widget-account-list-item-mask"></div>
						</div>
					</button>
					<h3>
						How would you like to pay this off over time?
					</h3>
					<div class="account-widget-radio-button-list">
						<label class="radio">
							<input name="howToBudget" type="radio" value="byDate" checked>
							<span>Pay off your balance by a specific date.</span>
						</label>
						<label class="radio">
							<input name="howToBudget" type="radio" value="byAmount">
							<span>Pay a specific amount every month until your balance is paid off.</span>
						</label>
					</div>
					<hr>
					 <h3>When do you want it paid off by?</h3>
					<div class="account-widget-goal-target-month">
						<label>Month</label>
						<div class="x-select-container  ">
							<select class="js-x-select">
								<option value="" disabled="" selected="">Select Month</option>
								<option value="0">
									January
								</option>
								<option value="1">
									February
								</option>
								<option value="2">
									March
								</option>
								<option value="3">
									April
								</option>
								<option value="4">
									May
								</option>
								<option value="5">
									June
								</option>
								<option value="6">
									July
								</option>
								<option value="7">
									August
								</option>
								<option value="8">
									September
								</option>
								<option value="9">
									October
								</option>
								<option value="10">
									November
								</option>
								<option value="11">
									December
								</option>
							</select>
						</div>
					</div>
					<div class="account-widget-goal-target-year">
						<label>Year</label>
						<div class="x-select-container  ">
							<select class="js-x-select">
								<option value="" disabled="" selected="">Select Year</option>
								<option value="2024">
									2024
								</option>
								<option value="2025">
									2025
								</option>
								<option value="2026">
									2026
								</option>
								<option value="2027">
									2027
								</option>
								<option value="2028">
									2028
								</option>
								<option value="2029">
									2029
								</option>
								<option value="2030">
									2030
								</option>
								<option value="2031">
									2031
								</option>
								<option value="2032">
									2032
								</option>
								<option value="2033">
									2033
								</option>
								<option value="2034">
									2034
								</option>
								<option value="2035">
									2035
								</option>
								<option value="2036">
									2036
								</option>
								<option value="2037">
									2037
								</option>
								<option value="2038">
									2038
								</option>
								<option value="2039">
									2039
								</option>
								<option value="2040">
									2040
								</option>
								<option value="2041">
									2041
								</option>
								<option value="2042">
									2042
								</option>
								<option value="2043">
									2043
								</option>
								<option value="2044">
									2044
								</option>
								<option value="2045">
									2045
								</option>
								<option value="2046">
									2046
								</option>
								<option value="2047">
									2047
								</option>
								<option value="2048">
									2048
								</option>
								<option value="2049">
									2049
								</option>
								<option value="2050">
									2050
								</option>
								<option value="2051">
									2051
								</option>
								<option value="2052">
									2052
								</option>
								<option value="2053">
									2053
								</option>
								<option value="2054">
									2054
								</option>
								<option value="2055">
									2055
								</option>
								<option value="2056">
									2056
								</option>
								<option value="2057">
									2057
								</option>
								<option value="2058">
									2058
								</option>
								<option value="2059">
									2059
								</option>
								<option value="2060">
									2060
								</option>
								<option value="2061">
									2061
								</option>
								<option value="2062">
									2062
								</option>
								<option value="2063">
									2063
								</option>
								<option value="2064">
									2064
								</option>
								<option value="2065">
									2065
								</option>
								<option value="2066">
									2066
								</option>
								<option value="2067">
									2067
								</option>
								<option value="2068">
									2068
								</option>
								<option value="2069">
									2069
								</option>
								<option value="2070">
									2070
								</option>
								<option value="2071">
									2071
								</option>
								<option value="2072">
									2072
								</option>
								<option value="2073">
									2073
								</option>
							</select>
						</div>
					</div>
					<p><em>
							You'll need to set aside<bdi>$</bdi>175,000.00 a month to reach this target.
					</em></p>
					<!---->
					{{-- <h3>How much do you want to pay each month?</h3>
					<div class="y-form-field field-with-error  currency-input-group">
						<input id="ember199" class="ember-text-field ember-view y-input balance-input user-data" autocomplete="nope" autocorrect="off" spellcheck="false" autocapitalize="none"
							inputmode="decimal" type="text">
					</div>
					<p><em>
							With monthly payments of <bdi>$</bdi>30,000,000.00, it will take 1 months to pay off your balance.
					</em></p> --}}
					<!---->
				</div>
				
				<div class="account-widget-footer">
					<button disabled="" class="ynab-button primary is-large " type="button">
						Next
					</button>
				</div>
			</div>
			<!-- sexta seccion cc-save -->
			<div class="account-widget-step account-widget-save-cc account-widget-cc-step">
				<div class="account-widget-header">
					<button aria-label="Back" title="Back" type="button">
						<svg class="ynab-new-icon icon-back" width="16" height="16">
							<!---->
							<use href="#icon_sprite_chevron_left"></use>
						</svg>
					</button>
					<div class="account-widget-header-title">
						<h1>Add Unlinked Account</h1>
						<!---->
					</div>
					<button aria-label="Close" title="Close" type="button">
						<svg class="ynab-new-icon icon-close" width="16" height="16">
							<!---->
							<use href="#icon_sprite_close"></use>
						</svg>
					</button>
				</div>
				<div class="account-widget-body">
					<h3>
						A category for your credit card payment will be created in your budget.
					</h3>
					<h3>It will look like this:</h3>
					<div class="ynab-table">
						<div class="ynab-table-head account-widget-cc-header cc-payment user-data">
							<div class="ynab-table-col">CREDIT CARD PAYMENTS</div>
							<div class="ynab-table-col"></div>
						</div>
						<div class="ynab-table-body">
							<div class="ynab-table-row user-data">
								<div class="ynab-table-col cc-payment-name">Master</div>
								<div class="ynab-table-col">
									<span class="cc-payment-amount"><bdi>$</bdi>0.00</span>
								</div>
							</div>
						</div>
					</div>
					<br>
					<p>
						Once you have set aside
						<bdi>$</bdi>
						200,000.00 it will turn green to let you know that you're on track to pay off your existing balance! Great work!
					</p>
				</div>
				<div class="account-widget-footer">
					<button class="ynab-button primary is-large " type="button">
						Next
					</button>
				</div>
			</div>
			<!-- Septima seccion loan-category -->
			<div class="account-widget-step account-widget-loan-category">
				<div class="account-widget-header">
					<button aria-label="Back" title="Back" type="button">
						<svg class="ynab-new-icon icon-back" width="16" height="16">
							<!---->
							<use href="#icon_sprite_chevron_left"></use>
						</svg>
					</button>
					<div class="account-widget-header-title">
						<h1>Optional: Pair a Category</h1>
						<!---->
					</div>
					<button aria-label="Close" title="Close" type="button">
						<svg class="ynab-new-icon icon-close" width="16" height="16">
							<!---->
							<use href="#icon_sprite_close"></use>
						</svg>
					</button>
				</div>
				
				<div class="account-widget-body">
					<label>Pair your loan with a budget category</label>
					<p class="pairing-your-account-paragraph">Pairing with a budget category helps better show how your payments will affect your debt. Pairing works best when there is a
						one-to-one relationship between your loan account and a budget category.</p>
					<label>Which category do you want to pair your loan with?</label>
					<div class="account-widget-radio-button-list">
						<label class="radio">
							<input name="categoryToPair" aria-label="Select an existing category" type="radio" value="existing">
							<span>
								<div class="account-widget-loan-category-radio-description">
									<div class="account-widget-loan-category-radio-description-title">Select an existing category</div>
									<div class="account-widget-loan-category-radio-description-subtitle">Pair with a category already in your budget</div>
								</div>
      				</span>
						</label>
						<label class="radio">
							<input name="categoryToPair" aria-label="Create a new category" type="radio" value="new">
							<span>
								<div class="account-widget-loan-category-radio-description">
									<div class="account-widget-loan-category-radio-description-title">Create a new category</div>
									<div class="account-widget-loan-category-radio-description-subtitle">Pair with a brand new category</div>
								</div>
      				</span>
						</label>
					</div>
					
					<div class="y-form-field field-with-error ">
						<label>Select a category</label>
						<div class="category-select">
							<div class="x-select-container  ">
								<select class="js-x-select type-input account-widget-loan-category-existing-subcategory">
									<!----><!---->
									<option value=""></option>
									<!---->
									<optgroup label="Bills">
										<option value="c8b1c0dc-6e44-4ff3-b330-a0e2ce91d498" disabled="">Ipad</option>
										<option value="b8ec1e41-1ef9-4b2b-a132-e615daf31fa1">🍳️ Gas/Heating</option>
										<option value="618fbc20-fd9d-4991-8933-2e1af8204b90">⚡️ Electricity</option>
										<option value="61d334bd-e95b-4658-9ba3-35bc9457f5fa">🗑️ Garbage</option>
										<option value="8b5e96ae-0e23-4057-ac94-3359a17ad2d9">💧 Water</option>
										<option value="b9593ebd-df1b-4b9e-8b85-6e4b6f01b5cf">📱 Phone</option>
										<option value="dbd5d942-f4f7-494a-b5a8-ac4fbef580c8">💻 Internet</option>
										<option value="5b6f6cf5-f2a3-4da5-9813-b615e5a04217">📺 TV streaming</option>
									</optgroup>
									<optgroup label="Needs">
										<option value="9d23d567-48b3-4372-acc5-5ee829b2013a">🛒 Groceries</option>
										<option value="2d6b1de9-52bb-4fd9-9284-104faf64359e">🚈 Train/Bus fare</option>
										<option value="4298fbee-7a13-4627-b153-ff288de63449">👖 Clothing</option>
										<option value="53f2ba3b-1ebc-427b-bb23-7be54a45b24f">💆 Personal Care</option>
										<option value="f1999a65-9aad-41ef-b472-8a5e18fa27b2">🛠️ Home maintenance</option>
										<option value="59fc4083-5b2d-43cc-b8e1-bc1c6e905171">😌 Emergency fund</option>
										<option value="84ada95f-40fa-4825-93ca-74ca79008a54">💰 Retirement</option>
										<option value="2ef63ce0-2cfc-4820-a5ac-8985dd285dcf">📈 Investments</option>
									</optgroup>
									<optgroup label="Wants">
										<option value="24c64b87-02b8-4b76-a9fa-10461a359383">🍽️ Dining out</option>
										<option value="83fbede7-f1c6-4e2f-a8ba-1b6074073fa2">🍿 Entertainment</option>
										<option value="665cb729-1e61-438c-82e6-9030ca0b9a52">🏝️ Vacation</option>
										<option value="a7c8d974-ff61-452f-bd83-51ea24208710">🪴 Hobbies</option>
										<option value="cbd57fb0-14ba-4c40-85eb-9d0ea3392959">🎁 Gifts</option>
									</optgroup>
								
								</select>
							</div>
						</div>
						<!---->
					</div>
					<!---->
				</div>
				<div class="account-widget-footer">
					<button class="ynab-button secondary is-large  skip-pairing" type="button">
						Skip
					</button>
					<button disabled="" class="ynab-button primary is-large " type="button">
						Next
					</button>
				</div>
			</div>
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
			const sectionFour = document.querySelector('.account-widget-step:nth-of-type(4)');
			const sectionFive = document.querySelector('.account-widget-step:nth-of-type(5)');
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
					} else if (sectionFour.style.display === '' || sectionFour.style.display === 'block') {
						// CreditCar a accountBudget
						showSection(sectionTwo);
						accountBudget.style.display = '';
					} else if (sectionFive.style.display === '' || sectionFive.style.display === 'block') {
						// set-cc-goal a Cbudget-balance
						sectionFour.style.display = '';
						selectFirstRadioButton(sectionFour);
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

		// 5. Manejo botno Next opciones varias (Activa success
		document.addEventListener('DOMContentLoaded', function () {
			const buttonNext = document.querySelector('.account-widget-footer .is-large');
			const sectionTwo = document.querySelector('.account-widget-step:nth-of-type(2)');
			const sectionSuccess = document.querySelector('.account-widget-success-screen');
			const sectionCreditCard = document.querySelector('.account-widget-budget-balance');
			const accountTypeButtons = document.querySelectorAll('.account-widget-list-button');
			const sectionLoanCategory = document.querySelector('.account-widget-loan-category');

			// Variable para almacenar el tipo de cuenta seleccionado
			let selectedAccountType = '';
			let selectedCategory = '';

			// Establece el tipo de cuenta seleccionado cuando se hace clic en un botón de tipo de cuenta
			accountTypeButtons.forEach(button => {
				button.addEventListener('click', function () {
					selectedAccountType = this.getAttribute('data-account-type');
					selectedCategory = this.getAttribute('data-category');
				});
			});

			buttonNext.addEventListener('click', () => {
				// Controla la visibilidad de las secciones basado en el tipo de cuenta
				if (selectedCategory === "loan") {
					sectionTwo.style.display = 'none';
					sectionLoanCategory.style.display = "";
					selectFirstRadioButton(sectionLoanCategory);
				} else if (selectedAccountType === "CreditCard") {
					sectionTwo.style.display = "none";
					sectionCreditCard.style.display = "";
					selectFirstRadioButton(sectionCreditCard);
				} else {
					sectionTwo.style.display = "none";
					sectionSuccess.style.display = ""; // Muestra la sección de éxito
				}
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

		// Credit Card Bonto Next
		document.addEventListener('DOMContentLoaded', () => {
			const buttonNext = document.querySelector('.account-widget-cc-step .account-widget-footer');
			const sectionFour = document.querySelector('.account-widget-budget-balance');
			const sectionFive = document.querySelector('.account-widget-set-cc-goal');

			buttonNext.addEventListener('click', () => {
				sectionFour.style.display = "none";
				sectionFive.style.display = "";
				selectFirstRadioButton(sectionFive);
			});
			
		});

		function selectFirstRadioButton(section) {
			const firstRadioButton = section.querySelector('.account-widget-radio-button-list input[type="radio"]');
			if (firstRadioButton) {
				firstRadioButton.checked = true;
				// Dispara un evento change para asegurar que cualquier cambio relacionado se actualice
				firstRadioButton.dispatchEvent(new Event('change'));
			}
		}
	
	</script>

@endpush
