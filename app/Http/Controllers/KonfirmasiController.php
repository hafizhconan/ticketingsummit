<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Validator;

use App\transaction;

use App\buyer;

use App\User;

use App\ticket;

use App\bukti;

use App\Acara;

use DB;

class KonfirmasiController extends Controller
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acara = acara::all();
        $createdata = transaction::findOrFail($id);
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdata->created_at)->format('Y-m-d');
        $buyer = buyer::find($createdata->id_buyer);
        $user = user::find($createdata->id_user);
        $ticket = ticket::find($createdata->id_ticket);
        return view('user.bukti', compact('createdata','date','buyer','user','ticket','acara'));
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
        $rules = array(
                    'nama_pengirim' => 'required',
                    'Gambar' => 'required','mimes:jpg,jpeg,JPEG,png,gif,bmp,JPG|max:8096',
                    'bank_pengirim' => 'required',
                );
                $validation = Validator::make(Input::all(), $rules);
                if($validation->fails()) {
                        return redirect()->route('user.confirmation.edit', $id)->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
                }
        if ( !empty ( $request->file('Gambar') ) ){
                $photo = $request->file('Gambar')->getClientOriginalName();
                $date = date('YmdHis');
                $picture_name = $date.$photo;
                $request->file('Gambar')->move(public_path() . '/uploads/', $picture_name);
            } else {
                $picture_name = "";
            }
        $user = auth()->user();
        $bukti = new bukti();
        $bukti->id_transaction = $id;
        $bukti->nama_pengirim = $request->nama_pengirim;
        $bukti->bank_pengirim = $request->bank_pengirim;
        $bukti->bukti = $picture_name;
        $bukti->save();

        $update = transaction::findOrFail($id);
        $update->status_pembayaran = 2;
        $update->save();

        return redirect()->route('user.purchased.index')->with('status', 'Bukti Pembayaran Berhasil dikirim!');
                
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
