<?php

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
    $gallery = [
        [
            'img' => '01.jpg',
            'title' => 'interdum ipsum sed'
        ],
        [
            'img' => '02.jpg',
            'title' => 'varius natoque penatibus'
        ],
        [
            'img' => '03.jpg',
            'title' => 'purus vitae porttitor egestas'
        ],
        [
            'img' => '04.jpg',
            'title' => 'eros mauris'
        ],
        [
            'img' => '05.jpg',
            'title' => 'habitant morbi tristique'
        ],
        [
            'img' => '06.jpg',
            'title' => ' in tristique placerat'
        ],
        [
            'img' => '07.jpg',
            'title' => 'fames ac turpi'
        ],
        [
            'img' => '08.jpg',
            'title' => 'malesuada fames ac turpis'
        ],
        [
            'img' => '09.jpg',
            'title' => 'dolor sit amet odio elementum'
        ],
    ];
    return view('index', ['gallery' => $gallery]);
});
