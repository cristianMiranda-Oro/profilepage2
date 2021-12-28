@extends('layouts.plantilla')
@section('title', 'education')

@section('navbar')
<div class="row mt-4">

    <div class="col-sm-12">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo(url("/"))?>"><i class="fas fa-id-card-alt"></i>Resumen <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo(url("/proyectos"))?>"><i class="fas fa-project-diagram"></i>Proyectos</a>
                  </li>

                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo(url("/conocimientos"))?>"><i class="fas fa-user-check"></i> Conocimientos</a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-university"></i> Educación</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="files/cv.pdf" target=”_blank”><i class="fas fa-file-download"></i> Descargar CV</a>
                  </li>

                </ul>

              </div>

        </nav>
    </div> 
</div>

@endsection

@section('content')
    <!--Educacion-->
    <div class="row mt-4">
        <div class="col-sm-12">
            <span class="titles-page"><h3>Educación</h3></span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <i class="fas fa-check-circle fa-lg" style="color:blue;"></i> <span class="titles-education">Ingeniero Electrónico</span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i> <span class="titles-university">Universidad Industrial de Santander</span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i><i class="fas fa-calendar-week fa-lg"></i> <span class="titles-university">Junio 2015 - Junio 2021</span>
            <div class="vercertificado"><a href="https://drive.google.com/file/d/1X5N6zMx6SNQOD_gtEonE5nZciy1uEERW/view?usp=sharing" class="btn btn-primary" target=”_blank”>Ver Certificado</a></div>
        </div>
        <div class="col-12 col-sm-6">
            <i class="fas fa-check-circle fa-lg" style="color:blue;" ></i> <span class="titles-education">Misión TIC-2022 (Programación)</span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i> <span class="titles-university">Universidad Industrial de Santander</span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i><i class="fas fa-calendar-week fa-lg"></i> <span class="titles-university">Enero 2021 - Diciembre 2021</span>
            <div class="vercertificado"><a href="https://drive.google.com/file/d/1kkxxCuqy83OdzvSmYENCgDRuRyMCTsDz/view?usp=sharing" class="btn btn-primary" target=”_blank”>Ver Certificado</a></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 col-sm-6">
            <i class="fas fa-check-circle fa-lg" style="color:blue;"></i><span class="titles-education">Specialization Web Apliations for Everybody</span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i> <span class="titles-university">Coursera - University of Michigan</span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i><i class="fas fa-calendar-week fa-lg"></i> <span class="titles-university">Enero 2021 - Octubre 2021</span>
            <div class="vercertificado"><a href="https://www.coursera.org/account/accomplishments/certificate/ZYDBXGLT9XCK" class="btn btn-primary" target=”_blank”>Ver Certificado</a></div>
        </div>
        <div class="col-12 col-sm-6">
            <i class="fas fa-check-circle fa-lg" style="color:blue;"></i> <span class="titles-education"> HTML, CSS, and JavaScript for web Developers </span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i> <span class="titles-university">Coursera - University of Johns Hopkins</span></br>
            <i class="fas fa-minus fa-lg" style="color:white;"></i><i class="fas fa-calendar-week fa-lg"></i> <span class="titles-university">Mayo 2021 - Junio 2021</span>
            <div class="vercertificado"><a href="https://www.coursera.org/account/accomplishments/certificate/K8CQFBLFR9NV" class="btn btn-primary" target=”_blank”>Ver Certificado</a></div>
        </div>
    </div>
@endsection