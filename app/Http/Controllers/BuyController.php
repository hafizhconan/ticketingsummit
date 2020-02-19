<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Validator;

use App\ticket;

use App\transaction;

use App\backup;

use Carbon\Carbon;

use App\buyer;

use App\user;

use Auth;

use DB;

use QrCode;

use Mail;

use App\Acara;

use Kyslik\ColumnSortable\Sortable;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $acara = acara::all();
        // return view('user.buy', compact('acara'));
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
        // $rules = array(
        //         'nama' => 'required|max:255',
        //         'no_hp' => 'required|numeric',
        //         'from' => 'required|max:255',
        //         'email' => 'required|email',
        //     );

        //     $validation = Validator::make(Input::all(), $rules);
        //     if($validation->fails()) {
        //             return redirect()->route('user.buy.index')->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
        //     }
        // $user = auth()->user();
        // $buyer = new buyer();
        // $buyer->nama = $request->nama;
        // $buyer->no_hp = $request->no_hp;
        // $buyer->from = $request->from;
        // $buyer->email = $request->email;
        // $buyer->username = "U".$user->id;
        // $buyer->save();

        // $lastInsertedId = $buyer->id;
        // return redirect()->route('user.buy.confirmation', $lastInsertedId)->with('status', 'Data berhasil dibuat!');
    }

    public function confirmation($id)
    {
        $acara = acara::all();
        $createdata = buyer::findOrFail($id);
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdata->created_at)->format('Y-m-d');
        $name = user::find($createdata->username);
        return view('user.confirmation', compact('createdata','date','name','acara'));
    }

    public function ticket($id)
    {
        $info = buyer::findOrFail($id);
        $ticket = new ticket();
        $ticket->status = '1';
        $ticket->save();

        $id_ticket = ticket::findOrFail($ticket->id);
        $id_ticket->Barcode = str_pad($ticket->id, 4, '0', STR_PAD_LEFT);
        $id_ticket->save();

        $transaction = new transaction();
        $transaction->id_ticket = $ticket->id;
        $transaction->id_buyer = $info->id;
        $transaction->id_user = substr($info->username, 1);
        $transaction->jenis_tiket = $info->jenis_tiket;
        $transaction->status_pembayaran = 0;
        $transaction->save();
        return redirect()->route('user.buy.send',$transaction->id);
    }

    public function send($id)
    {
        $createdatas = DB::table('transactions')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->select('buyers.nama','buyers.from','buyers.no_hp','buyers.email')->where('transactions.id', '=', $id)->get();
        // $user = transaction::findOrFail($id);
        $transaction = transaction::findOrFail($id);
        $createdatas = buyer::findOrFail($transaction->id_buyer);
        $acara = acara::all();
        $data = [
                    'id' => str_pad($transaction->id, 4, '0', STR_PAD_LEFT),
                   'nama' => $createdatas->nama,
                   'from' => $createdatas->from,
                   'no_hp' => $createdatas->no_hp,
                   'email' => $createdatas->email,
        ];
        if($transaction->jenis_tiket == 2){
            try {
            Mail::send('admin.registration_research', $data, function($message) use ($createdatas){
                   $message->to($createdatas->email, $createdatas->nama)->subject
                      ('Data Debunked Day DATA RESEARCH CCI SUMMIT 2019 Registration');
                   $message->from('ccisummit2019@gmail.com','CCI Summit');
                });
            } catch (Exception $ex) {
                $ex->getMessage();
                return "We've got errors!";
            }
        }else if($transaction->jenis_tiket == 4){
            try {
            Mail::send('admin.registration_mm', $data, function($message) use ($createdatas){
                   $message->to($createdatas->email, $createdatas->nama)->subject
                      ('Seminar Jurnalistik MEDIA MANAGEMENT CCI SUMMIT 2019 Registration');
                   $message->from('ccisummit2019@gmail.com','CCI Summit');
                });
            } catch (Exception $ex) {
                $ex->getMessage();
                return "We've got errors!";
            }
        }else{
            echo "error";
        }
        return redirect()->route('user.bayar.show',$transaction->id)->with('status', 'Tiket berhasil dibuat! Harap Segera Lakukan Pembayarn!');
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
        $index = $id;
        return view('user.buy', compact('acara','index'));
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
                'no_hp' => 'required|numeric',
                'from' => 'required|max:255',
                'email' => 'required|email',
            );

            $validation = Validator::make(Input::all(), $rules);
            if($validation->fails()) {
                    return redirect()->route('user.buy.edit', $id)->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
            }
        $user = auth()->user();
        $buyer = new buyer();
        $buyer->nama = $request->nama;
        $buyer->no_hp = $request->no_hp;
        $buyer->from = $request->from;
        $buyer->email = $request->email;
        $buyer->username = "U".$user->id;
        $buyer->jenis_tiket = $id;
        $buyer->save();

        $lastInsertedId = $buyer->id;
        return redirect()->route('user.buy.confirmation', $lastInsertedId)->with('status', 'Data berhasil dibuat!');
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
