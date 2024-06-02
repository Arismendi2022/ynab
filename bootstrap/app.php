<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
					'users.guest'=> \App\Http\Middleware\UserRedirect::class,
	        'users.auth'=> \App\Http\Middleware\UserAuthenticate::class,
					'PreventBackHistory' => \App\Http\Middleware\PreventBackHistory::class,
        ]);
				
				$middleware->redirectTo(
					guests: '/users/sign_in' ,
					users: '/users/budget'
					
				);
	    
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
