<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{asset('plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
</head>

<body>
    <canvas class="container carte col-md-4" style="height: 250px;" id="contain">
        <div class="row">
            <div class="col-md-3 image">
                <b class="logo-icon">

                    <img src="{{asset('IMAGES/esi.jpg')}}" alt="logo de esi" class="logoesi" width="60" />

                </b>
            </div>
            <div class="col-md-9 licence">
                <h3 class="licence fw-bold text-center mt-2" style="font-size: 13px;">LICENCE ANALYSE ET PROGRAMMATION</h3>
                <h3 class="texte text-danger fw-bold" style="font-size: 13px;">Carte d'étudiant &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; 2021-2022
                </h3>
            </div>
        </div>

        <div class="row element fw-bold fs-5 bg-info" style="margin-top: 10px;">
            <div class="col-md-2" style="height: 110px; width: 110px;">
                <b class="logo-icon">

                    <img src="{{asset('IMAGES/photos/'.$student->photo)}}" alt="logo de esi" class="logoesi" width="125" />

                </b>
            </div>
            <div class="etudiant col-md-3 ">
                <h6 style="font-size: 16px;" class="fw-bold">Etudiant(e):</h6>
                <h6 style="font-size: 16px;" class="fw-bold">Matricule:</h6>
                <h6 style="font-size: 16px;" class="fw-bold">Niveau:</h6>
                <h6 style="font-size: 16px;" class="fw-bold">Cycle:</h6>
            </div>

            <div class="col me-2">
                <h6 style="font-size: 16px;">{{ $student->nom }} &nbsp {{ $student->prenom }}</h6>
                <h6 style="font-size: 16px;">{{ $student -> matricule }}</h6>
                <h6 style="font-size: 16px;">{{ $student->niveau }} </h6>
                <h6 style="font-size: 16px;">{{ $student->cycle }} </h6>
            </div>
        </div>
        <div class="row mt-4">
            <span class="text-center fw-bold" style="font-size: 15px;">www.unb.esi.carteetudiant@gmail.com</span>
        </div>
        </div>

    </canvas>

    </div>
    <div class="row">
        <div class="col-md-12">
            <button onclick="downloadPDF()" class="fw-bold btn btn-primary">Carte</button>
        </div>

    </div>

   


   
</body>

</html>
