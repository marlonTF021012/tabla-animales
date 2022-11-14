<?php include './header.php'; ?>
<?php include './conexion.php'; ?>


<?php 
$conexion = conexion();

$sql = "SELECT * FROM t_animales";

$result = mysqli_query($conexion, $sql);
?>
    <center><h1 class="card-title" style="font-family: 'Alex Brush', cursive;">Lista De Animales</h1></center> 
   
    <table class="card" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>comida</th>
                <th>region</th>
                <th>editar</th>
                <th>eliminar</th>
        </thead>
        <tbody>
            <?php while( $ver = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $ver['id'];?></td>
                    <td><?php echo $ver['nombre'];?></td>
                    <td><?php echo $ver['comida'];?></td>
                    <td><?php echo $ver['region'];?></td>
                    <td>
                    <a href="./editar.php?idp=<?php echo $ver['id'];?>" class="btn-btn danger">
                           editar
                        </a>
                    </td>
                    <td>
                        <a href="./backend/eliminar.php?idp=<?php echo $ver['id'];?>" class="btn-btn danger">
                            eliminar
                        </a>
                    </td>
                </tr>
                <?php endwhile;?>.
            </tbody>
    </table>
    <center><a href="./agregar.php">agregar nuevo tipo de animal</a></center>

<?php include "./footer.php";?> 