<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WebCodeCamJS</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style-web.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Login Events') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css') }}" type="text/css">
        <link href="{{ asset('css/style-web.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <script>
        function aclick(){
        document.getElementById("play").click();  
        }
        </script>
    </head>
    <body onLoad="aclick();">
    <div id="app">
        
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ "Login Events" }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" id="QR-Code">
        <!-- Error Catch -->
        @if (session('status')=="Data tidak ditemukan!")
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> {{ session('status') }}
        </div>
        @elseif (session('status')=="Selamat datang, Anda berhasil masuk!")
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session('status') }}
        </div>
        @elseif (session('status')=="Anda telah hadir!")
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> {{ session('status') }}
        </div>
        @elseif (session('status')=="QR CODE tidak bisa digunakan pada tanggal & jam ini!")
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> {{ session('status') }}
        </div>
        @endif

            <div class="panel panel-info">
                <div class="panel-body">
                    <h3 class="text-center">{{$now_playing->nama}}</h3>
                    <br>
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <select class="form-control" id="camera-select"></select>
                        </div>
                        <div class="col-sm-6">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Event
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    @foreach ($acara as $a)
                                        <li><a href="{{route('admin.absensi.edit', $a->id)}}">{{$a->nama_singkat}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="form-group">
                            <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                            <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span></button>
                            <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span></button>
                            <button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span></button>
                            <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span></button>
                         </div>
                        <div class="well" style="position: relative;display: inline-block;">
                            <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                            <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                        </div>
                        
                    </div>
                        <div class="col-md-6 text-center" style="padding-top:7%">
                            <div class="well" style="width: 100%;">
                            <label id="zoom-value" width="100">Zoom: 2</label>
                            <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                            <label id="brightness-value" width="100">Brightness: 0</label>
                            <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                            <label id="contrast-value" width="100">Contrast: 0</label>
                            <input id="contrast" onchange="Page.changeContrast();" type="range" min="0" max="64" value="0">
                            <label id="threshold-value" width="100">Threshold: 0</label>
                            <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                            <label id="sharpness-value" width="100">Sharpness: off</label>
                            <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                            <label id="grayscale-value" width="100">grayscale: off</label>
                            <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                            <br>
                            <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                            <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                            <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                            <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
                        </div>
                        </div>
                    <div class="col-md-12 text-center">
                        <div class="thumbnail" id="result">
                            <div class="caption">
                                <h3>Scanned Result</h3>
                                <p id="scanned-QR"></p>
                                {!! Form::open(['route'=>['admin.absensi.update', $id],'class'=>'form-horizontal tasi-form','method'=> 'PATCH'])  !!}
                                <div class="form-group @if ($errors->has('qrcode')) has-error @endif">
                                    <input list="dokter" id="qrcode" name="qrcode" class="form-control">
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <datalist id="dokter">
                                    <?php foreach ($createdata as $data1) {?>
                                        <option id="qrcode" value="<?php echo $data1->Barcode ?>"><?php echo $data1->nama ?></option>
                                    <?php } ?>
                                    </datalist>
                                    @if ($errors->has('qrcode'))
                                        <span class="help-block">{{ $errors->first('qrcode') }}</span>
                                    @endif
                                    <button title="Process" class="btn btn-success btn-sm" id="process" type="submit" data-toggle="tooltip">Process</button>
                                </div>
                                {!! Form::close() !!}
                                <!-- <input name="test" type="text"></input> -->
                            </div>
                            <div class="well" style="overflow: hidden;">
                                <img width="320" height="240" id="scanned-img" src="">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/filereader.js') }}"></script>
        <!-- Using jquery version: -->
        
            <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/qrcodelib.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/webcodecamjquery.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/mainjquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/qrcodelib.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/webcodecamjs.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>