{{-- modal add account --}}
<div id="ember145" class="ynab-u modal-generic self-centered account-widget-modal ">
	<div class="modal" role="dialog" aria-modal="true">
		<div class="account-widget" tabindex="0">
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
		</div>
		<!---->
	</div>
</div>

@push('scripts')
	<script>
		//Cierra el modal
		document.addEventListener('DOMContentLoaded', function () {
			const closeButton = document.querySelector('button[aria-label="Close"]');
			
			closeButton.addEventListener('click', function () {
				const modalActive = document.getElementById('ember145');
				modalActive.classList.remove('modal-overlay', 'active');
			});
		});
	</script>

@endpush
