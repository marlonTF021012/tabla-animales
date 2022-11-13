<html>
<center><h1 class="card-title" style="font-family: 'Alex Brush', cursive;">Agegar Nuevo Animal</h1></center>
    <center>
        <form action="./backend/agregar.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="comida">Comida</label>
            <input type="text" name="comida" id="comida">
            <br>
            <label for="region">region</label>
            <input type="text" name="region" id="region">
            <br>
            <button style="background-color:blue ;">agregar</button>
            <br>
            <a href="./index.php" class="btn btn-danger">Cancelar</a>
        </form>
    </center>

</html>