@extends('layouts.main')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 hero-text">
                <h1>{{ $aboutMe->job }}</h1>
                <h6>Hi, i'm <b>{{ $aboutMe->name }}</b>. {!! $aboutMe->short_description !!}</h6>
                <div class="hero-contact">
                    <a href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="bi bi-github"></i>
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
                <h4>{!! $aboutMe->short_description !!}</h4>
                <p>{{ $aboutMe->description }}</p>
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
            @foreach ($projects as $project) 
            <div class="col-12 project-item">
                <div class="project card shadow">
                    <div class="row">
                        <div class="col-lg-9 col-sm-9 card-img">
                            <img src="img/project/{{ $project->image }}" alt="project pemilos">
                        </div>
                        <div class="col-lg-3 col-sm-3 card-body text-center">
                            <h5>{{ $project->name }}</h5>
                            <p>{{ $project->description }}</p>
                            <h6>{{ $project->tech_stack }}</h6>
                            <div class="link">
                                <a href="{{ $project->github_link }}" target="_blank">
                                    Code <i class="bi bi-github"></i>
                                </a>
                                <a href="{{ $project->demo_link }}" target="_blank">
                                    Demo <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                    @foreach ($contacts as $contact)
                    <div class="col">
                        <a href="{{ $contact->link }}" target="_blank">
                            {{-- <img src="img/contact/{{ $contact->image }}" alt="{{ $contact->platform }}"> --}}
                            {!! $contact->image !!}
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection