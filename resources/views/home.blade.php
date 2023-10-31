<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: linear-gradient(rgba(85,37,130,0.6), rgba(0,212,255,0.6)), url('https://source.unsplash.com/random/1920x1080?technology');
            background-size: cover;
            overflow: hidden;
        }

        .navbar {
            background: linear-gradient(90deg, rgba(85,37,130,1) 0%, rgba(0,212,255,1) 100%);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            height: 10vh;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: white !important;
            transition: all 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, 0.8) !important;
            border-bottom: 2px solid white;
            padding-bottom: 5px;
        }

        .info-section {
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .name, .course {
            opacity: 0;
            transform: translateY(20px);
            visibility: hidden;
        }

        .name {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            animation: fadeInUp 1s 1.5s forwards;
        }

        .course {
            font-size: 24px;
            color: rgba(85,37,130,1);
            animation: fadeInUp 1s 2s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
                visibility: visible;
            }
        }

    </style>

    <title>Inicio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comunas.index') }}">Comunas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('departamentos.index') }}">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('municipios.index') }}">Municipios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="info-section">
        <div class="name animate__animated animate__fadeInUp">David Alejandro Nuñez Velasco</div>
        <div class="course animate__animated animate__fadeInUp">Curso: S5AN</div>
    </div>

    <!-- Optional JavaScript; Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
