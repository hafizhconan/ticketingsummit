<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Ticket Telkom Edutainment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f5f2e1;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
                        
            img{
                height:100%;
            }
            @media only screen and (max-width: 600px) {
                img {
                    height: 150px;
                }
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/createdata') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    @endif
                    <!--<a href="{{ url('/register') }}">Register</a>-->
                </div>
            @endif
            
            <div class="content">
                <div class="title m-b-md">
                <div><a href="/"><img src="logo.jpg"></a></div>

                </div>

                <div class="links">
                    <a href="{{ url('/absensi') }}">Absensi</a>
                    <a href="{{ url('/daftarhadir') }}">Daftar Hadir</a>
                    <a href="{{ url('/undian') }}">Undian</a>
                    <!--<a href="{{ url('/list') }}">Data Pembeli</a>-->
                    <a href="{{ url('/createdata') }}">Beli Tiket</a>
                </div>
            </div>
        </div>
    </body>
</html>
