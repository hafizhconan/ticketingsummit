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

                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara->logo) }}" alt="profile image">

                    </div>

                    <div class="ticket-details col-md-7">

                      <div class="d-flex">

                        <h3>{{ $acara->nama}}</h3>

                      </div>

                      <h5>{{ $acara->tgl}}</h5>

                      <h5>{{ $acara->lokasi}}</h5>

                      <p class="text-gray ellipsis mb-2">

                        Pemateri : {{ $acara->pemateri}}

                      </p>

                      <p class="text-gray ellipsis mb-2">

                        Free : {{ $acara->keterangan}}

                      </p>

                      <div class="row d-md-flex">

                        <div class="col-4 d-flex text-gray">

                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>

                          <small class="Last-responded mr-2 mb-0 text-muted text-muted"><?php 

                            $transaction_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', $createdata->jenis_tiket)->count();

                            $sisa = $acara->jumlah-$transaction_acc;

                          ?>

                          {{ $sisa }}</small>

                        </div>

                        <div class="col-4 d-flex text-gray">

                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>

                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">

                           <?php 

                              $date = \Carbon\Carbon::parse($acara->due);

                              $now = \Carbon\Carbon::now();

                              $diff = $date->diffInDays($now);

                            ?>{{ $diff }} Days</small>

                        </div>

                        <div class="col-4 d-flex">

                          <div class="ticket-actions">

                              <div class="ticket-details">

                                  <h3>Price : {{ $acara->harga}}K</h3>

                              </div>

                          </div>

                        </div>

                      </div>

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

                      <h4 class="card-title text-center">CONFIRMATION TICKET</h4>

                      <div class="table-responsive">

                      <table class="table table-hover" style="margin: auto;">

                      <thead>

                        <tr>

                          <th>Atas Nama</th>

                          <th>NIM / No. ID</th>

                          <th>No.HP</th>

                          <th>Email</th>

                        </tr>

                      </thead>

                      <tbody>

                        <tr>

                          <td>{{$createdata->nama}}</td>

                          <td>{{$createdata->from}}</td>

                          <td>{{$createdata->no_hp}}</td>

                          <td>{{$createdata->email}}</td>

                        </tr>

                      </tbody>

                    </table>

                    </div>

                    </div>

                  </div>

                  <div class="row d-flex justify-content-center m-3">
                    <a href="{{ route('user.home.index') }}" class="btn btn-danger" style="margin-right: 2%" id="nigga" readonly>Cancel</a>
                    <form action="{{ route('user.buy.ticket',$createdata->id) }}" method="GET" id="formRegist">
                      <button id="btnSubmit" onclick="btnSpinner()" class="btn btn-primary" type="submit">Checkout</button>
                    </form>

                  </div>

          </div>

        </div>

      </div>
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <script>
    var btn = $('#btnSubmit')
    var btn2 = $('#nigga')

    $('#formRegist').submit(function btnSpinner(){
      btn.html("<div class='spinner-border text-light' role='status'>Loading...</div>")
      btn.attr('disabled','true')
      btn2.addClass('disabled')
    })
  </script>

@endsection

