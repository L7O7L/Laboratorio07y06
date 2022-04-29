<?php 
    include("database.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE ID='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ID" value="<?php echo $row['ID']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre del producto" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Serie" placeholder="Serie" value="<?php echo $row['Serie']  ?>">
                                <input type="text" class="form-control mb-3" name="Tipo" placeholder="Tipo" value="<?php echo $row['Tipo']  ?>">
                                <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca" value="<?php echo $row['Marca']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>