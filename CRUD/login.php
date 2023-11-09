<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ingresar</title>
</head>

<body>
    <header>
        <div class="title">
            <h1>Taller Backend</h1>
        </div>
        <ul class="nav justify-content-center">
        <li class="nav-item">
                <a class="nav-link" href="../Ejer1.php">Ejercicio 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Ejer2.php">Ejercicio 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Ejer3.php">Ejercicio 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Ejer4.php">Ejercicio 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Ejer5.php">Ejercicio 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">CRUD</a>
            </li>
        </ul>
    </header>

    <body>
       
                <form id="loginform" action="validar.php" method="post">
                    <h5 >Ingresar</h5>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Nombre de Usuario</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword" name="contraseña" required>
                    </div>
                    
                    <button type="button" class="btn btn-danger" value="Ingresar"><input id="inputlogin" type="submit" value="Ingresar"></button>
                    
                </form>
            
    </body>

</html>