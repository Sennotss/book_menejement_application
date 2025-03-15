<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StokInController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;

Route::get('/login', [
    LoginController::class, 'showLogin'
]);

Route::POST('/actionLogin', [
    LoginController::class, 'actionLogin'
]);

Route::get('/logout', [
    LoginController::class, 'actionLogout'
]);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [
        DashboardController::class, 'index'
    ]);
    
    Route::middleware(['checklevel:Admin'])->group(function(){
        // User Routes
        Route::get('/user', [UserController::class, 'index']);
        Route::get('/user/create', [UserController::class, 'create']);
        Route::POST('/user/store', [UserController::class, 'store']);
        Route::get('/user/edit/{id}', [UserController::class, 'edit']);
        Route::POST('/user/update/{id}', [UserController::class, 'update']);
        Route::get('/user/delete/{id}', [UserController::class, 'destroy']);

        // BOOK ROUTE
       
        Route::get('/book/create', [BookController::class, 'create']);
        Route::POST('/book/store', [BookController::class, 'store']);
        Route::get('/book/edit/{id}', [BookController::class, 'edit']);
        Route::POST('/book/update/{id}', [BookController::class, 'update']);
        Route::get('/book/delete/{id}', [BookController::class, 'destroy']);
        Route::get('/book/detail/{id}', [BookController::class, 'detail']);

        // CATEGORY ROUTE
        Route::get('/category', [CategoryController::class, 'index']);
        Route::get('/category/create', [CategoryController::class, 'create']);
        Route::POST('/category/store', [CategoryController::class, 'store']);
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
        Route::POST('/category/update/{id}', [CategoryController::class, 'update']);
        
        // GENRE ROUTE
        Route::get('/genre', [GenreController::class, 'index']);
        Route::get('/genre/create', [GenreController::class, 'create']);
        Route::POST('/genre/store', [GenreController::class, 'store']);
        Route::get('/genre/edit/{id}', [GenreController::class, 'edit']);
        Route::POST('/genre/update/{id}', [GenreController::class, 'update']);
        
        // PAYMENT ROUTE
        Route::get('/payment', [PaymentController::class, 'index']);
        Route::get('/payment/create', [PaymentController::class, 'create']);
        Route::POST('/payment/store', [PaymentController::class, 'store']);
        Route::get('/payment/edit/{id}', [PaymentController::class, 'edit']);
        Route::POST('/payment/update/{id}', [PaymentController::class, 'update']);
        
        // SUPPLIER ROUTE
        Route::get('/supplier', [SupplierController::class, 'index']);
        Route::get('/supplier/create', [SupplierController::class, 'create']);
        Route::POST('/supplier/store', [SupplierController::class, 'store']);
        Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit']);
        Route::POST('/supplier/update/{id}', [SupplierController::class, 'update']);
        Route::get('/supplier/delete/{id}', [SupplierController::class, 'destroy']);
        
        // PUBLISHER ROUTE
        Route::get('/publisher', [PublisherController::class, 'index']);
        Route::get('/publisher/create', [PublisherController::class, 'create']);
        Route::POST('/publisher/store', [PublisherController::class, 'store']);
        Route::get('/publisher/edit/{id}', [PublisherController::class, 'edit']);
        Route::POST('/publisher/update/{id}', [PublisherController::class, 'update']);
        Route::get('/publisher/delete/{id}', [PublisherController::class, 'destroy']);
        
        // STOK IN ROUTE
        Route::get('/stokIn', [StokInController::class, 'index']);
        Route::get('/stokIn/create', [StokInController::class, 'create']);
        Route::POST('/stokIn/store', [StokInController::class, 'store']);
        Route::get('/stokIn/edit/{id}', [StokInController::class, 'edit']);
        Route::POST('/stokIn/update/{id}', [StokInController::class, 'update']);
        Route::get('/stokIn/print', [StokInController::class, 'print']);
    });
    
    Route::middleware(['checklevel:Cashier'])->group(function(){
        Route::get('/transaction', [TransactionController::class, 'index']);
        Route::get('/transaction/create', [TransactionController::class, 'create']);
        Route::POST('/transaction/store', [TransactionController::class, 'store']);
        Route::get('/transaction/delete/{id}', [TransactionController::class, 'destroy']);
        Route::get('/transaction/detail/{id}', [DetailController::class, 'index']);
        Route::POST('/transaction/detail/scan/{id}', [DetailController::class, 'store']);
        Route::POST('/transaction/detail/update/{id}', [TransactionController::class, 'update']);
        Route::get('/transaction/detail/delete/{id}', [DetailController::class, 'destroy']);
        Route::get('/transaction/struk/{id}', [TransactionController::class, 'struk']);
        Route::get('/transaction/laporan', [TransactionController::class, 'laporan']);
    });
    Route::get('/book', [BookController::class, 'index']);

});

