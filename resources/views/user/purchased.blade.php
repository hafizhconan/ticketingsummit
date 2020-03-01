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

                      @if (session('status')=="Bukti Pembayaran Berhasil dikirim!")

                      <div class="row purchace-popup">

                        <div class="col-12 alert alert-success">

                          <div class="float-left">

                          <span class="d-block d-md-flex align-items-center">

                            <strong>Success!</strong> {{ session('status') }}

                          </span>

                          </div>

                          <div class="float-right">

                          <span class="d-block d-md-flex align-items-center">

                            <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>

                          </span>

                        </div>

                        </div>

                      </div>

                      @endif

                    <div class="table-responsive">

                    <table class="table table-hover">

                      <thead>

                        <tr>
                          <th>Acara</th>
                          <th>No.Ticket</th>

                          <th>Atas Nama</th>

                          <th>Email</th>

                          <th>Status</th>

                          <th>Aksi</th>

                        </tr>

                      </thead>

                      <tbody>

                      @foreach($createdata as $createdatas)

                        <tr>
                          <td>
                            <?php
                            $title = App\Acara::find($createdatas->jenis_tiket);
                            ?>
                            {{$title->nama}}
                          </td>
                          <td>
                          <?php 
                          $id = str_pad($createdatas->id, 4, '0', STR_PAD_LEFT);
                          ?>
                          {{$id}}
                          </td>

                          <td>{{$createdatas->nama}}</td>

                          <td>{{$createdatas->email}}</td>

                          <td>

                            <?php 

                            if($createdatas->status_pembayaran == 0){

                             echo '<label class="badge badge-danger">Menunggu Pembayaran</label>';

                            }else if($createdatas->status_pembayaran == 1){

                              echo '<label class="badge badge-success">Selesai</label>';

                            }else if($createdatas->status_pembayaran == 2){

                              echo '<label class="badge badge-warning">Menunggu Verifikasi</label>';

                            }else{

                              echo '<label class="badge badge-info">Unknown</label>';

                            }

                            ?>

                          </td>

                          <td>

                            <?php 
                            $crypt = Crypt::encryptString($createdatas->id);
                            if($createdatas->status_pembayaran == 1){

                             echo '<a href="'.route("user.detail.show", $crypt).'" class="btn btn-primary">Lihat Detail

                            </a>';

                            }else if($createdatas->status_pembayaran == 2){

                              echo '<a href="'.route("user.bayar.show", $crypt).'" class="btn btn-warning">Tata Cara Pembayaran

                              </a>';

                            }else{

                              echo '<a href="'.route("user.bayar.show", $crypt).'" class="btn btn-warning">Tata Cara Pembayaran

                              </a>';

                              echo '<a href="'.route("user.confirmation.edit", $crypt).'" class="btn btn-danger">Konfirmasi Pembayaran

                            </a>';

                            }

                            ?>

                          </td>

                        </tr>

                      @endforeach

                      </tbody>

                    </table>

                  </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- <div class="row d-flex justify-content-center">

          <button class="btn btn-primary">Home</button>

          <button class="btn btn-danger">Konfirmasi Pembayaran</button>

        </div> -->

      </div>

      

@endsection

