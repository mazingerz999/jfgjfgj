<?php require_once( 'funciones.php' ); ?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<body class="jumbotron">
<h1>Borrar Libros</h1>
    <HR></HR>

    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <p> <label for='libro'>Seleccione un libro:  </label>
    <select name="libro" id="libro">
    <?php foreach (getLibros() as $key => $value) : ?>
    <option value="<?=$value['Numero']?>"><?=$value['Titulo']?></option>
    <?php endforeach ?>
    </select></p>
    <hr>
    <p><input type='submit' value='Eliminar Libro' id='enviar' name='enviar'> </p>
    </form>

<?php if (isset($_POST['enviar'])) { 

    if (delete_Libros($_POST['libro'])) {
        echo "Se elimino  el  libro correctamente";
        echo "<br>";
    }else{
        echo "Hubo un error";
        echo "<br>";
    }
 

 };  ?>
    <a href="libros_datos.php">Volver</a>


</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'
    integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN'
    crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'
    integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
    crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
    integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'
    crossorigin='anonymous'></script>
</html>