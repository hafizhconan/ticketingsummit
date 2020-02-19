<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return redirect()->route('admin.createdata.index');
})->name('home');

Route::resource('createdata','CreateDataController')->middleware('admin');

Route::resource('absensi','AbsenController')->middleware('admin');

Route::resource('list','ListController')->middleware('admin');

Route::get('/confirmation/{id}',[
      'as' => 'createdata.confirmation',
      'uses' => 'CreateDataController@confirmation'
  ]);
  Route::get('/getTicket/{id}',[
      'as' => 'createdata.ticket',
      'uses' => 'CreateDataController@ticket'
  ]);
  Route::get('/sendRegistration/{id}',[
      'as' => 'createdata.send',
      'uses' => 'CreateDataController@send'
  ]);
  Route::get('/AccTicket/{id}',[
      'as' => 'createdata.acc',
      'uses' => 'CreateDataController@acc'
  ]);
  Route::get('/ChangeAcc/{id}',[
      'as' => 'createdata.changeacc',
      'uses' => 'CreateDataController@changeacc'
  ]);