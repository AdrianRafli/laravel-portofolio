@extends('layouts.main')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 hero-text">
                <h1>Front-End Developer 👋🏻</h1>
                <h6>Hi, i'm <b>Adrian Maulana Rafli</b>. A Passionate Front-End <br>
                    Developer based in Semarang, Indonesia 📍</h6>
                <div class="hero-contact">
                    <a href="#">
                        <img src="img/linkedin.png" alt="linkedin">
                    </a>
                    <a href="#">
                        <img src="img/github.png" alt="github">
                    </a>
                </div>
                <div class="tech-stack">
                    <h6>Tech Stack &nbsp &nbsp|</h6>
                    <div class="tech">
                        <img src="img/html.png" alt="html">
                        <img src="img/css.png" alt="css">
                        <img src="img/js.png" alt="js">
                        <img src="img/bootstrap.png" alt="bootstrap">
                        <img src="img/laravel.png" alt="laravel">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 hero-img">
                <img src="img/rafli.png" class="img-rafli" alt="Foto Adrian Maulana Rafli">
            </div>
        </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 about-img">
                <img src="img/about.png" class="img-about" alt="Ilustration About">
            </div>
            <div class="col-lg-6 col-sm-12 about-text">
                <h5>About Me</h5>
                <h4>A Passionate Front-End Developer <br>
                    based in Semarang, Indonesia 📍</h4>
                <p>🎓 Computer Science student at Bina Nusantara University 
                    Semarang Campus with main interest in Front-End and Web 
                    Development. I am actively involved in various projects to expand
                    my understanding of user interface design and responsive web 
                    development 🧑🏻‍💻. I believe in the importance of collaboration and 
                    community in professional growth, and I am always open to new
                    opportunities and knowledge sharing. </p>
            </div>
        </div>
    </div>
  </section>

  <section class="projects" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-12 project-text">
                <h5>Projects</h5>
                <h4>Here are some of my projects that I have created <br>
                    and am currently working on 💻</h4>
            </div>
            <div class="col-12 project-item">
                <div class="project card shadow">
                    <div class="row">
                        <div class="col-lg-9 col-sm-9 card-img">
                            <img src="img/project/pemilos.jpeg" alt="project pemilos">
                        </div>
                        <div class="col-lg-3 col-sm-3 card-body text-center">
                            <h5>Pemilos</h5>
                            <p>website untuk pemilihan ketua
                                dan wakil osis untuk SMK N 8 
                                Semarang secara online</p>
                            <h6>PHP &nbsp MYSQL</h6>
                            <div class="link">
                                <a href="#">
                                    Code <img src="img/github.png" alt="github">
                                </a>
                                <a href="#">
                                    Demo <img src="img/opentab.png" alt="open tab">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 project-item">
                <div class="project card shadow">
                    <div class="row">
                        <div class="col-lg-9 col-sm-9 card-img">
                            <img src="img/project/tokoku.jpeg" alt="project pemilos">
                        </div>
                        <div class="col-lg-3 col-sm-3 card-body text-center">
                            <h5>Tokoku</h5>
                            <p>Website E-Commerce Sederhana
                                dengan fitur Registrasi, Login,  Search, Cart, dan Admin</p>
                            <h6>PHP &nbsp MYSQL</h6>
                            <div class="link">
                                <a href="#">
                                    Code <img src="img/github.png" alt="github">
                                </a>
                                <a href="#">
                                    Demo <img src="img/opentab.png" alt="open tab">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <h5>Contact</h5>
                <h4>Hit me up 🤚🏻 if you want to work together on a project <br> 
                    or we can be friends.</h4>
            </div>
            <div class="col-lg-12 col-sm-12 contact-icon text-center">
                <div class="row row-cols-3">
                    <div class="col">
                        <a href="#">
                            <img src="img/email.png" alt="email">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="col">
                            <img src="img/linkedin.png" alt="linkedin">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="col">
                            <img src="img/github.png" alt="github">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="col">
                            <img src="img/instagram.png" alt="instagram">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="col">
                            <img src="img/x.png" alt="X">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="col">
                            <img src="img/discord.png" alt="discord">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection