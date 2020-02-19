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

                      <img class="img-fluid mb-4 mb-md-0" src="{{ asset($acara[$index]->logo) }}" alt="profile image">

                    </div>

                    <div class="ticket-details col-md-7">

                      <div class="d-flex">

                        <h3>{{ $acara[$index]->nama}}</h3>

                      </div>

                      <h5>{{ $acara[$index]->tgl}}</h5>

                      <h5>{{ $acara[$index]->lokasi}}</h5>

                      <p class="text-gray ellipsis mb-2">

                        Pemateri : {{ $acara[$index]->pemateri}}

                      </p>

                      <p class="text-gray ellipsis mb-2">

                        Free : {{ $acara[$index]->keterangan}}

                      </p>

                      <div class="row d-md-flex">

                        <div class="col-4 d-flex text-gray">

                          <small class="mb-0 mr-2 text-muted text-muted">Ticket Left :</small>

                          <small class="Last-responded mr-2 mb-0 text-muted text-muted"><?php 

                            $transaction_acc = App\transaction::where('transactions.deleted', '=', null)->where('transactions.jenis_tiket', '=', $index)->count();

                            $sisa = $acara[$index]->jumlah-$transaction_acc;

                          ?>

                          {{ $sisa }}</small>

                        </div>

                        <div class="col-4 d-flex text-gray">

                          <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>

                          <small class="Last-responded mr-2 mb-0 text-muted text-muted">

                           <?php 

                              $date = \Carbon\Carbon::parse($acara[$index]->due);

                              $now = \Carbon\Carbon::now();

                              $diff = $date->diffInDays($now);

                            ?>{{ $diff }} Days</small>

                        </div>

                        <div class="col-4 d-flex">

                          <div class="ticket-actions">

                              <div class="ticket-details">

                                  <h3>Price : {{ $acara[$index]->harga}}K</h3>

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

                      <h4 class="card-title text-center">FORM ORDER TICKET</h4>

                      {!! Form::open(['route'=>['user.buy.update', $index], 'method'=> 'PATCH','class'=>'forms-sample'])  !!}

                        <div class="form-group @if ($errors->has('nama')) has-error @endif">

                        {!! Form::label('nama','Nama Lengkap*') !!}

                        {!! Form::text('nama', null, array('class' =>'form-control','placeholder' => 'Masukkan Nama Lengkap')) !!}

                        @if ($errors->has('nama')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('nama') }}</h6> @endif

                        </div>

                        <div class="form-group @if ($errors->has('from')) has-error @endif">

                        {!! Form::label('from','NIM / No. Identitas*') !!}

                        {!! Form::text('from', null, array('class' =>'form-control','placeholder' => 'Masukkan NIM / No. Identitas')) !!}

                        @if ($errors->has('from')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('from') }}</h6> @endif

                        </div>

                        <div class="form-group @if ($errors->has('no_hp')) has-error @endif">

                        {!! Form::label('no_hp','NO. HP*') !!}

                        {!! Form::text('no_hp', null, array('class' =>'form-control','placeholder' => 'Masukkan NO. HP')) !!}

                        @if ($errors->has('no_hp')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('no_hp') }}</h6> @endif

                        </div>

                        <div class="form-group @if ($errors->has('email')) has-error @endif">

                        {!! Form::label('email','Email*') !!}

                        {!! Form::text('email', null, array('class' =>'form-control','placeholder' => 'Masukkan Email')) !!}
                        @if ($errors->has('email')) <h6 class="help-block" style="color:#000!important;">{{ $errors->first('email') }}</h6> @endif

                        </div>

                        <div class="form-group">

                          <label for="email">* Wajib diisi</label>

                        </div>

                        {!! Form::submit('Submit', array('class' => 'btn btn-success mr-2')) !!}

                        <button class="btn btn-light">Cancel</button>

                      {!! Form::close() !!}

                    </div>

                  </div>

          </div>

        </div>

      </div>

      

@endsection

