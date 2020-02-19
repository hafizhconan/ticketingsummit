<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\createdata;

use Validator;

use Illuminate\Support\Facades\Input;

use App\ticket;

use App\kelas;

use DB;

use Carbon;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $createdata = DB::table('transactions')->join('tickets', 'tickets.id', '=', 'transactions.id_ticket')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->select('transactions.*','buyers.nama','tickets.Barcode')->get();
        return view('admin.absensi.index', compact('createdata'));
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
                    return redirect()->route('absensi.index')->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
            }
        $qrcode = $request->qrcode;
        $data = substr($qrcode, 8);
        $first = substr($qrcode, 0,7);
        if ($first != "TELDU18") {
            $teldu = $qrcode;
        }else{
            $teldu = $data;
        }
        $db = DB::table('tickets')->where('tickets.Barcode', '=', $teldu)->first();
        $cek_kuota = DB::table('kelas')->first();
        while ($cek_kuota->status != 'enable') {
            $id_kelas_1 = $cek_kuota->id+1;
            $cek_kuota = DB::table('kelas')->where('kelas.id', '=', $id_kelas_1)->first();
        }
        //dd($cek_kuota);
        if($cek_kuota->kuota <= 0){
            $kuota_kelas = kelas::findOrFail($cek_kuota->id);
            $kuota_kelas->status = 'disabled';
            $kuota_kelas->save();
        }
        $kelas = DB::table('kelas')->first();
        while ($kelas->status != 'enable') {
            $id_kelas = $kelas->id+1;
            $kelas = DB::table('kelas')->where('kelas.id', '=', $id_kelas)->first();
        }
        if (!is_null($db)) {
            $mytime = Carbon\Carbon::now();
            $date = $mytime->format('d-m-Y H:i:s');
            if ($date >= "13-01-2019 05:20:00" && $date <= "13-01-2019 10:00:00") {
                if ($db->Absen_1 == null) {
                    
                    $kurang_kuota = kelas::findOrFail($kelas->id);
                    $kurang_kuota->kuota = $kelas->kuota-1;
                    $kurang_kuota->save();
                    $createdatas = ticket::findOrFail($db->id);
                    $createdatas->Absen_1 = $kelas->id;
                    $createdatas->save();
                    return redirect()->route('absensi.index')->with('status', 'Selamat datang, Anda berhasil masuk!');
                } else {
                    return redirect()->route('absensi.index')->with('status', 'Anda telah hadir!');
                }
            } elseif ($date >= "13-01-2019 10:01:00" && $date <= "13-01-2019 18:30:00") {
                if ($db->Absen_2 != 1) {
                    $createdatas = ticket::findOrFail($db->id);
                    $createdatas->Absen_2 = 1;
                    $createdatas->save();
                    return redirect()->route('absensi.index')->with('status', 'Selamat datang, anda berhasil masuk!');
                } else {
                    return redirect()->route('absensi.index')->with('status', 'Anda telah hadir!');
                }
            }else {
                return redirect()->route('absensi.index')->with('status', 'QR CODE tidak bisa digunakan pada tanggal & jam ini!');
            }
            
        } else {
            return redirect()->route('absensi.index')->with('status', 'Data tidak ditemukan!');
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
