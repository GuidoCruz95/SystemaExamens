<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Evaluaciones</title>
    <!--meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template"-->

   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/Mentor/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/Mentor/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/Mentor/css/imagehover.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/Mentor/css/style.css')}}">

</head>

<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a class="navbar-brand" href="index.html">EVA<span></span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#feature">Informacion</a></li>
                    <li><a href="#organisations">Evaluaciones</a></li>
                    <li><a href="#courses">Aulas</a></li>

                    <li><a href="{{ route('auth.login') }}" >Iniciar Sesi&oacute;n</a></li>
                    <!--li class="btn-trial"><a href="#footer">Free Trail</a></li-->
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog modal-sm">

            <!-- Modal content no 1-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center form-title">Login</h4>
                </div>
                <div class="modal-body padtrbl">

                    <div class="login-box-body">
                        <p class="login-box-msg">Inicia tu sesion</p>
                        <div class="form-group">
                            <form name="" id="loginForm">
                                <div class="form-group has-feedback">
                                    <!-- username -->
                                    <input class="form-control" placeholder="Nombre Usuario" id="loginid" type="text" autocomplete="off" />
                                    <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                                    <!---Alredy exists  ! -->
                                    <span class="fa fa-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <!-- password -->
                                    <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                                    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                                    <!---Alredy exists  ! -->
                                    <span class="fa fa-key form-control-feedback"></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox icheck">
                                            <label>
                                <input type="checkbox" id="loginrem" > Recordar
                              </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Inicia Sesion</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->
    <div class="banner">
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="banner-text text-center">
                        <div class="text-border">
                            <h2 class="text-dec">Evaluaciones En Linea</h2>
                        </div>
                        <div class="intro-para text-center quote">
                            <p class="big-text">Evaluaciones en linea y apoyo a estudiantes</p>
                            <p class="small-text"><br></p>
                            <a href="#feature" class="btn get-quote">INICIAR NAVEGACION</a>
                        </div>
                        <a href="#feature" class="mouse-hover">
                            <div class="mouse"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Banner-->
    <!--Feature-->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>CARACTERISTICAS DEL SISTEMA</h2>
                    <hr class="bottom-line">
                </div>
                <div class="feature-info">
                    <div class="fea">
                        <div class="col-md-4">
                            <div class="heading pull-right">
                                <h4>Examenes</h4>
                                <p>Los examnes los podra realizarlos en linea usted podra obtener los resultados al instante sin tener que estar haciedo los calculos ademas que el alumno podra ver los resultados de label prueba </p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="fa fa-edit"></i>
                            </div>
                        </div>
                    </div>
                    <div class="fea">
                        <div class="col-md-4">
                            <div class="heading pull-right">
                                <h4>Foros</h4>
                                <p>Tiene la posibilidad de crear foros para que los estudiantes y el docente interactuen sobre un tema que el docente elija
                                </p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="fa fa-commenting"></i>
                            </div>
                        </div>
                    </div>
                    <div class="fea">
                        <div class="col-md-4">
                            <div class="heading pull-right">
                                <h4>Ejercicios y otros</h4>
                                <p>Tine la posibilidad de poder poner ejercicios para los estudiantes practiquen .
                                </p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="fa fa-book"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ feature-->
    <!--Organisations-->
    <section id="organisations" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="orga-stru">
                            <h3>65%</h3>
                            <p>Examenes!!</p>
                            <i class="fa fa-male"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="orga-stru">
                            <h3>20%</h3>
                            <p>Exposiciones!!</p>
                            <i class="fa fa-male"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="orga-stru">
                            <h3>15%</h3>
                            <p>Tareas!!</p>
                            <i class="fa fa-male"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-info">
                        <hgroup>
                            <h3 class="det-txt">Asignacion de puntos como Examenes Tareas Exposiciones</h3>
                            <h4 class="sm-txt"></h4>
                        </hgroup>
                        <p class="det-p">Puede realizar asignacion de puntos a cada tarea evaluacion o exposicion que el docente defina </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Organisations-->

    <!--work-shop-->
    <section id="work-shop" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Evaluaciones</h2>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box text-center">
                        <div class="icon-box">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="icon-text">
                            <h4 class="ser-text">Examenes</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box text-center">
                        <div class="icon-box">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="icon-text">
                            <h4 class="ser-text">Repasos</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box text-center">
                        <div class="icon-box">
                            <i class="fa fa-pencil-square"></i>
                        </div>
                        <div class="icon-text">
                            <h4 class="ser-text">Examenes Sorpresa</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ work-shop-->

    <!--Courses-->
    <section id="courses" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Aulas</h2>

                    <hr class="bottom-line">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{URL::to('assets/Mentor/img/aula1.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h3>LABORATORIO</h3>

                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{URL::to('assets/Mentor/img/aula2.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h3>AULA EDIFICIO NUEVO</h3>

                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{URL::to('assets/Mentor/img/aula3.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h3>LABORATORIO</h3>

                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{URL::to('assets/Mentor/img/aula4.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h3>AULA 615</h3>

                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{URL::to('assets/Mentor/img/aula5.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h3>AULA 623</h3>

                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="{{URL::to('assets/Mentor/img/aula6.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h3>AULA EDIFICIO NUEVO</h3>

                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--/ Courses-->

    <!--Contact
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                    <hr class="bottom-line">
                </div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="col-md-6 col-sm-6 col-xs-12 left">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 right">
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                    
                        <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
                    </div>
                </form>

            </div>
        </div>
    </section>-->
    <!--/ Contact-->
    <!--Footer-->
    <footer id="footer" class="footer">
        <div class="container text-center">
            Cochabamba - Bolivia
            <div class="credits">
                <!--a href="https://bootstrapmade.com/">BootstrapMade.com</a-->
            </div>
        </div>
    </footer>
    <!--/ Footer-->

    <script src="{{URL::to('assets/Mentor/js/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets/Mentor/js/jquery.easing.min.js')}}"></script>
    <script src="{{URL::to('assets/Mentor/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets/Mentor/js/custom.js')}}"></script>
    <script src="{{URL::to('assets/Mentor/contactform/contactform.js')}}"></script>

</body>

</html>