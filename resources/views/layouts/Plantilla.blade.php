<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Academia de tesis</title>
    </head>

    <header class="header">
        <nav class="nav">
            <div class="logo"><img src="{{asset('img/Logo.png')}}" alt="s"></div>
            <ul class="menu-horizontal">
                <li><a href="{{Route('/')}}">Inicio</a></li>
                <li>
                    <a href="#">Cursos</a>
                    <ul class="menu-vertical">
                        <li><a href="#">Bachilleres</a></li>
                        <li><a href="#">Estudiantes</a></li>
                        <li><a href="#">Egresados</a></li>
                        <li><a href="#">Abogados Junior</a></li>
                        <li><a href="#">Abogados con o sin experiencia</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Talleres</a>
                    <ul class="menu-vertical">
                        <li><a href="{{Route('juzgados')}}">Juzgados</a></li>
                        <li><a href="{{Route('sala-superior')}}">Sala Superior</a></li>
                        <li><a href="{{Route('sala-suprema')}}">Sala Suprema</a></li>
                    </ul>
                </li>
                <li><a href="">Contáctenos</a></li>
                <li><a href="">Oficinas</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <body>

        @yield('content')
        
        <div id="button-up">
            <i class="fas fa-chevron-up"></i>
        </div>
    
        <script src="{{asset('js/funciones.js')}}"></script>
        
    </body>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="{{Route('/')}}">
                        <img src="{{asset('img/Logo.png')}}" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>

            <div class="box">
                <h2>CURSOS</h2>
                <ul class="menu-vertical-footer">
                    <li><a href="#">Bachilleres</a></li>
                    <li><a href="#">Estudiantes</a></li>
                    <li><a href="#">Egresados</a></li>
                    <li><a href="#">Abogados Junior</a></li>
                    <li><a href="#">Abogados con o sin experiencia</a></li>
                </ul>
            </div>

            <div class="box">
                <h2>TALLERES</h2>
                <ul class="menu-vertical-footer">
                    <li><a href="{{Route('juzgados')}}">Juzgados</a></li>
                    <li><a href="{{Route('sala-superior')}}">Sala Superior</a></li>
                    <li><a href="{{Route('sala-suprema')}}">Sala Suprema</a></li>
                </ul>
            </div>

            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>GRUPO GAMAC</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</html>