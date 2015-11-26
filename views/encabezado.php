
<section id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block-left">
                        <nav class="navbar navbar-default" role="navigation">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <div class="nav-logo">
                                <h2> SocialMusic</h2>
                                <!-- <a href="#"><img src="img/logo.png" alt="logo"></a> -->
                              </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                                <!-- <li><a href="http://localhost:8888/SocialMusic/index.php">Home <span class="sr-only">(current)</span></a></li> -->
                                <?php if(isset($_SESSION['usuario'])) { ?>
                                  <li><a href="http://localhost:8888/SocialMusic/views/inicioUsuario.php">Home<span class="sr-only">(current)</span></a></li>
                                  <li><a href="http://localhost:8888/SocialMusic/views/subirCancion.php">Subir canción</a></li>
                                  <li><a href="http://localhost:8888/SocialMusic/views/cerrar_sesion.php">Cerrar Sesión</a></li>
                                <?php } else { ?>
                                  <li><a href="http://localhost:8888/SocialMusic/index.php">Home<span class="sr-only">(current)</span></a></li>
                                  <li><a href="http://localhost:8888/SocialMusic/views/ingresar.php">Iniciar</a></li>
                                  <li><a href="http://localhost:8888/SocialMusic/views/registrar.php">Registrar</a></li>
                                <?php } ?>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-6 -->
            </div><!-- .row close -->
        </div>
    </section>