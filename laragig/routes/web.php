<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// the veiws with the arrrays of latest listings parsed


// All listings
Route::get('/', function () {
    return view('listings',[

        'headings'=> 'Latest listings',
        'listings'=> listing::all()
    ]);
});


// Single Listings

Route::get('\listings\{$id}' , function($id){

    return view('listings', [
        'listings' => listings::find($id)
    ]);
});

// Route::get('/search',function( Request $request){
// return($request)->name. ''. $request->city;

// });
