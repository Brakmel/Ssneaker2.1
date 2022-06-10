<?php
 $conexion=mysqli_connect("localhost","root","","bdssneaker");
 session_start();
  if($_SESSION['id_rol']!=1){
    header("location:../crud_inicio_1/pyme.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/pyme.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
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
          <h4>Bienvenid@<p><?php echo $mostrar ['nombre_pyme']?></p></h4>
          <hr>
    <nav>
        <div class="contenedor_navegacion">
        <a class="btn btn-outline-secondary" href="../crud_pyme_listado/listado.php">🔒Perfil🔒</a>
                <a class="btn btn-outline-secondary" href="../crud_pyme_listado/listado_zapatila.php">📈Zapatillas Publicadas📈</a>
                <a class="btn btn-outline-secondary" href="../crud_inicio_1/addzap.php">🎰subir Zapatilla🎰</a>
                <a class="btn btn-outline-secondary" href="../crud_cerrarsesion/cerrarsesion.php">🔓Cerrar Session🔓</a>
        </div>
    </nav>
</div>
        <?php } ?>

<main>  
  <form action="subir.php" method="post" enctype="multipart/form-data">
        <div class="formulario">
        <input type="text" name="nombre_zapatilla" placeholder="nombre tilla"><br>
        <input type="text" name="descripcion" placeholder="descripcion"><br> 
            <select name="id_usuario">
            <option value="">Pyme</option>
            <?php
            $sql= "SELECT * from usuario";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
                if ($mostrar['id_rol']==2){
                echo "<option value='".$mostrar['id_usuarios']."'>".$mostrar['nombre_pyme']."</option>";
            }}
            ?>
         </select><br>

            <input class="img" name="foto_zapatilla" type="file" name="attachment" accept=".jpg, .png, .jpeg" value="" required><br>
            <div class="caja registro">
                <button class="koko">Registrar</button>
            </div>
        </div>
    </form>
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