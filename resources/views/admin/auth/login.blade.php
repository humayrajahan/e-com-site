<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Login</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/admin-assets')}}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/admin-assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('/admin-assets/css/font-awesome.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('/admin-assets/css/style.css') }}">

    <script src="{{asset('/admin-assets')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('/admin-assets')}}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="account-page">

<!-- Main Wrapper -->
<div class="main-wrapper">
    <div class="account-content">

        <div class="container">

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Login</h3>

                    <!-- Account Form -->
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Password</label>
                                </div>
                            </div>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Login</button>
                        </div>
                    </form>
                    <!-- Account Form -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{ asset('/admin-assets/js/jquery-3.2.1.min.js') }} "></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('/admin-assets/js/popper.min.js') }} "></script>
<script src="{{ asset('/admin-assets/js/bootstrap.min.js') }} "></script>

<!-- Custom JS -->
<script src="{{ asset('/admin-assets/js/app.js') }} "></script>

</body>
</html>
