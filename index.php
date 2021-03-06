<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/welcome.css">
    <title>Trivial</title>
</head>
<body>   
    <div class="container container-table">
        <div class="row vertical-center-row">
            <div class="col offset-lg-2 col-lg-8">
            <div class="text-center star-align">
                <div id="stars">
                <i class="fa fa-star fa-3x" aria-hidden="true"></i>
                <i class="fa fa-star fa-4x" aria-hidden="true"></i>
                <i class="fa fa-star fa-5x" aria-hidden="true"></i>
                <i class="fa fa-star fa-4x" aria-hidden="true"></i>
                <i class="fa fa-star fa-3x" aria-hidden="true"></i>
                </div>
            </div>
            <div class="alert alert-dismissible alert-info">
                <div class="col offset-lg-10 col-lg-2 text-center">
                <button class="btn btn-secondary control-buttons"><i class="fa fa-cog" aria-hidden="true"></i></button>
                <button class="btn btn-secondary control-buttons"><i class="fa fa-volume-up" aria-hidden="true"></i></button>
                </div>

                <div class="spacer"></div>

                <div class="col offset-lg-3 col-lg-6">
                <form action="questions.html" class="text-center" method="post">
                    <input type="text" class="form-control form-control-lg" placeholder="Nombre">
                    <div class="spacer"></div>
                    <input type="submit" class="btn btn-success btn-lg play-button" value="Jugar">
                    </form>
                </div>            
            </div>  
            </div>
        </div>
    </div>

    <script async src="js/trivial.js" onload="starAnimation()"></script>
</body>
</html>