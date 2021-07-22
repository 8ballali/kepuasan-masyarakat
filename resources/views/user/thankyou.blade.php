<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Thank You</title>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class=content>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <h1>Thank you !</h1>
                <p>Kami akan terus meningkatkan pelayanan kami </p>
                <br>
                <a class="go-home" href="{{url('/')}}" role="button" style="text-decoration: none">Kembali ke Beranda</a>
            </div>
        </div>
    </div>



    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
</body>

</html>
