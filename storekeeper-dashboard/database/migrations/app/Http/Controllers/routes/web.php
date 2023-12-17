// routes/web.php

use App\Http\Controllers\ProductController;

Route::get('/products/form', [ProductController::class, 'showForm'])->name('products.form');
Route::post('/products/submit', [ProductController::class, 'submitForm'])->name('products.submit');
Route::get('/products/sell/{id}', [ProductController::class, 'sellProduct'])->name('products.sell');
