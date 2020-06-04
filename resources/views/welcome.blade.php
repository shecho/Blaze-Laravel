<!-- Nos disculpamos por los comentarios inncesarios en este proyecto. 
Sabemos e antemano que son malas practicas pero los hemos agregado por motivos academicos y porque nos lo han solicitado nuestros evaluadores

-->


<!-- Esta el la vista de inio de la aplicacion aqui estan todas las seciones y la barra de navegacion -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta      name="viewport"
      conet="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Blaze Barber Landing Page</title>
    <!-- boostrap -->
    <!-- Bootstrap core de CSS -->
    <!-- <link href="/../bootstrap/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- fuentes -->


    <!-- Fuentes de google -->
    <link
      href="/../fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Kaushan+Script"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />

    <!-- css personalizados -->
    <link href="/../css/agency.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"
          >Big Boy Blaze</a
        >
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services"
                >Servicios</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"
                >Productos</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Equipo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a>
            </li>
            <div class="login-button">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" >Panel de Control </a>
                    @else
                        <a href="{{ route('login') }}"class="btn btn-primary">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"class="btn btn-primary">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif


            </div>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">

          <div class="intro-lead-in">Bienvenido a Big Boy Blaze!</div>
          <div class="intro-heading text-uppercase">Agenda tu cita</div>

          <button  type="button" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" data-toggle="modal" data-target="#create-date" data-whatever="@mdo">Agendar Cita</button> 

        

          {{--Modal crear cita  --}}
          <!-- Modal para crear una cita -->
          
          <div class="modal fade" id="create-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
              <h5 class="modal-title text-dark" id="ModalLabel">Agendar Cita</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                  @csrf
                    <input type="hidden" value="{{ csrf_token() }}" id="token"/>
                    <div class="form-group">
                      {{-- <label for="recipient-name" class="col-form-label text-dark" place>Nombre Completo</label> --}}
                      <input placeholder="Nombre Completo" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      {{-- <label  for="message-text" class="col-form-label text-dark">Telefono</label> --}}
                      <div class="form-group">
                      <input placeholder="Telefono" type="number"  class="form-control" id="message-text">
                    </div>
                    <div class="form-group">
                      {{-- <label for="message-text" class="col-form-label text-dark">Day</label> --}}
                      <input min="2020-04-17" max="2020-04-29" type="date"  class="form-control" id="date-day">
                    </div>
                      {{-- <label for="message-text" class="col-form-label text-dark">Time</label> --}}
                      <div class="form-group">
                        <select class="form-control" name="time" id="date-time">
                          <option value="9">9 am</option>
                          <option value="10">10 am</option>
                          <option value="11">11 am</option>
                          <option value="12">12 am</option>
                          
                          <option value="2">2 pm</option>
                          <option value="3">3 pm</option>
                          <option value="4">4 pm</option>
                          <option value="5">5 pm</option>
                        </select>
                        {{-- <label for="message-text" class="col-form-label text-dark">Barber</label> --}}
                        {{-- <input placeholder="Barber" type="text"  class="form-control" id="message-text"> --}}
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="time" id="barber">
                        @foreach($barberos as $barber)
                          <option value="{{ $barber->barberName }}">{{ $barber->barberName }}</option>
                        @endforeach
              
                          <!-- <option value="1">Barbero 1</option>
                          <option value="2">Barbero 2</option>
                          <option value="3">Barbero 3</option> -->
                        </select>
                        {{-- <label for="message-text" class="col-form-label text-dark">Barber</label> --}}
                        {{-- <input placeholder="Barber" type="text"  class="form-control" id="message-text"> --}}
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="time" id="product">
                         @foreach($servicios as $servicio)
                          <option value="{{ $servicio->serviceName }}">{{ $servicio->serviceName }}</option>
                         @endforeach
                            <!-- <option value="1">Corte</option>
                                 <option value="2">Barba</option>
                                <option value="3">Corte y Barba</option> -->
                        </select>
                     
                      </div>
                      <div class="form-group" id="modal-response">

                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">

                
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button id="confirm-date" type="button" class="btn btn-primary"> Confirmar</button>

                  <div class="">
                  <a target="blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
              
                    <i class="fab 	fa-whatsapp fa-stack-1xa text-success"></i>
                  </a>
                </div>
                  
                </div>
              </div>
            </div>
          </div>
          

        </div>
        <!-- cierre del modal -->

       




        <!-- Derechos de uso de la imagen -->
        <div clas="">Photo by Nick Demou from Pexels</div>
      </div>
    </header>
    <!-- Servicios  -->
    <section class="page-section" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Servicios</h2>
            <h3 class="section-subheading text-muted">
              Lorem ipsum dolor sit amet consectetur.
            </h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
                  <i class="fas fa-circle fa-stack-2x text-secundary"></i>
              <i class="fas fa-cut fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Cortes</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-secundary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Productos de belleza y cuidado</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-secundary"></i>
              <i class="fas fa-gamepad fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Entretenimiento y mas</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Grid de lportafoilio-->
    <section class="bg-light page-section" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Productos</h2>
            <h3 class="section-subheading text-muted">
              Belleza y cuidado
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a
              class="portfolio-link"
              data-toggle="modal"
              href="#portfolioModal1"
            >
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img
                class="img-fluid"
                src="img/portfolio/01-thumbnail.jpg"
                alt=""
              />
            </a>
            <div class="portfolio-caption">
              <h4>Pomadas</h4>
              <p class="text-muted">A base de agua </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a
              class="portfolio-link"
              data-toggle="modal"
              href="#portfolioModal2"
            >
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img
                class="img-fluid"
                src="img/portfolio/02-thumbnail.jpg"
                alt=""
              />
            </a>
            <div class="portfolio-caption">
              <h4>Tratamientos para la barba</h4>
              <p class="text-muted">Desarrollo y crecimiento</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a
              class="portfolio-link"
              data-toggle="modal"
              href="#portfolioModal3"
            >
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img
                class="img-fluid"
                src="img/portfolio/03-thumbnail.jpg"
                alt=""
              />
            </a>
            <div class="portfolio-caption">
              <h4>Tinturas</h4>
              <p class="text-muted">Gran gama de colores</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a
              class="portfolio-link"
              data-toggle="modal"
              href="#portfolioModal4"
            >
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img
                class="img-fluid"
                src="img/portfolio/04-thumbnail.jpg"
                alt=""
              />
            </a>
            <div class="portfolio-caption">
              <h4>Herrammientas profesionales</h4>
              <p class="text-muted">Ecuantra aqui lo que necesitas para tu barberia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a
              class="portfolio-link"
              data-toggle="modal"
              href="#portfolioModal5"
            >
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img
                class="img-fluid"
                src="img/portfolio/05-thumbnail.jpg"
                alt=""
              />
            </a>
            <div class="portfolio-caption">
              <h4>Vaporizadores</h4>
              <p class="text-muted">Difectes marcaas, tipos y propositos</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a
              class="portfolio-link"
              data-toggle="modal"
              href="#portfolioModal6"
            >
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img
                class="img-fluid"
                src="img/portfolio/06-thumbnail.jpg"
                alt=""
              />
            </a>
            <div class="portfolio-caption">
              <h4>Puplementos</h4>
              <p class="text-muted">Ganancia muscular</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Grid Acerca de  -->
    <section class="page-section" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Acerca de</h2>
            <h3 class="section-subheading text-muted">
              Lorem ipsum dolor sit amet consectetur.
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img
                    class="rounded-circle img-fluid"
                    src="img/about/1.jpg"
                    alt=""
                  />
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Nuentros inicios</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Sunt ut voluptatum eius sapiente, totam reiciendis
                      temporibus qui quibusdam, recusandae sit vero unde, sed,
                      incidunt et ea quo dolore laudantium consectetur!
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img
                    class="rounded-circle img-fluid"
                    src="img/about/2.jpg"
                    alt=""
                  />
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Marzo 2011</h4>
                    <h4 class="subheading">Nuentra Creacion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Sunt ut voluptatum eius sapiente, totam reiciendis
                      temporibus qui quibusdam, recusandae sit vero unde, sed,
                      incidunt et ea quo dolore laudantium consectetur!
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img
                    class="rounded-circle img-fluid"
                    src="img/about/3.jpg"
                    alt=""
                  />
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Diciembre 2012</h4>
                <h4 class="subheading">Nueva sede</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Sunt ut voluptatum eius sapiente, totam reiciendis
                      temporibus qui quibusdam, recusandae sit vero unde, sed,
                      incidunt et ea quo dolore laudantium consectetur!
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img
                    class="rounded-circle img-fluid"
                    src="img/about/4.jpg"
                    alt=""
                  />
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Sunt ut voluptatum eius sapiente, totam reiciendis
                      temporibus qui quibusdam, recusandae sit vero unde, sed,
                      incidunt et ea quo dolore laudantium consectetur!
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Se parte <br />de nuestra <br />Historia!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Equipo de trabajo -->
    <section class="bg-light page-section" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nuestro genial equipo</h2>
            <h3 class="section-subheading text-muted">
             Profesionales destacados.
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/barbers/barber2.jpg" alt="" />
              <h4>Alejandro</h4>
              <p class="text-muted">Barba y estilos</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/barbers/barber1.jpg" alt="barber1 img" />
              <h4>Andres</h4>
              <p class="text-muted">Administrador y fundador</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/barbers/barber2.jpg" alt="" />
              <h4>Damian</h4>
              <p class="text-muted">Barbas y tintes</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              Este es solo un texto de ejemplo para los profresores que no saben ingles
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Cleintes no se implemnta por el momento, pues no hay testitoniales -->
    <!-- 
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Contactanos Se agrega  aunque esta fuera de la solcitud inical -->
    <section class="page-section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contactanos</h2>
            <h3 class="section-subheading text-muted">
              Dejanos saber que piensas
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                        class="form-control"
                        id="name"
                        type="text"
                        placeholder="Nombre Completo *"
                        required="required"
                        data-validation-required-message="Please enter your name."
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input
                      class="form-control"
                      id="email"
                      type="email"
                      placeholder="E-mail *"
                      required="required"
                      data-validation-required-message="Please enter your email address."
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input
                      class="form-control"
                      id="phone"
                      type="number"
                      placeholder="Telefono *"
                      required="required"
                      data-validation-required-message="Please enter your phone number."
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea
                      class="form-control"
                      id="message"
                      placeholder="Mensaje *"
                      required="required"
                      data-validation-required-message="Please enter a message."
                    ></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button
                    id="sendMessageButton"
                    class="btn btn-primary btn-xl text-uppercase"
                    type="submit"
                  >
                    Enviar Mensaje
                  </button>
                  <a target="blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20Quiesiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
             
                     <i class="fab 	fa-whatsapp fa-stack-1x fa-inverse"></i>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; COBAC CreationsCo 2020</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a  target="blank" href="https://twitter.com/explore">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a  target="blank" href="https://www.facebook.com/">
                      <i class="fab fa-facebook-f"></i>
                    </a>
              </li>
              <li  class="list-inline-item">
                <a target="blank" href="https://www.linkedin.com/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Politica de privacidad</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terminos de uso</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal del portafolio de servicios  -->
    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal1"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Pomadas</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="img/portfolio/01-full.jpg"
                    alt=""
                  />
                  <p>
                    Descripción del Poductoa Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>Fecha: Abril 2020</li>
                    <li>Cleinte: Andres</li>
                    <li>Categoria: diseno</li>
                  </ul>
                  <button
                    class="btn btn-primary"
                    data-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times"></i>
                    Close Product
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal2"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Barba</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="img/portfolio/02-full.jpg"
                    alt=""
                  />
                  <p>
                    Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                  <li>Fecha: Abril 2020</li>
                    <li>Cliente: Andres</li>
                    <li>Categoria: Design</li>
                  </ul>
                  <button
                    class="btn btn-primary"
                    data-dismiss="modal"
                    type="button">
                    <i class="fas fa-times"></i>
                    Cerrar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal3"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Tinturas</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="img/portfolio/03-full.jpg"
                    alt=""
                  />
                  <p>
                    Descripción del Poducto: Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>Fehca: Abril 2020</li>
                    <li>Cliente: Andres</li>
                    <li>Categoria: Design</li>
                  </ul>
                  <button
                    class="btn btn-primary"
                    data-dismiss="modal"
                    type="button">
                    <i class="fas fa-times"></i>
                    Cerrar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal4"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Herramientas</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="img/portfolio/04-full.jpg"
                    alt=""
                  />
                  <p>
                    Descripción del Poducto: Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                  <li>Fehca: Abril 2020</li>
                    <li>Cliente: Andres</li>
                    <li>Categoria:  Design</li>
                  </ul>
                  <button
                    class="btn btn-primary"
                    data-dismiss="modal"
                    type="button">
                    <i class="fas fa-times"></i>
                    Cerrar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal5"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Vaporizadores</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="img/portfolio/05-full.jpg"
                    alt=""
                  />
                  <p>
                    Descripción del Poducto: Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>Fecha: Abril 2020</li>
                    <li>Cliente: Andres</li>
                    <li>Categoria: Website Design</li>
                  </ul>
                  <button
                    class="btn btn-primary"
                    data-dismiss="modal"
                    type="button">
                  <i class="fas fa-times"></i>
                     Cerrar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal6"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Suplementos</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="img/portfolio/06-full.jpg"
                    alt=""
                  />
                  <p>
                    This proyects is been created for barber shop Blaze
                  </p>
                  <ul class="list-inline">
                    <li>Fehca: April 2020</li>
                    <li>Cliente: Andres</li>
                    <li>Categoria: Barbershop</li>
                  </ul>
                  <button
                    class="btn btn-primary"
                    data-dismiss="modal"
                    type="button">
                    <i class="fas fa-times"></i>
                    Cerrar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/../jquery/jquery.min.js"></script>
    <script src="/../bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/../jquery-easing/jquery.easing.min.js"></script>

    <!-- Evetos de la plantilla -->
    <!-- Contact form JavaScript -->
    <script src="/../js/jqBootstrapValidation.js"></script>
    <script src="/../js/contact_me.js"></script>
    <!-- <script src="{{asset('/agency.min.js')}}"></script> -->
    <!-- Scrips de la plantilla -->
    <!-- Custom scripts for this template -->
    <!-- <script src="/../js/date.js"></script> -->
    <script src="/../js/agency.min.js"></script>
    <!-- <script src="{{asset('/agency.min.js')}}"></script> -->
    <script src="{{asset('/js/date.js')}}"></script>
  </body>
</html>
