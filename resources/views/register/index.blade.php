<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Page</title>

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- END STYLE --}}
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5">
                <div class="card-auth">
                    <h2 class="auth-title">Register</h2>
                    <form class="form">
                        <div class="row">
                            <div class="col-12 input-wrapper mb-3">
                                <label for="username">Username</label>
                                <input type="username" id="username" class="input" placeholder="Input username..">
                            </div>
                            <div class="col-12 input-wrapper mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="input" placeholder="Input email address..">
                            </div>
                            <div class="col-12 input-wrapper mb-3">
                                <label for="password">Password Account</label>
                                <input type="password" id="password" class="input" placeholder="Input password account..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex gap-2">
                                <button type="submit" class="button-primary w-100">Create an Account</button>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <p class="link-redirect">Already have an account? <a href="{{ route('login') }}">Login Account</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    {{-- SCRIPT --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @stack('js')
    {{-- END SCRIPT --}}
</body>
</html>