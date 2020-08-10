<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
            input {
                  width: 60%;
                  padding: 12px 20px;
                  margin: 3px 0;
                  box-sizing: border-box;
                }
            button {
                  padding: 10px 24px;
                  border-radius: 12px;
                  background-color: blue;
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
                font-size: 50px;
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
            .content{
                border: solid;
                width: 40%;
                padding: 12px 20px;
                margin: 3px 0;

            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" style="border: solid;">
                <div class="title m-b-md">
                   <span style="text-align: 80px; color: red"> Registration Page. </span>
                </div>


                <div>
                   <form class="" action="{{URL::to('/store')}}" method="post">
                        <input type="text" name="name" placeholder="User name" value="">
                        <br><br>
                        <input type="email" name="email" placeholder=" User email id" value=""><br><br>
                        <input type="password" name="pass" placeholder="Enter pasword" value=""><br><br>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" name="button">register</button>
                    </form>
                </div>
               
            </div>
        </div>
    </body>
</html>
