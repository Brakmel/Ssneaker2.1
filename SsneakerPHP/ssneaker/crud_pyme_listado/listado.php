<?php
 $conexion=mysqli_connect("localhost","root","","bdssneaker");
 session_start();
  if($_SESSION['id_rol']!=2){
    header("location:../crud_inicio_1/admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/pyme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $ses = $_SESSION['correo'];;
        $consulta = "SELECT * FROM usuario where correo = '".$ses."'";
        $resultado = mysqli_query($conexion, $consulta);   
        while($mostrar=mysqli_fetch_array($resultado)){
        ?>    
  
    <div class="contenedor_bienvenidad">
          <div class="contenedor_foto">
          <img src="img/logo.png" alt="" srcset="">
          </div>
          <h4>Mi Perfil</h4>
          <hr>
        <nav>
            <div class="contenedor_navegacion">
            <a class="btn btn-outline-secondary" href="../crud_inicio_1/pyme.php">Inicio🏛</a>
                <a class="btn btn-outline-secondary" href="../crud_pyme_listado/listado.php">Perfil🔒</a>
                <a class="btn btn-outline-secondary" href="../crud_pyme_listado/listado_zapatila.php">Zapatillas Publicadas📈</a>
                <a class="btn btn-outline-secondary" href="../crud_inicio_1/addzap.php">subir Zapatilla🎰</a>
                <a class="btn btn-outline-secondary" href="../crud_cerrarsesion/cerrarsesion.php">Cerrar Session🔓</a>
            
            </div>
        </nav>
</div>
        <?php } ?>
<main>
            
        <?php
        $ses = $_SESSION['correo'];;
        $consulta = "SELECT * FROM usuario where correo = '".$ses."'";
        $resultado = mysqli_query($conexion, $consulta);   
        while($mostrar=mysqli_fetch_array($resultado)){
        ?>    

  <div class="contenedorInformacion">
        <div class="cotenedorFoto">
            <img src="img/usuario.png" alt="" srcset="">
            <h4 class="apodo"><?php echo $mostrar ['nombre_pyme']?></h4>
        </div>
        <hr>

        <h4>Correo: <?php echo $mostrar ['correo']?></h4>
        <h4>Rut: <?php echo $mostrar ['rut']?></h4>
        <h4>Telefono: <?php echo $mostrar ['telefono']?></h4>
        <h4>Direccion: <?php echo $mostrar ['direccion']?></h4>
        <div class="boton">
        <a class="btn btn-danger" href="../crud_modificar/modificarperfil.php">Editar</a>
        </div>
    </div>
        <?php } ?>

        </main>

        <footer>
        <div class="empresa">
            <h5>Empresa</h5>
            <li> Contactanos </li>
            <li> Nosotros </li>
        </div>
            <div class="caja_redesSociales">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
            <hr>
            <div class="copyright" align="center">
<div class="contenedorcopy">
<script>
    document.write('&copy;' );
    document.write(' 2022 - ');
    document.write(new Date().getFullYear());
    document.write(' ssneaker.cl - All Rights Reserved.');
    document.write('<br/>Last Updated : ');
    document.write(document.lastModified);
  </script>
</div>

    </div>


</footer>
    <script src="https://kit.fontawesome.com/d7f2da5aa7.js" crossorigin="anonymous"></script>
</body>
</html>