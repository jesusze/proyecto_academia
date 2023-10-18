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
                <li><a href="inicio">Inicio</a></li>
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
                        <li><a href="#">Juzgados</a></li>
                        <li><a href="#">Sala Superior</a></li>
                        <li><a href="#">Sala Suprema</a></li>
                    </ul>
                </li>
                <li><a href="">Contáctenos</a></li>
                <li><a href="">Oficinas</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <body>
        <div class="slider">
            <div class="slide s1">
            </div>
            <div class="slide s2">
            </div>
            <div class="slide s3">
            </div>
        </div>

        <div class="button right">></div>
        <div class="button left"><</div>
        
        <ul class="pagination">
            <li></li>
            <li></li>
            <li></li>        
        </ul>

        <div class="linea"></div>
        <div class="title-text">
            GRUPO GAMAC
        </div>

        <hr>
        
        <div class="container-info">
            <div class="container-text-info">
                <div class="text-title">
                    <h3>Lorem, ipsum.</h3>
                </div>
                <div class="text-info">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur corporis amet
                        reiciendis quisquam explicabo Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Tenetur corporis amet reiciendis quisquam explicabo Tenetur corporis amet
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur corporis amet 
                        reiciendis quisquam explicabo Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Tenetur corporis amet reiciendis quisquam explicabo
                    </p>
                </div>
            </div>
            <div class="container-img-info">
                <div class="image-info">
                    <img src={{asset('img/graduados.jpeg')}}" alt="Imagen referente">
                </div>
            </div>
        </div>

        
        <div id="button-up">
            <i class="fas fa-chevron-up"></i>
        </div>

        <script src="{{asset('js/funciones.js')}}"></script>
    </body>
    
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="inicio">
                        <img src="{{asset('img/Logo.png')}}" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
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
            <small>&copy; 2021 <b>SLee Dw</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</html>