@extends('layouts.plantilla')
@section('title', 'skill')

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

                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-user-check"></i> Conocimientos</a>
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
    <!--Conocimientos-->

    <div class="row mt-4">
        <div class="col-sm-12">
            <span class="titles-page"><h3>Algunos Conocimientos</h3></span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <hr>
        </div>
    </div>

    <div class="row ">

            <div class="col-12 col-sm-3 imgconoci">
                <img src="images/angular.png" alt="icon angular">
            </div>
            <div class="col-12 col-sm-3 imgconoci">
                <img src="images/angularjs.png" alt="icon angularjs">
            </div>
            <div class="col-12 col-sm-3 imgconoci">
                <img src="images/django.png" alt="icon django">
            </div>
            <div class="col-12 col-sm-3 imgconoci">
                <img src="images/laravel.png" alt="icon laravel">
            </div>
        
    </div>

    <div class="row ">

        
        <div class="col-12 col-sm-3 imgconoci">
            <img src="images/node.png" alt="icon node">
        </div>
        <div class="col-12 col-sm-3 imgconoci">
            <img src="images/mongodb.png" alt="icon mongodb">
        </div>
        <div class="col-12 col-sm-3 imgconoci">
            <img src="images/mysql.png" alt="icon mysql">
        </div>
        <div class="col-12 col-sm-3 imgconoci">
            <img src="images/bootstrap.png" alt="icon bootstrap">
        </div>
    
    </div>

    <div class="row ">
        
        
        <div class="col-12 col-sm-3 imgconoci">
            <img src="images/java.png" alt="icon java">
        </div>
        <div class="col-12 col-sm-3 imgconoci">
            <img src="images/cplusplus.png" alt="icon cplusplus">
        </div>
        <div class="col-12 col-sm-3 imgconoci">
            <img src="images/tensorflow.png" alt="icon tensorflow">
        </div>
        <div class="col-12 col-sm-3 imgconoci">
        </div>
    
    </div>
@endsection