<?php

Route::get('api-documentation', function() {
	return view('swagger.swaggerUi');
})->name('swagger-ui');