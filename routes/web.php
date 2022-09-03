<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', [
        'heading' => 'Latest listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque vero voluptatum asperiores. Consectetur eum nulla voluptatibus ex sapiente animi exercitationem. Adipisci animi consequuntur explicabo exercitationem at voluptatibus nulla sit dolor.',
                
                

            ],

            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque vero voluptatum asperiores. Consectetur eum nulla voluptatibus ex sapiente animi exercitationem. Adipisci animi consequuntur explicabo exercitationem at voluptatibus nulla sit dolor.',
            ]
        ]
    ]);
});


