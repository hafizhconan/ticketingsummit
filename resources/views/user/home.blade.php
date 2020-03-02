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
                        <img src="{{ asset('images/banner2.png') }}" class="img-fluid">
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

                  @foreach($acara as $a)
                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-5">
                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($a->logo) }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-5">
                      <div class="d-flex">
                        <h3>{{ $a->nama}}</h3>
                      </div>
                      <h5>{{ $a->tgl}}</h5>
                      <h5>{{ $a->lokasi}}</h5>
                      <p class="text-gray ellipsis mb-2">
                        Pemateri : {{ $a->pemateri}}
                      </p>
                      <p class="text-gray ellipsis mb-2">
                        Free : {{ $a->keterangan}}
                      </p>
                      <div class="row text-gray d-md-flex">
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                          <?php 
                            $transaction_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', $a->id)->count();
                            $sisa = $a->jumlah-$transaction_acc;
                            if($sisa < 0){
                              echo "0";
                            }else{
                              echo $sisa;
                            }
                          ?></small>
                        </div>
                        <div class="col-4 d-flex">
                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">
                            <?php 
                              $date = \Carbon\Carbon::parse($a->due);
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
                            <h3>Price : {{ $a->harga}}K</h3>
                        </div>
                        <?php 
                        if($sisa <= 0){
                          echo '<button type="button" class="btn btn-danger btn-lg" disabled>
                          SOLD OUT
                        </button>';
                        }else{
                          $encrypted = Crypt::encryptString($a->id);
                          echo '
                          <a href="'.route("user.buy.edit", $encrypted).'" class="btn btn-success btn-lg">
                          BUY NOW
                        </a>';
                        }
                        ?>
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection
