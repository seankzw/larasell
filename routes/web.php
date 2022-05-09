<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------------eEE----------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get("/listing/create", [ListingController::class, 'create']);

//store listing data
Route::post("/listings", [ListingController::class, 'store']);

//single listing
Route::get("/listings/{listing}", [ListingController::class, 'show']);