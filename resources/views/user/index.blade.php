<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

    <title>KEPUASAN MASYARAKAT</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <div class="container text-center">
            <p class="lead">
                <h2>

                    <br> Bagaimana Pelayanan Kami ?
                </h2>
            </p>
        </div>
    </div>

    <style type="text/css">
        .box {
            padding: 30px 40px;
            border-radius: 5px;
        }
    </style>
    <div class="container">
        <div class="alert alert-warning" role="alert">
            Perhatian!!! untuk memberikan penilaian/poling/suara silahkan klik Icon / Emoji
        </div>
        <div class="row text-center">
            @foreach ($answer as $a)
            <div class="col-md-3">
                <div class="bg-{{$a->bgcolor}} box text-white">
                    <div class="row">
                        <div class="col-md-5">
                            <h5>{{$a->answer}}</h5>
                        </div>
                        <div class="col-md-3">
                            <form action="{{url('/penilaian/store')}}" method="post" value="{{$a->id}}">
                                <a href="/penilaian/store" title="Jika Anda Merasa Sangat Puas dengan Pelayanan kami, Klik Icon ini!">
                                    <img src="{{ url('data_file').'/'.$a->file }}" style="width: 100px;">
                                </a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <!-- Akhir Row -->
    </div>

</body>

</html>
