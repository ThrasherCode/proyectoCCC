

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menu</title>
           <meta charset="utf-8">
        <meta name="viewport" content="width=device-width user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <!-- Optional theme -->
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
          <h1 class="titulo">Evaluación Docente</h1>
               <div class="cabecera">
         <center>
         <img src="../img/logo.png" style="max-width:200px;">
         </center>
        </div>

          <div class="container">
            <br>
            <header>

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="login.php" class="navbar-brand"> <span class="glyphicon glyphicon-home"></span> Inicio</a>
                        </div> 

                        <div class="collapse navbar-collapse" id="navbar-1">
                            <ul class="nav navbar-nav">


                                <li class="dropdown">
                                    <a href="#" class="dropdawn-toggle" data-toggle="dropdown" role="button">Docente<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href=""><span class="glyphicon glyphicon-cog"></span>&nbsp;Administrar</a></li>
                                       
                                    </ul>
                                </li>  

                                <li class="dropdown">
                                    <a href="#" class="dropdawn-toggle" data-toggle="dropdown" role="button">Nivel<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Administrar</a></li>
                                    
                                    </ul>
                                </li>  

                                <li class="dropdown">
                                    <a href="#" class="dropdawn-toggle" data-toggle="dropdown" role="button">Preguntas<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<%=request.getContextPath()%>/ServletConsultarArea">Administrar</a></li>
                                       
                                    </ul>
                                </li>  


                                <li class="dropdown">
                                    <a href="#" class="dropdawn-toggle" data-toggle="dropdown" role="button">Encuesta<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Administrar</a></li>
                         
                                    </ul>
                                </li>  


                                <li class="dropdown">
                                    <a href="#" class="dropdawn-toggle" data-toggle="dropdown" role="button">Salir<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Salir</a></li>
                       
                                    </ul>
                                </li>  

                            </ul>

                        </div>

                    </div>


                </nav>
            </header>
        </div>

         <script src="http://code.jquery.com/jquery-latest.js"></script>

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </body>
</html>
