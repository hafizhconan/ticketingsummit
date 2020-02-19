<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\ticket;

class DataHadirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $createdata = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)->get();
        $kelas1 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 1)->get();

        $kelas2 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 2)->get();

        $kelas3 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 3)->get();

        $kelas4 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 4)->get();

        $kelas5 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 5)->get();

        $kelas6 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 6)->get();

        $kelas7 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 7)->get();

        $kelas8 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 8)->get();

        $kelas9 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 9)->get();

        $kelas10 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 10)->get();

        $kelas11 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 11)->get();

        $kelas12 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 12)->get();

        $kelas13 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 13)->get();

        $kelas14 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 14)->get();

        $kelas15 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 15)->get();

        $kelas16 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 16)->get();

        $kelas17 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 17)->get();

        $kelas18 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 18)->get();

        $kelas19 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 19)->get();

        $kelas20 = DB::table('transactions')->join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by')->where('transactions.deleted', '=', null)
        ->where('tickets.Absen_1', '=', 20)->get();

        $total = ticket::where('tickets.deleted', '=', null)->where('tickets.Absen_1', '!=', null)->orWhere('tickets.Absen_2', '!=', null)->count();
        $tryout = ticket::where('tickets.deleted', '=', null)->where('tickets.Absen_1', '!=', null)->count();
        $aula = ticket::where('tickets.deleted', '=', null)->where('tickets.Absen_2', '!=', null)->count();
        return view('absensi.index2', compact('createdata','kelas1','kelas2','kelas3','kelas4','kelas5','kelas6','kelas7','kelas8','kelas9','kelas10'
            ,'kelas11','kelas12','kelas13','kelas14','kelas15','kelas16','kelas17','kelas18','kelas19','kelas20','total','tryout','aula'));

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
