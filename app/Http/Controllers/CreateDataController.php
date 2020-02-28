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

use App\Acara;

use App\Variable;

use Auth;

use DB;

use Kyslik\ColumnSortable\Sortable;

class CreateDataController extends Controller
{
  public function index(Request $request)
    {

        $search = $request->get('search');
        $sort = $request->get('sort');
        $direction = $request->get('direction');
        
        // $transaction_total_n = transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', 3)->count();
        // $transaction_acc_n = transaction::where('transactions.deleted', '=', null)->where('transactions.status_pembayaran', '=', 1)->where('transactions.jenis_tiket', '=', 3)->count();
        // $transaction_not_acc_n = transaction::where('transactions.deleted', '=', null)->where('transactions.status_pembayaran', '!=', 1)->where('transactions.jenis_tiket', '=', 3)->count();
        if($sort && $direction) {
                $createdata = transaction::join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('acaras', 'acaras.id', '=', 'transactions.jenis_tiket')->select('transactions.*','buyers.nama as nama','buyers.from as from','buyers.no_hp as no_hp','buyers.email as email', 'users.name as name_created_by','acaras.nama as nama_acara')->where('transactions.deleted', '=', null)
                ->where(function($q) {
                    $q->where('transactions.jenis_tiket', '=', 4)
                      ->orWhere('transactions.jenis_tiket', '=', 5);
                })
                ->where(function($query) use ($search) {
            $query->Orwhere('buyers.nama', 'like', '%' . $search . '%')
                  ->Orwhere('buyers.no_hp', 'like', '%' . $search . '%')
                  ->Orwhere('buyers.email', 'like', '%' . $search . '%');
          })->orderBy($sort, $direction)->latest()->paginate(10)->withPath('?search=' . $search);
        }else{
          $createdata = transaction::join('users', 'transactions.id_user', '=', 'users.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->join('acaras', 'acaras.id', '=', 'transactions.jenis_tiket')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'users.name as name_created_by','acaras.nama as nama_acara')->where('transactions.deleted', '=', null)
                ->where(function($query) use ($search) {
            $query->Orwhere('buyers.nama', 'like', '%' . $search . '%')
                  ->Orwhere('buyers.no_hp', 'like', '%' . $search . '%')
                  ->Orwhere('buyers.email', 'like', '%' . $search . '%');
          })->latest()->paginate(10)->withPath('?search=' . $search);
        }
        // $createdata = DB::table('buyers')->join('users', 'buyers.username', '=', 'users.id')->select('buyers.*', 'users.name as name_created_by')->latest()->paginate(5);
        
        return view('admin.createdata.index', compact('createdata','sort','direction'));

    }

    public function create()
    {
        return view('admin.createdata.create');
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
                'no_hp' => 'required|numeric',
                'from' => 'required|max:255',
                'email' => 'required|email',
            );

            $validation = Validator::make(Input::all(), $rules);
            if($validation->fails()) {
                    return redirect()->route('admin.createdata.create')->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
            }
        $user = auth()->user();
        $buyer = new buyer();
        $buyer->nama = $request->nama;
        $buyer->no_hp = $request->no_hp;
        $buyer->from = $request->from;
        $buyer->email = $request->email;
        $buyer->username = $user->id;
        // $createdata->contentQR = QrCode::size(200)->generate('CCISUMMIT-'.$request->nim);
        $buyer->save();
        // $data = [
        //            'nama' => $request->nama,
        //            'no_hp' => $request->no_hp,
        //            'email' => $request->email,
        //            // 'contentQR' => QrCode::format('png')->size(200)->generate('CCISUMMIT-'.$request->nim),
        // ];
        // $user = createdata::findOrFail($createdata->id);
        // Mail::send('mail', $data, function($message) use ($user){
        //    $message->to($user->email, $user->nama)->subject
        //       ('CCI SUMMIT REGISTRATION');
        //    $message->from('hafizhconan@gmail.com','CCI SUMMIT');
        // });
        $lastInsertedId = $buyer->id;
        return redirect()->route('admin.createdata.confirmation', $lastInsertedId)->with('status', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function confirmation($id)
    {
        $createdata = buyer::findOrFail($id);
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdata->created_at)->format('Y-m-d');
        $name = user::find($createdata->username);
        return view('admin.createdata.confirmation', compact('createdata','date','name'));
    }

    public function ticket($id)
    {
        $ticket = new ticket();
        $info = buyer::findOrFail($id);
        $ticket->status = '1';
        $ticket->save();

        $id_ticket = ticket::findOrFail($ticket->id);
        $id_ticket->Barcode = str_pad($ticket->id, 4, '0', STR_PAD_LEFT);
        $id_ticket->save();

        $transaction = new transaction();
        $transaction->id_ticket = $ticket->id;
        $transaction->id_buyer = $info->id;
        $transaction->id_user = $info->username;
        $transaction->jenis_tiket = 'Umum';
        $transaction->status_pembayaran = 0;
        $transaction->save();
        return redirect()->route('admin.createdata.send',$transaction->id);
    }

    public function send($id)
    {
        $createdatas = DB::table('transactions')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->select('buyers.nama','buyers.from','buyers.no_hp','buyers.email')->where('transactions.id', '=', $id)->get();
        // $user = transaction::findOrFail($id);
        $transaction = transaction::findOrFail($id);
        $createdatas = buyer::findOrFail($transaction->id_buyer);
        $data = [
                    'id' => str_pad($transaction->id, 4, '0', STR_PAD_LEFT),
                   'nama' => $createdatas->nama,
                   'from' => $createdatas->from,
                   'no_hp' => $createdatas->no_hp,
                   'email' => $createdatas->email,
        ];
        if($transaction->jenis_tiket == 2){
            try {
                Mail::send('admin.registration', $data, function($message) use ($createdatas){
                       $message->to($createdatas->email, $createdatas->nama)->subject
                          ('UI/UX Design CCI SUMMIT 2019 Registration');
                       $message->from('ccisummit2019@gmail.com','CCI Summit');
                    });
            } catch (Exception $ex) {
                $ex->getMessage();
                return "We've got errors!";
            }
        }else if($transaction->jenis_tiket == 3){
            try {
                Mail::send('admin.registration', $data, function($message) use ($createdatas){
                       $message->to($createdatas->email, $createdatas->nama)->subject
                          ('UI/UX Design CCI SUMMIT 2019 Registration');
                       $message->from('ccisummit2019@gmail.com','CCI Summit');
                    });
            } catch (Exception $ex) {
                $ex->getMessage();
                return "We've got errors!";
            }
        }else{
            echo "error";
        }
        
        return redirect()->route('admin.createdata.index')->with('status', 'Tiket berhasil dibuat!');
    }

    public function acc($id)
    {
        $transaction = transaction::findOrFail($id);
        $user = buyer::findOrFail($transaction->id_buyer);
        $createdata = DB::table('transactions')->join('tickets', 'transactions.id_ticket', '=', 'tickets.id')->join('buyers', 'transactions.id_buyer', '=', 'buyers.id')->select('transactions.*','buyers.nama','buyers.from','buyers.no_hp','buyers.email', 'tickets.Barcode')->where('transactions.id', '=', $id)->get();
        $variable = variable::findOrFail(1);
        $acara = acara::findOrFail($transaction->jenis_tiket);
        foreach($createdata as $createdatas){
        $data = [
                    'id' => str_pad($createdatas->id, 4, '0', STR_PAD_LEFT),
                   'nama' => $createdatas->nama,
                   'from' => $createdatas->from,
                   'no_hp' => $createdatas->no_hp,
                   'email' => $createdatas->email,
                   'barcode' => $createdatas->Barcode,
                   'nama_singkat' => $acara->nama_singkat,
                   'header' => $acara->header,
                   'tgl' => $acara->tgl,
                   'lokasi' => $acara->lokasi,
                   'harga' => $acara->harga,
                   'tahun_acara' => $variable->tahun_acara,
        ];
        }
        try {
            Mail::send('admin.ticket', $data, function($message) use ($user){
                $message->to($user->email, $user->nama)->subject('e-Ticket CCI Summit 2020');
                $message->from('ccisummit@mg.cciunitel.com', 'CCI Unitel');
             });
        } catch (Exception $ex) {
            $ex->getMessage();
            return "We've got errors!";
        }
        
        $user = auth()->user();
        $transaction->acc_by = $user->id;
        $transaction->save();
        return redirect()->route('admin.createdata.changeacc',$id);
    }

    public function changeacc($id)
    {
        $transaction = transaction::findOrFail($id);
        $transaction->status_pembayaran = 1;
        $transaction->save();
        return redirect()->route('admin.createdata.index')->with('status', 'Tiket Berhasil di ACC!');
    }

    public function show($id)
    {
        $createdata = transaction::findOrFail($id);
        $acara = Acara::findOrFail($createdata->jenis_tiket);
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdata->created_at)->format('Y-m-d H:i:s');
        $dateline = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdata->created_at)->addHour(12);
        $buyer = buyer::find($createdata->id_buyer);
        $user = user::find($createdata->id_user);
        $ticket = ticket::find($createdata->id_ticket);
        $bukti = bukti::where('id_transaction', $id)->get();
        return view('admin.createdata.rinci', compact('createdata','date','buyer','user','ticket','bukti','dateline','acara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $createdata = transaction::findOrFail($id);
        $buyer = buyer::find($createdata->id_buyer);
        return view('admin.createdata.edit', compact('createdata','buyer'));
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
                    return redirect()->route('admin.createdata.edit', $request->id_transaction)->withInput()->withErrors($validation->messages())->with('status', 'Masukan Data yang sesuai!');
            }
        $user = auth()->user();
        $buyer = buyer::findOrFail($id);
        $buyer->nama = $request->nama;
        $buyer->no_hp = $request->no_hp;
        $buyer->from = $request->from;
        $buyer->email = $request->email;
        $buyer->username_updated = $user->id;
        // $createdata->contentQR = QrCode::size(200)->generate('CCISUMMIT-'.$request->nim);
        $buyer->save();
        return redirect()->route('admin.createdata.index')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = transaction::findOrFail($id);
        $transaction->deleted = 1;
        $transaction->save();

        $buyer = buyer::findOrFail($transaction->id_buyer);
        $buyer->deleted = 1;
        $buyer->save();

        $ticket = ticket::findOrFail($transaction->id_ticket);
        $ticket->deleted = 1;
        $ticket->save();

        return redirect()->route('admin.createdata.index')->with('status', 'Data berhasil dihapus!');
    }

    public function destroyAll(Request $request)
    {
        Pendaftaran::destroy($request->pndf); 
        return back();
    }
}
