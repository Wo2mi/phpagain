<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/template/css/animate.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">Wo</h1>
            </div>
            <h3>Welcome to Wo2mi</h3>
            <p>Perfectly designed and precisely prepared by a Racist persion.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            @include('backend.auth.alert')
            <form method="POST" class="m-t" role="form" action="{{route('auth.login')}}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Username" >
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/template/js/jquery-3.1.1.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>

</body>

</html>
