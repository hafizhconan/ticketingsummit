<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ticket;

use App\transaction;


class ListController extends Controller
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
        $hadir = $createdata = transaction::join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama as nama','buyers.from as from','buyers.no_hp as no_hp','buyers.email as email', 'users.name as name_created_by','tickets.Absen_1 as Absen_1')->where('transactions.deleted', '=', null)->where('transactions.status_pembayaran', '=', 1)->where('transactions.jenis_tiket', '=', 4)->where('Absen_1', 1)
               ->orderBy('id')
               ->get();
        $belum_hadir = $createdata = transaction::join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama as nama','buyers.from as from','buyers.no_hp as no_hp','buyers.email as email', 'users.name as name_created_by','tickets.Absen_1 as Absen_1')->where('transactions.deleted', '=', null)->where('tickets.Absen_1', NULL)->where('transactions.status_pembayaran', '=', 1)->where('transactions.jenis_tiket', '=', 4)
               ->orderBy('id')
               ->get();
        return view('admin.list.index', compact('hadir','belum_hadir'));
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
