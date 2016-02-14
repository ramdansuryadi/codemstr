<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/result', function () {
    return view('result');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/reg-factory', function () {
    return view('regfactory');
});
Route::get('/reg-parts', function () {
    return view('regparts');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shipping', function () {
    return view('shipping');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/overview', function () {
    return view('overview');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/supplier', function () {
    return view('suplier.suplierPage');
});
Route::get('/supplier/preview', function () {
    return view('suplier.detailCatalog');
});
Route::get('/supplier/edit', function () {
    return view('suplier.editCatalog');
});

Route::get('/supplier/detail-order', function () {
    return view('suplier.detailOrder');
});

Route::get('/supplier/detail-inbox', function () {
    return view('suplier.detailInbox');
});

Route::get('/supplier/detail-review', function () {
    return view('suplier.detailReview');
});



/* laravel-localization
*/

//  Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('welcome');
//
// });


Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ],
    'middleware' => [ 'localize' ] // Route translate middleware
],
function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function(){
        return View::make('welcome');
    });

    Route::get('/search', function () {
        return View::make('search');
    });
    Route::get('/result', function () {
        return View::make('result');
    });
    Route::get('/detail', function () {
        return View::make('detail');
    });
    Route::get('/reg-factory', function () {
        return View::make('regfactory');
    });
    Route::get('/reg-parts', function () {
        return View::make('regparts');
    });
    Route::get('/cart', function () {
        return View::make('cart');
    });
    Route::get('/shipping', function () {
        return View::make('shipping');
    });
    Route::get('/payment', function () {
        return View::make('payment');
    });
    Route::get('/overview', function () {
        return View::make('overview');
    });
    Route::get('/confirmation', function () {
        return View::make('confirmation');
    });


      Route::get(LaravelLocalization::transRoute('routes.about'),function(){
          return View::make('about');
      });


});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
