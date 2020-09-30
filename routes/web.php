<?php

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

Route::get('/', function ()
{
    return '<a href="/create_invoice">create new invoices for customer 2 and financal year 2 </a><br><a href="/showListAllInvoices">show list invoices for customer 2 and financal year 2 </a><br>';
});

Route::get('/create_invoice', 'ApiController@create_invoice');
Route::get('/showListAllInvoices', 'ApiController@showListAllInvoices');
