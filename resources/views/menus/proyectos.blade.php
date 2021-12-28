@extends('layouts.plantilla')
@section('title', 'proyect')

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

                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-project-diagram"></i>Proyectos</a>
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
    
    <!--Proyectos-->
    <div class="row mt-4">
        <div class="col-sm-12">
            <span class="titles-page"><h3>Algunos proyectos recientes</h3></span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-check-circle fa-lg" style="color:blue;"></i> <span class="titles-proyectos">Este sitio fue realizado con Laravel</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <i class="fas fa-check-circle fa-lg " style="color:blue;"></i> <span class="titles-proyectos">Publicación artículos científico (papper)
                <a href="https://drive.google.com/file/d/1MykCjQQG4ifGb6hPKs48K_M5_DNumE-N/view?usp=sharing" target=”_blank” >Ver articulo</a></span>
        </div>
    </div>

    <div class="row mt-3">

        <div class="col-12 col-sm-4">
            <div class="card">
            <div class="cardimage">
                <img class="card-img-top" src="images/agendamedical.png"  alt="imagen del proyecto">
            </div>
            <div class="card-body">
                <h5 class="card-title">Medical Agenda</h5>
                <p class="card-text">Fue realizada con Angular, Angular Materials, MongoDB, NodeJS-Express</p>
                <a href="https://medicalagenda.herokuapp.com/cita" class="btn btn-primary" target=”_blank”>Ver proyecto</a>
            </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="card">
            <div class="cardimage" style="background-color: rgba(0, 128, 0, 0.712);">
                <img class="card-img-top" src="images/unmejorplaneta.png" alt="imagen del proyecto">
            </div>
            <div class="card-body">
                <h5 class="card-title">Un mundo Mejor</h5>
                <p class="card-text">Fue realizado con Django, MySQL y Bootstrap</p>
                <a href="http://cristian.pythonanywhere.com/" class="btn btn-primary" target=”_blank”>Ver proyecto</a>
            </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="card">
                <div class="cardimage">
                    <img class="card-img-top" src="https://cdn2.hubspot.net/hubfs/3873528/FACIAL-RECOGNITION-compressor.png" alt="imagen de referencia">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Libreria Deep Learning</h5>
                    <p class="card-text">Fue realizada en lenguaje C/C++, con el fin de implementar redes 
                        neuronales artificiales sobre microcontroladores</p>
                    <a href="https://github.com/cristianMiranda-Oro/libraryDeepLearningC" class="btn btn-primary" target=”_blank”>Ver Proyecto</a>
                </div>
            </div>
        </div>

    </div>

@endsection