<?php
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
    $sql = "SELECT * FROM t_animales WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $sql);

    $item= mysqli_fetch_array($resultado);
?>

<html>
<center><h1 class="card-title" style="font-family: 'Alex Brush', cursive;">Editar Animal</h1></center>
    <center>
        <form action="./backend/actualizar.php" method="post">
            <input type="text" name="id" value="<?php echo $id; ?>" hidden>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $item['nombre'] ?>">
            <br>
            <label for="comida">Comida</label>
            <input type="text" name="comida" id="comida" value="<?php echo $item['comida'] ?>">
            <br>
            <label for="region">region</label>
            <input type="text" name="region" id="region" value="<?php echo $item['region'] ?>">
            <br>
            <button style="background-color:blue ;">agregar</button>
            <br>
            <a href="./index.php" class="btn btn-danger">Cancelar</a>
        </form>
    </center>

</html>