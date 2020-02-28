<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\createdata;

use Validator;

use Illuminate\Support\Facades\Input;

use App\ticket;

use DB;

use Carbon;

use App\Acara;

use Illuminate\Support\Facades\Crypt;

class AbsenController extends Controller
{
    public function index(Request $request)
    {
        $acara = Acara::all();
        // $id = $request->get('acara');
        if(!$request->get('acara')){
            $id=$acara[0]->id;
        }else{
            $decrypt = Crypt::decryptString($request->get('acara'));
            $id = $decrypt;
        }
        $createdata = DB::table('transactions')
                ->join('tickets', 'tickets.id', '=', 'transactions.id_ticket')
                ->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')
                ->select('transactions.*','buyers.nama','tickets.Barcode')
                ->where('tickets.deleted', '=', null)
                ->where('transactions.status_pembayaran', '=', 1)
                ->where('transactions.jenis_tiket', '=', $id)->get();
        return view('admin.absensi.index', compact('createdata','acara','id'));
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
        $rules = array(
                'qrcode' => 'required',
            );

            $validation = Validator::make(Input::all(), $rules);
            if($validation->fails()) {
                    return redirect()->route('admin.absensi.index')->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
            }
        $qrcode = $request->qrcode;
        $data = substr($qrcode, 2);
        $first = substr($qrcode, 0,1);
        if ($first != "M") {
            $teldu = $qrcode;
        }else{
            $teldu = $data;
        }
        $db = DB::table('tickets')->where('tickets.Barcode', '=', $teldu)->first();
        // dd($teldu);
        if (!is_null($db)) {
            $acara = Acara::find($request->id);
            $mytime = Carbon\Carbon::now();
            $date = $mytime->format('Y-m-d H:i');
            if ($date >= $acara->due) {
                if ($db->Absen_1 == null) {
                    $updatedatas = ticket::findOrFail($db->id);
                    $updatedatas->Absen_1 = 1;
                    $updatedatas->save();
                    return redirect()->route('admin.absensi.index')->with('status', 'Selamat datang, Anda berhasil masuk!');
                } else {
                    return redirect()->route('admin.absensi.index')->with('status', 'Anda telah hadir!');
                }
            }else {
                return redirect()->route('admin.absensi.index')->with('status', 'QR CODE tidak bisa digunakan pada tanggal & jam ini!');
            }
            
        } else {
            return redirect()->route('admin.absensi.index')->with('status', 'Data tidak ditemukan!');
        }

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
