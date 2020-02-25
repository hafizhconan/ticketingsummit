@extends('user.layout.app')



@section('content')

          <div class="col-lg-5 grid-margin stretch-card">

            <div class="card">

              <div class="card-body">

                <h2 class="display-3">Welcome, {{ Auth::user()->name }}</h2>

                <div class="wrapper d-flex justify-content-between">

                  <div class="side-left">

                </div> 

                  <div class="side-right">

                    <p class="display-3">

                        <button class="btn" disabled="disabled">Profile</button>

                        <a class="btn btn-danger" href="{{ url('/user/logout') }}"

                            onclick="event.preventDefault();

                                     document.getElementById('logout-form').submit();">

                            Logout

                        </a>

                    </p>

                  </div>

                </div>

                <div class="wrapper d-flex justify-content-between">

                    <a href="{{ route('user.home.index') }}" class="btn btn-block btn-primary btn-lg">Home

                    </a>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="row">

            <div class="col-12 grid-margin">

                <div class="card">

                    <div class="card-body">

                    <div class="row ticket-card">

                    <div class="col-md-5">
                    <?php 
                            $data = App\Variable::findOrFail(1);
                            ?>
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($data->main_logo) }}" alt="profile image">

                    </div>

                    <div class="ticket-details col-md-7">

                      <div class="d-flex">

                        <h1 class="text-center">TATA CARA PEMBAYARAN</h1>

                      </div>

                      <ol>

                        <h5>

                          <li>Lakukan transfer uang pembayaran tiket sebesar RP.{{ $acara->harga }}.000,- ke rekening :</li>

                          <blockquote class="blockquote text-primary">
                            
                            <p class="mb-0 h5">No. Rekn: {{ $data->no_rekn }}</p>

                            <p class="mb-0 h5">A.N     : {{ $data->nama_rekn }}</p>

                          </blockquote>

                          <li>Pada kolom keterangan isikan nama : {{ $buyer->nama}}</li>

                          <li>Jika sudah melakukan transfer, simpan bukti transfer lalu segera lakukan konfirmasi pembayaran agar tiket dapat terkirim ke email anda.</li>

                          <li>Untuk melakukan konfirmasi pembayaran bisa melalui tombol menu <?php 

                          if($transaction->status_pembayaran == 0){
                            $crypt = Crypt::encryptString($transaction->id);
                            echo '<a href="'.route("user.confirmation.edit", $crypt).'" class="btn btn-danger">Konfirmasi Pembayaran

                            </a>';

                          }

                          ?></li>

                          <li>Atau bisa membayar secara tunai dengan cara menghubungi contact person dibawah atau Official Account CCI yang tersedia.</li>

                          <li>Batas Waktu pembayaran adalah 12 Jam setelah pemesanan tiket. Apabila melebihi waktu yang ditentukan maka pihak panitia berhak dan sah untuk melakukan cancel tiket yang sudah dipesan.</li>

                        </h5>

                      </ol>

                      <blockquote class="blockquote text-danger">

                        <p class="mb-0 h5">Lakukan Pembayaran Tiket Sebesar Rp.{{ $acara->harga }}.000,- </p>

                        <p class="mb-0 h5">Sebelum <?php

                        $now = \Carbon\Carbon::parse($buyer->created_at)->addHour(12);

                        ?>{{ $now }}. Agar order ticket tidak tercancel.</p>

                      </blockquote>

                      <p class="h4">CP : {{ $data->kontak1 }}, {{ $data->kontak2 }}</p>

                      <table border="0" cellpadding="0" cellspacing="0">

                        <tr>

                          <td class="row-span-2">OFFICIAL ACCOUNT</td>

                        </tr>

                        <tr>

                         <td>

                          <a href="http://line.me/ti/p/~@buz0214o" class="d-inline">

                           <img src="https://i.imgur.com/kleO6rW.gif" alt="Line" width="38" height="38" border="0" />

                           <p class="h5">@buz0214o</p>

                          </a>

                         </td>

                         <td>

                         </td>

                         <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>

                         <td>

                          <a href="https://www.instagram.com/cciunitel/">

                           <img src="https://i.imgur.com/0wa6ot4.gif" alt="Instagram" width="38" height="38" style="display: block;" border="0" />

                           <p class="h5">cciunitel</p>

                          </a>

                         </td>

                        </tr>

                       </table>

                    </div>

                  </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row d-flex justify-content-center">

          <a href="{{ route('user.home.index') }}" class="btn btn-secondary">Home

          </a>

          <a href="{{ route('user.purchased.index') }}" class="btn btn-primary">Purchased Ticket

          </a>

        </div>

      </div>

      

@endsection

