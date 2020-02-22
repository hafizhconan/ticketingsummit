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

                        <form id="logout-form" action="{{ url('/user/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
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
                        <img src="{{ asset('images/banner.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-4">Tickets Available</h5>
                <div class="fluid-container">

                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[4]->logo) }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>{{ $acara[4]->nama}}</h3>
                      </div>
                      <h5>{{ $acara[4]->tgl}}</h5>
                      <h5>{{ $acara[4]->lokasi}}</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : {{ $acara[4]->pemateri}}
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : {{ $acara[4]->keterangan}}
                      </p>
                      <div class="row text-gray d-md-flex">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                          <?php 
                            $transaction_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', '4')->count();
                            $sisa = $acara[4]->jumlah-$transaction_acc;
                          ?>
                          {{ $sisa }}</small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                            <?php 
                              $date = \Carbon\Carbon::parse($acara[4]->due);
                              $now = \Carbon\Carbon::now();
                              $diff = $date->diffInDays($now)+1;
                            ?>{{ $diff }} Days</small>
                        </div>
                        <div class="col-4 d-flex">
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                        <div class="ticket-details">
                            <h3>Price : {{ $acara[4]->harga}}K</h3>
                        </div>
                        <?php 
                        if($sisa <= 0){
                          echo '<button type="button" class="btn btn-danger btn-lg" disabled>
                          SOLD OUT
                        </button>';
                        }else{
                          echo '
                          <a href="'.route("user.buy.edit", "4").'" class="btn btn-success btn-lg">
                          BUY NOW
                        </a>';
                        }
                        ?>
                    </div>
                  </div>

                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[2]->logo) }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>{{ $acara[2]->nama}}</h3>
                      </div>
                      <h5>{{ $acara[2]->tgl}}</h5>
                      <h5>{{ $acara[2]->lokasi}}</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : {{ $acara[2]->pemateri}}
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : {{ $acara[2]->keterangan}}
                      </p>
                      <div class="row text-gray d-md-flex">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                          0</small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                            Done</small>
                        </div>
                        <div class="col-4 d-flex">
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                        <div class="ticket-details">
                            <h3>Price : {{ $acara[2]->harga}}K</h3>
                        </div>
                       <button type="button" class="btn btn-danger btn-lg" disabled>
                          SOLD OUT
                        </button>';
                    </div>
                  </div>


                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[7]->logo) }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>{{ $acara[7]->nama}}</h3>
                      </div>
                      <h5>{{ $acara[7]->tgl}}</h5>
                      <h5>{{ $acara[7]->lokasi}}</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : {{ $acara[7]->pemateri}}
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : {{ $acara[7]->keterangan}}
                      </p>
                      <div class="row text-gray d-md-flex">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                          0</small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                            Done</small>
                        </div>
                        <div class="col-4 d-flex">
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                        <div class="ticket-details">
                            <h3>Price : {{ $acara[7]->harga}}K</h3>
                        </div>
                       <button type="button" class="btn btn-danger btn-lg" disabled>
                          SOLD OUT
                        </button>';
                    </div>
                  </div>

                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[3]->logo) }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>{{ $acara[3]->nama}}</h3>
                      </div>
                      <h5>{{ $acara[3]->tgl}}</h5>
                      <h5>{{ $acara[3]->lokasi}}</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : {{ $acara[3]->pemateri}}
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : {{ $acara[3]->keterangan}}
                      </p>
                      <div class="row text-gray d-md-flex">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                          0</small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                            Done</small>
                        </div>
                        <div class="col-4 d-flex">
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                        <div class="ticket-details">
                            <h3>Price : {{ $acara[3]->harga}}K</h3>
                        </div>
                        <button type="button" class="btn btn-danger btn-lg" disabled>
                          SOLD OUT
                        </button>
                    </div>
                  </div>

                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[1]->logo) }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>{{ $acara[1]->nama}}</h3>
                      </div>
                      <h5>{{ $acara[1]->tgl}}</h5>
                      <h5>{{ $acara[1]->lokasi}}</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : {{ $acara[1]->pemateri}}
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : {{ $acara[1]->keterangan}}
                      </p>
                      <div class="row text-gray d-md-flex">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                          <?php 
                            $transaction_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', '1')->count();
                            $sisa = $acara[1]->jumlah-$transaction_acc;
                          ?>
                          {{ $sisa }}</small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                            Done</small>
                        </div>
                        <div class="col-4 d-flex">
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                        <div class="ticket-details">
                            <h3>Price : {{ $acara[1]->harga}}K</h3>
                        </div>
                        <button type="button" class="btn btn-danger btn-lg" disabled>
                          SOLD OUT
                        </button>
                    </div>
                  </div>

                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[0]->logo) }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>{{ $acara[0]->nama}}</h3>
                      </div>
                      <h5>{{ $acara[0]->tgl}}</h5>
                      <h5>{{ $acara[0]->lokasi}}</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : {{ $acara[0]->pemateri}}
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : {{ $acara[0]->keterangan}}
                      </p>
                      <div class="row text-gray d-md-flex">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                          <?php 
                            $transaction_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', 'Umum')->count();
                            $sisa = $acara[0]->jumlah-$transaction_acc;
                          ?>
                          {{ $sisa }}</small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                            Done</small>
                        </div>
                        <div class="col-4 d-flex">
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                        <div class="ticket-details">
                            <h3>Price : {{ $acara[0]->harga}}K</h3>
                        </div>
                        <button type="button" class="btn btn-danger btn-lg" disabled>
                          SOLD OUT
                        </button>
                    </div>
                  </div>

                  <!-- Ini Yg Kedua -->
                  <!-- <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset('images/design.png') }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>UI/UX DESIGN : Workshop Design UI and UX design for mobile.</h3>
                      </div>
                      <h5>Maret 17, 2019 Pukul 09.00 - Selesai</h5>
                      <h5>GSG VIP A</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : Aprianil Sesti Rangga
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : TAK & SNACK
                      </p>
                      <div class="row text-gray d-md-flex d-none">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">40</small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                        </div>
                        <div class="col-4 d-flex">
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                        <div class="ticket-details">
                            <h3>Price : 25K</h3>
                        </div>
                        <button type="button" class="btn btn-success btn-lg">
                          BUY NOW
                        </button>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection
