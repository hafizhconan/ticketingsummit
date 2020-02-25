<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\transaction;

use App\buyer;

use App\User;

use App\ticket;

use App\Acara;

use Crypt;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($encrypted)
    {
        $id = Crypt::decryptString($encrypted);
        $createdata = transaction::find($id);
        $acara = acara::find($createdata->jenis_tiket);
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdata->created_at)->format('Y-m-d');
        $buyer = buyer::find($createdata->id_buyer);
        $user = user::find($createdata->id_user);
        $ticket = ticket::find($createdata->id_ticket);
        return view('user.detail', compact('createdata','date','buyer','user','ticket','acara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
