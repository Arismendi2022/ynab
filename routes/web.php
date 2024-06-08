<?php
	
	use App\Http\Controllers\UserController;
	use Illuminate\Support\Facades\Route;
	
	Route::get('/', function () {
		return redirect()->route('users.sign_in');
	});
	
	Route::prefix('users')->name('users.')->group(function(){
		
		Route::middleware(['guest:users','PreventBackHistory'])->group(function(){
			Route::view('/sign_in','backend.pages.admin.auth.sign_in')->name('sign_in');
			Route::post('/login_handler',[UserController::class,'loginHandler'])->name('login_handler');
			Route::view('/sign_up','backend.pages.admin.auth.sign_up')->name('sign_up');
			Route::post('/create',[UserController::class,'createUser'])->name('create');
			Route::get('/account/verify/{token}',[UserController::class,'verifyAccount'])->name('verify');
			Route::get('/forgot-password',[UserController::class,'forgotPassword'])->name('forgot-password');
			Route::post('/send-password-reset-link',[UserController::class,'sendPasswordResetLink'])->name('send-password-reset-link');
			//Route::get('/password/reset/{token}','showResetForm')->name('reset_password');
			Route::get('/reset-password',[UserController::class,'showResetForm'])->name('reset-password');
			
			
		});
		
		Route::middleware(['auth:users','PreventBackHistory'])->group(function(){
			Route::view('/budget','frontend.pages.admin.budget')->name('budget');
			Route::post('/logout_handler',[UserController::class,'logoutHandler'])->name('logout_handler');
			
		});
	});
	
