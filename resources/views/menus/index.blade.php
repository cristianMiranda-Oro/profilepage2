@extends('layouts.plantilla')
@section('title', 'resume')

@section('navbar')
<div class="row mt-4">

    <div class="col-sm-12">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-id-card-alt"></i>Resumen <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo(url("/proyectos"))?>"><i class="fas fa-project-diagram"></i>Proyectos</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo(url("/conocimientos"))?>"><i class="fas fa-user-check"></i> Conocimientos</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo(url("/educacion"))?>"><i class="fas fa-university"></i> Educación</a>
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
    <!-- Resumen -->
    <div class="row mt-4">
        <div class="col-sm-12">
            <span class="titles-page"><h3>Resumen</h3></span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <hr>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-12">
            <p class="resume-cv">
            Ingeniero Electrónico y Programador de la Universidad Industrial de Santander, se me facilita codificar  
            en cualquier lenguaje de programación: JavaScript/TypeScriptC, SQL, Jquery, C++, Java, Python, PHP, etc.
            Durante mi carrera me desempeñe muy bien en el área de diseño en sistemas digitales, 
            control y señales, programación en microcontroladores, PLC, FPGA, etc.
            Capacidad de adaptación, creatividad, trabajo en equipo, análisis de resultados 
            y aprendizaje a nuevos entornos. Me gusta aprender cosas nuevas y poner
            en práctica mis conocimientos y experiencias para resolver problemas reales
            en el entorno.</p>
        </div>
    </div>
@endsection