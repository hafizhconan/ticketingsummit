<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use Illuminate\Support\Facades\Input;

use App\backup;

use Carbon\Carbon;

use QrCode;

use Mail;

use App\buyer;

use App\User;

use App\ticket;

use App\transaction;

use App\bukti;

use Auth;

use DB;

use Kyslik\ColumnSortable\Sortable;

use App\Acara;

use Request as RequestFacade;
use File;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acara = Acara::all();
        
        return view('admin/Event/index', compact('acara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/Event/create');
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
            'nama' => 'required|max:255',
            'pemateri' => 'required',
            'tgl' => 'required',
            'time' => 'required',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'keterangan' => 'required',
            'logo' => 'required',
            'header' => 'required',
            'nama_singkat' => 'required',

        );

        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
                return redirect()->route('admin.Event.create')->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
        }

        //Tanggal
        $tgl = $request->tgl;
        $bulan = date("F", strtotime($tgl)); //Month
        $tanggal = date("d", strtotime($tgl)); //Date
        $year = date("Y", strtotime($tgl)); //Year
        $kata = $bulan." ".$tanggal.", ".$year." Pukul ".$request->time." - Selesai";
        
        //Logo
        $file = RequestFacade::file('logo');
        $filename = $file->getClientOriginalName();
        $path = public_path().'/images';
        $file->move($path, $filename);

        $data = new Acara;
        $data->nama = $request->nama;
        $data->logo = "images/".$filename;
        $data->tgl = $kata;
        $data->lokasi = $request->lokasi;
        $data->pemateri = $request->pemateri;
        $data->due = $tgl." ". $request->time;
        $data->keterangan = $request->keterangan;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;
        $data->header = $request->header;
        $data->nama_singkat = $request->nama_singkat;
        $data->save();

        return redirect()->route('admin.Event.index')->with('status', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acara = Acara::find($id);
        return view('admin/Event/rinci', compact('acara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acara = Acara::find($id);
        return view('admin/Event/edit', compact('acara'));
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
            'nama' => 'required|max:255',
            'pemateri' => 'required',
            'tgl' => 'required',
            'time' => 'required',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'keterangan' => 'required',
            'header' => 'required',
            'nama_singkat' => 'required',
            // 'logo' => 'required',

        );

        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
                return redirect()->route('admin.Event.edit',$id)->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
        }

        //Tanggal
        $tgl = $request->tgl;
        $bulan = date("F", strtotime($tgl)); //Month
        $tanggal = date("d", strtotime($tgl)); //Date
        $year = date("Y", strtotime($tgl)); //Year
        $kata = $bulan." ".$tanggal.", ".$year." Pukul ".$request->time." - Selesai";
        $data = Acara::findOrFail($id);
        //Logo
        if($request->logo){
            $file = RequestFacade::file('logo');
            $filename = "images/".$file->getClientOriginalName();
            $path = public_path().'/images';
            $file->move($path, $filename);
        }else{
            $filename = $data->logo;
        }
        

        $data->nama = $request->nama;
        $data->logo = $filename;
        $data->tgl = $kata;
        $data->lokasi = $request->lokasi;
        $data->pemateri = $request->pemateri;
        $data->due = $tgl." ". $request->time;
        $data->keterangan = $request->keterangan;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;
        $data->header = $request->header;
        $data->nama_singkat = $request->nama_singkat;
        $data->save();

        return redirect()->route('admin.Event.index')->with('status', 'Data berhasil dibuat!');
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

    public function changeStatus($id){
        $data = Acara::find($id);
        if ($data->status == "enable"){
            $data->status = "disable";
        }else{
            $data->status = "enable";
        }
        $data->save();

        return redirect()->route('admin.Event.index')->with('status', 'Data berhasil diubah!');
    }
}
