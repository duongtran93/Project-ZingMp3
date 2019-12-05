<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="text-align: center">
        <img src="{{asset('storage/images/zingmp33.png')}}" alt="Zing mp3" style="width: 180px; height: 50px">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <a class="btn btn-white" style="font-size: 12px;font-weight: bold" href="#">
                    TRANG CHỦ
                </a>
            </div>
            <div class="container">
                <div class="dropdown">
                    <button style="font-size: 12px;font-weight: bold" class="btn btn-white">
                        TOP 100
                    </button>
                    <div class="dropdown-menu">
                        <table style="width: 100%">
                            <tr>
                                <th>VIỆT NAM</th>
                                <th>ÂU MĨ</th>
                                <th>CHÂU Á</th>
                            </tr>
                            <tr>
                                <td>Nhạc trẻ</td>
                                <td>Pop</td>
                                <td>Hàn Quốc</td>
                            </tr>
                            <tr>
                                <td>Nhạc trữ tình</td>
                                <td>Rock</td>
                                <td>Nhật Bản</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="dropdown">
                    <button style="font-size: 12px;font-weight: bold" class="btn btn-white">
                        CHỦ ĐỀ
                    </button>
                    <div class="dropdown-menu">
                        <table style="width: 100%">
                            <tr>
                                <th>VIỆT NAM</th>
                                <th>ÂU MĨ</th>
                                <th>CHÂU Á</th>
                            </tr>
                            <tr>
                                <td>Nhạc trẻ</td>
                                <td>Pop</td>
                                <td>Hàn Quốc</td>
                            </tr>
                            <tr>
                                <td>Nhạc trữ tình</td>
                                <td>Rock</td>
                                <td>Nhật Bản</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="dropdown">
                    <button style="font-size: 12px;font-weight: bold" class="btn btn-white">
                        MV
                    </button>
                    <div class="dropdown-menu">
                        <table style="width: 100%">
                            <tr>
                                <th>VIỆT NAM</th>
                                <th>ÂU MĨ</th>
                                <th>CHÂU Á</th>
                            </tr>
                            <tr>
                                <td>Nhạc trẻ</td>
                                <td>Pop</td>
                                <td>Hàn Quốc</td>
                            </tr>
                            <tr>
                                <td>Nhạc trữ tình</td>
                                <td>Rock</td>
                                <td>Nhật Bản</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="dropdown">
                    <button style="font-size: 12px;font-weight: bold" class="btn btn-white">
                        ALBUM
                    </button>
                    <div class="dropdown-menu">
                        <table style="width: 100%">
                            <tr>
                                <th>VIỆT NAM</th>
                                <th>ÂU MĨ</th>
                                <th>CHÂU Á</th>
                            </tr>
                            <tr>
                                <td>Nhạc trẻ</td>
                                <td>Pop</td>
                                <td>Hàn Quốc</td>
                            </tr>
                            <tr>
                                <td>Nhạc trữ tình</td>
                                <td>Rock</td>
                                <td>Nhật Bản</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="dropdown">
                    <button style="font-size: 12px;font-weight: bold" class="btn btn-white">
                        NGHỆ SĨ
                    </button>
                    <div class="dropdown-menu">
                        <table style="width: 100%">
                            <tr>
                                <td>Việt Nam</td>
                            </tr>
                            <tr>
                                <td>Âu mĩ</td>
                            </tr>
                            <tr>
                                <td>Hàn Quốc</td>
                            </tr>
                            <tr>
                                <td>Nhật Bản</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="input-group">
                <input type="text" name="search" placeholder="Nhập tên bài hát, ca sĩ, mv">
            </div>
            <div class="container">
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                @endif
            </div>
        </div>
    </nav>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
