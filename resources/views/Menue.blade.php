<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashbord</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylesMenu.css')}}">
    <script src="{{asset('https://kit.fontawesome.com/b99e675b6e.js')}}"></script>
</head>

<body>

    <!-- Debut menu -->
    <div class="wrapper">
        <div class="sidebar">
            <div class="login-card-logo">
                <a href="http://127.0.0.1:8000/"><img src="{{asset('image/Capture-removebg-preview.png')}}"
                        alt="logo"></a>
            </div>
            <ul>
                <li><a href="{{asset('/dashboard')}}" style="text-decoration:none;"><i class="fas fa-home"></i>Nombre de
                        Candidat par Formation</a></li>
                <li><a href="{{asset('/Formation_Par_Referentiel')}}" style="text-decoration:none;"><i
                            class="fas fa-address-card"></i>Nombre de Formation par referentiel</a>
                </li>
                <li><a href="http://127.0.0.1:8000/gestion" style="text-decoration:none;"><i
                            class="fas fa-project-diagram"></i>Gestion</a></li>
                <li><a href="/candidats_par_sexe" style="text-decoration:none;"><i
                            class="fas fa-project-diagram"></i>Repartition par
                        Sexe</a></li>
                <li><a href="http://127.0.0.1:8000/fortype" style="text-decoration:none;"><i class="fas fa-blog"></i>Repartition Formation par type</a>
                </li>
                <li><a href="/Tranche_age" style="text-decoration:none;"><i class="fas fa-address-book"></i>Graphe
                        Tranche
                        d'age</a></li>
                <li><a href="http://127.0.0.1:8000/statistformation" style="text-decoration:none;"><i class="fas fa-map-pin"></i>Statisque des Formations</a>
                </li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="main_content">
            <div class="header">Dashbord</div>
            <div class="info">