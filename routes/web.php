<?php
	
	use App\Http\Controllers\UserController;
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\AdminController;
	
	Route::get('/',function(){
		return view('welcome');
		//return view('backend.pages.admin.auth.sign_in');
		
	});
	
	Route::prefix('users')->name('users.')->group(function(){
		
		Route::middleware(['guest:users'])->group(function(){
			Route::view('/sign_in','backend.pages.admin.auth.sign_in')->name('sign_in');
			Route::view('/sign_up','backend.pages.admin.auth.sign_up')->name('sign_up');
			//Route::post('/create', 'createUser')->name('create');
			Route::post('/create',[UserController::class,'createUser'])->name('create');
		});
		
		Route::middleware(['auth:users'])->group(function(){
			Route::view('/home','backend.pages.admin.home')->name('home');
		});
	});
