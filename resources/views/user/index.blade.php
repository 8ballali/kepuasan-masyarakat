<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/aos.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>KEPUASAN MASYARAKAT</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <div class="container text-center">
            <p class="lead">
                <h2 class="animate__animated animate__fadeInDown">
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
        <div class="row text-center" data-aos="fade-up">
            @foreach ($answer as $a)
            <div class="col-md-3">
                <div class="bg-{{$a->bgcolor}} box text-white">
                    <div class="row">
                        <div class="col-md-5">
                            <h5>{{$a->answer}}</h5>
                        </div>
                        <div class="col-md-3">
                            <form action="{{url('penilaian/response')}}" method="POST" value="{{$a->id}}">
                                @csrf
                                <input type="hidden" name="answer_id" value="{{$a->id}}">
                                <input type="image" src="{{ url('data_file').'/'.$a->file }}" name="answer_id"
                                    style="width: 100px;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Akhir Row -->
    </div>
    <script src="{{url('assets/js/aos.js')}}"></script>
    <script>
        window.addEventListener('load', () => {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            })
        });

    </script>
</body>

</html>
