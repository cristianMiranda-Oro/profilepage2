<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/v4-shims.css">

    <!--Bootstrap social-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">

    <!--custom css-->
    <link rel="stylesheet" href="css/style_base.css">

</head>
<body>

    <div class="container">
        <div class="row m-0 mt-5">

            <div class="col-sm-8">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>CRISTIAN JOHAN MIRANDA OROSTEGUI</h1>
                            <h4>Programador / Ingeniero Electronico</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <i class="fa fa-envelope fa-lg"></i> <a href="mailto:cristian-m-o@hotmail.com">cristian-m-o@hotmail.com</a>
                        </div>
                        <div class="col-sm-5">
                            <i class="fa fa-phone fa-lg"></i> <a href="tel:+57 3046708844">+57 3046708844</a>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <i class="fas fa-map-marked-alt fa-lg"></i> Barrancabermeja, Colombia
                        </div>
                        <div class="col-sm-5">
                            <i class="fab fa-github fa-lg"></i><a href="https://github.com/cristianMiranda-Oro">GitHub</a>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <i class="fab fa-linkedin fa-lg"></i><a href="https://www.linkedin.com/in/cristian-miranda-0948a4189/">Linkedin</a>
                        </div>
                        <div class="col-sm-7">

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-1">
            </div>

            <div class="col-sm-3">

                <img src="images/cristian.png" width="150" alt="profile image">

            </div>

        </div>

        @yield('navbar')

        @yield('content')

    </div>

    <footer class="mt-5" style="padding-top:5%">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-github" href="https://github.com/cristianMiranda-Oro" target=”_blank”><i class="fab fa-github"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/cristian-miranda-0948a4189/" target=”_blank”><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="https://www.youtube.com/channel/UCjWFvoHD2iIQVNq7kDc9X0g" target=”_blank”><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="mailto:cristian-m-o@hotmail.com"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>

            </div>


            <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021 Cristian Miranda</p>
                </div>
           </div>

        </div>

    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>