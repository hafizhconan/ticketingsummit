<?php

Route::resource('home','HomeController')->middleware('user');
Route::resource('purchased','PurchasedController')->middleware('user');
Route::resource('buy','BuyController')->middleware('user');
Route::resource('bayar','BayarController')->middleware('user');
Route::resource('detail','DetailController')->middleware('user');
Route::resource('confirmation','KonfirmasiController')->except('show')->middleware('user');

// Route::get('/buy', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('user')->user();

//     //dd($users);

//     return view('user.buy');
// })->name('buy');

Route::get('/confirmation/{id}',[
      'as' => 'buy.confirmation',
      'uses' => 'BuyController@confirmation'
  ]);
  Route::get('/getTicket/{id}',[
      'as' => 'buy.ticket',
      'uses' => 'BuyController@ticket'
  ]);
  Route::get('/sendRegistration/{id}',[
      'as' => 'buy.send',
      'uses' => 'BuyController@send'
  ]);

// Route::get('/bayar', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('user')->user();

//     //dd($users);

//     return view('user.bayar');
// })->name('bayar');

// Route::get('/bukti', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('user')->user();

//     //dd($users);

//     return view('user.bukti');
// })->name('bukti');

// Route::get('/detail', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('user')->user();

//     //dd($users);

//     return view('user.detail');
// })->name('detail');