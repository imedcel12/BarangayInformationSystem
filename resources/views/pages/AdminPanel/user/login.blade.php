<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link href=" {{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href=" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <title>Login</title>
</head>

<body
    style="background-image: url({{ URL::asset('images/back.png') }}); background-repeat:no-repeat; background-size: cover ">

    @include('inc.client_nav_login')


    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5" style="opacity: 0.8">
                    <div class="card-body">
                        <div class="container">
                            <h5 class="card-title text-center text-secondary" style="font-size: 25px;">Log In</h5>
                        </div>


                        {{-- form --}}
                        <form class="log-in-form" action="login" method="post">
                            @csrf
                            {{-- <div class="form-label-group mt-2">
                                <label for="login_email" style="color:dimgray;">Email address</label>
                                <input type="text" id="login_email" name="login_email" class="form-control"
                                    placeholder="Email address" autofocus value={{ old('login_email') }}>
                                @error('login_email')
                                    <span class="text-danger error_text create_account_form_lastname_error">
                                        {{ $message }}</span>
                                @enderror
                            </div> --}}
                            <div class="input-group mb-3">
                                <label for="" style="color:white;"><span
                                        class="input-group-text bg-primary fas fa-envelope"
                                        style="width: 43px; color:orange; font-weight: 500"></span></label>
                                <input type="text" id="login_email" name="login_email" class="form-control"
                                    placeholder="Email address" autofocus value={{ old('login_email') }}>
                                @error('login_email')
                                    <span class="text-danger error_text create_account_form_lastname_error">
                                        {{ $message }}</span>
                                @enderror
                            </div>


                            {{-- <div class="form-label-group mt-2">
                                <label for="login_password" style="color:dimgray;">Password</label>
                                <input type="password" id="login_password" name="login_password" class="form-control"
                                    placeholder="Password">
                                @error('login_password')
                                    <span
                                        class="text-danger error_text create_account_form_lastname_error">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="input-group mb-3">
                                <label for="" style="color:white;"><span class="input-group-text bg-primary"
                                        style="width: 43px; color:white;">🔑</span></label>

                                        <input type="password" id="login_password" name="login_password" class="form-control" 
                                        placeholder="Password">
                                       
                                    @error('login_password')
                                        <span
                                            class="text-danger error_text create_account_form_lastname_error">{{ $message }}</span>
                                    @enderror
                                   

                                <input type="password" id="login_password" name="login_password" class="form-control"
                                    placeholder="Password">

                                @error('login_password')
                                    <span
                                        class="text-danger error_text create_account_form_lastname_error">{{ $message }}</span>
                                @enderror
                                <span class="" style="position: fixed; top: 435px; left: 950px;"><i
                                        class=" text-dark" aria-hidden="true" id="eye" onclick="toggle()"
                                        style="cursor: default">Show Password</span></i>

                            </div>
                            <span class=""><i class=" text-dark" aria-hidden="true" id="eye" onclick="toggle()" style="cursor: default">Show Password</span></i>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase mt-3" id="loginBtn"
                                type="submit">Log in</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var state = false;

        function toggle() {
            if (state) {
                document.getElementById(
                    'login_password'
                ).setAttribute("type", "password");
                state = false;
                console.log(check)
            } else {
                document.getElementById(
                    'login_password'
                ).setAttribute("type", "text");
                state = true;
            }
        }
    </script>

</body>

</html>
