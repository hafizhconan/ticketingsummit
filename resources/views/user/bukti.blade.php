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

                    <a href="{{ route('user.purchased.index') }}" class="btn btn-block btn-primary btn-lg">Purchased Ticket

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

                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[$buyer->jenis_tiket]->logo) }}" alt="profile image">

                    </div>

                    <div class="ticket-details col-md-7">

                      <div class="d-flex">

                        <h3>{{ $acara[$buyer->jenis_tiket]->nama}}</h3>

                      </div>

                      <h5>{{ $acara[$buyer->jenis_tiket]->tgl}}</h5>

                      <h5>{{ $acara[$buyer->jenis_tiket]->lokasi}}</h5>

                      <p class="text-gray ellipsis mb-2">

                        No Ticket : <?php 

                          $id = str_pad($createdata->id, 4, '0', STR_PAD_LEFT);

                          ?>
                          <?php
                          if($buyer->jenis_tiket == 1){
                            echo "W";
                          }else if($buyer->jenis_tiket == 2){
                            echo "R";
                          }else if($buyer->jenis_tiket == 3){
                            echo "N";
                          }else{
                            echo "ERROR";
                          }
                          ?>-{{$id}}

                      </p>

                      <p class="text-gray ellipsis mb-2">

                        Atas Nama : {{$buyer->nama}}

                      </p>

                      <p class="text-gray ellipsis mb-2">

                        NIM : {{$buyer->from}}

                      </p>

                      <p class="text-gray ellipsis mb-2">

                        No HP : {{$buyer->no_hp}}

                      </p>

                      <p class="text-gray ellipsis mb-2">

                        Email : {{$buyer->email}}

                      </p>

                    </div>

                  </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

          <div class="col-12 grid-margin">

                  <div class="card">

                    <div class="card-body">

                      <h4 class="card-title text-center">FORM KONFIRMASI PEMBAYARAN</h4>

                      {!! Form::open(['route'=>['user.confirmation.update', $createdata->id],'class'=>'forms-sample','method'=>'patch','files' => true,'enctype'=>'multipart/form-data'])  !!}

                      <div class="form-group @if ($errors->has('nama_pengirim')) has-error @endif">

                        {!! Form::label('nama_pengirim','Nama Lengkap Rekening Pengirim*') !!}

                        {!! Form::text('nama_pengirim', null, array('class' =>'form-control','placeholder' => 'Masukkan Nama Rekening Pengirim')) !!}

                        @if ($errors->has('nama_pengirim')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('nama_pengirim') }}</h6> @endif

                        </div>

                        <div class="form-group @if ($errors->has('bank_pengirim')) has-error @endif">

                        {!! Form::label('bank_pengirim','Bank Rekening Pengirim*') !!}

                        {!! Form::text('bank_pengirim', null, array('class' =>'form-control','placeholder' => 'Masukkan Bank Pengirim')) !!}

                        @if ($errors->has('bank_pengirim')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('bank_pengirim') }}</h6> @endif

                        </div>

                      <div class="@if ($errors->has('Gambar')) has-error @endif">

                        <label>Bukti Pembayaran* (Wajib)</label>

                        {!! Form::file('Gambar', null, array('class' =>'form-control','placeholder' => 'Gambar')) !!}

                        @if ($errors->has('Gambar')) <span class="help-block">{{ $errors->first('Gambar') }}</span> @endif

                      </div>

                         <div class="form-group">

                          <label for="email">* Wajib diisi</label>

                        </div>

                        <button type="submit" class="btn btn-success mr-2">Submit</button>

                        <button class="btn btn-light">Cancel</button>

                      </form>

                    </div>

                  </div>

          </div>

        </div>

      </div>

      

@endsection
