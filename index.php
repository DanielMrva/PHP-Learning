<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/materialize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="../js/script.js"></script>
        <script src="../js/materialize.js"></script>
        <title>Daniel Mrva Responces</title>
    </head>
    <body class="brown lighten-4">
        <header>
            <!-- Navigation Section, includeds a L-Align "Logo" and R-Align links -->
            <nav id="navigation" class="grey darken-2">
                <div class="nav-wrapper">

                    <!-- "Logos" appear differently based on display size -->
                    <a href="#" class="brand-logo left  hide-on-small-and-down DM">Daniel Mrva</a>
                    <a href="#" class="brand-logo left hide-on-med-and-up DM">DM</a>

                    <!-- Sidenav trigger -->
                    <a href="#" data-target='mobile-demo' class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                    <!-- Nav links -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#" data-item="PHP">PHP</a></li>
                        <li><a href="#" data-item="OOP">OOP</a></li>
                        <li><a href="#" data-item="JS">JavaScript</a></li>
                        <li><a href="#" data-item="MYSQL">MySQL</a></li>
                        <li><a href="#" data-item="CSS">CSS</a></li>
                    </ul>
                    <!-- SideNav -->
                    <ul class="sidenav" id='mobile-demo'>
                        <li><a href="#" data-item="PHP">PHP</a></li>
                        <li><a href="#" data-item="OOP">OOP</a></li>
                        <li><a href="#" data-item="JS">JavaScript</a></li>
                        <li><a href="#" data-item="MYSQL">MySQL</a></li>
                        <li><a href="#" data-item="CSS">CSS</a></li>
                    </ul>
                </div>
            </nav>

        </header>

        <main class="container">
            <section id="content" class="row">

                <!-- An H2 as target for error handling messages -->
                <h2 class="hide" id="error"></h2>
                <!-- Card to be displayed on initial load, hidden when any of the above links are clicked-->
                <div id="landing" class="col s12">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="../assets/me.jpg" alt="an image of the developer, a caucasian male in his late-30's smiling" class="responsive-img">
                            <span class="card-title">Daniel Mrva</span>
                        </div>
                        <div class="card-stacked">
                            <div class="card content">
                                <p>I am an aspiring web developer with a background in the arts, with a BFA from Illinois State University, MFA from Indiana University, and a full-stack web development certificate from the University of Denver (2022).
                                <br>
                                I am originally from Arizona, was raied in Illinois, and have lived in New York as well as Indiana.  I currently live and work in Colorado with my two sweet daughters and lovely wife.
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="https://danielmrva.github.io/DanielMrva_Portfolio_Reactionary/">Portfolio Link</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
        <footer id="footer">
                <!-- TODO: Add footer content -->
        </footer>
        
    </body>
</html>


