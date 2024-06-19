<?php
	
	use App\Http\Controllers\UserController;
	use App\Http\Controllers\MainController;
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
			Route::get('/password/reset/{token}',[UserController::class,'showResetForm'])->name('reset-password');
			Route::post('/reset-password-handler', [UserController::class,'resetPasswordHandler'])->name('reset-password-handler');
				
		});
		
		Route::middleware(['auth:users','PreventBackHistory'])->group(function(){
			Route::post('/logout_handler',[UserController::class,'logoutHandler'])->name('logout_handler');
			
		});
	});
	
	// Grupo de rutas para la parte principal (main)
	Route::prefix('main')->name('main.')->group(function() {
		
		Route::middleware(['auth:users','PreventBackHistory'])->group(function(){
			Route::get('/budget',[MainController::class,'budget'])->name('budget');
			Route::get('/profile',[MainController::class,'profile'])->name('profile');
			Route::get('/new-budget',[MainController::class,'newBudget'])->name('new-budget');
			Route::get('/budget-settings',[MainController::class,'budgetSettings'])->name('budget-settings');
			// Agrega aquí más rutas según sea necesario
		});
		
		Route::middleware(['guest:users','PreventBackHistory'])->group(function(){
			Route::view('/about','frontend.pages.main.about')->name('about');
			Route::view('/contact','frontend.pages.main.contact')->name('contact');
			// Agrega aquí más rutas públicas según sea necesario
		});
		
	});
	
