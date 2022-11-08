<?php include './header.php'; ?>
<?php include './conexion.php'; ?>


<?php 
$conexion = conexion();

$sql = "SELECT * FROM t_animales";

$result = mysqli_query($conexion, $sql);
?>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>comida</th>
                <th>region</th>
        </thead>
        <tbody>
            <?php while( $ver = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $ver['id'];?></td>
                    <td><?php echo $ver['nombre'];?></td>
                    <td><?php echo $ver['comida'];?></td>
                    <td><?php echo $ver['region'];?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
    </table>

<?php include "./footer.php";?> 