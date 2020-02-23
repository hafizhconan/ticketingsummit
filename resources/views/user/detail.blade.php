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

            <div class="col-12 grid-margin" >
                <div class="card" style="background-image: url({{ asset($acara->logo) }});background-repeat: no-repeat; background-size: 250px; background-position: center bottom; ">

                    <div class="card-body">

                    <div class="row ticket-card">

                      <div class="ticket-details col-md-9">

                        <div class="d-flex">
                        <h3>{{ $acara->nama}}</h3>

                      </div>

                      <h5>{{ $acara->tgl}}</h5>

                      <h5>{{ $acara->lokasi}}</h5>

                      <p class="text-gray ellipsis mb-2">

                        No Ticket : <?php 

                          $id = str_pad($createdata->id, 4, '0', STR_PAD_LEFT);
                          if($createdata->jenis_tiket == 1){
                            $depan = 'W';
                          }else if($createdata->jenis_tiket == 'Umum'){
                            $depan = 'D';
                          }else if($createdata->jenis_tiket == 2){
                            $depan = 'R';
                          }else if($createdata->jenis_tiket == 3){
                            $depan = 'N';
                          }else if($createdata->jenis_tiket == 4){
                            $depan = 'M';
                          }else{
                            $depan = 'ERROR';
                          }
                          ?>{{ $depan }}-{{$id}}

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

                    <div class="col-md-3 justify-content-center">

                      <center>
                        <?php
                          if($createdata->jenis_tiket == 1){
                            ?>
                            {!!QrCode::size(250)->generate('W-'.$ticket->Barcode);!!}
                            <?php
                          }else if($createdata->jenis_tiket == 'Umum'){
                            ?>
                            {!!QrCode::size(250)->generate('D-'.$ticket->Barcode);!!}
                            <?php
                          }else if($createdata->jenis_tiket == 2){
                            ?>
                            {!!QrCode::size(250)->generate('R-'.$ticket->Barcode);!!}
                            <?php
                          }else if($createdata->jenis_tiket == 3){
                            ?>
                            {!!QrCode::size(250)->generate('N-'.$ticket->Barcode);!!}
                            <?php
                          }else if($createdata->jenis_tiket == 4){
                            ?>
                            {!!QrCode::size(250)->generate('M-'.$ticket->Barcode);!!}
                            <?php
                          }else{
                            echo "ERROR";
                          }
                        ?>
                        

                      <!-- <img class="img-fluid mb-4 mb-md-0 pb-5" src="{{ asset('images/qrcode.png') }}" alt="profile image"> --></center>

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

