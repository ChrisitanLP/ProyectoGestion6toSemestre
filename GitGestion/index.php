<?php
    include_once("Patrones/Template/Plantilla.php");
    include_once("Patrones/Template/Index.php");
    $Pagina = new Index;
    $Pagina -> verificarSesionIndex(); 
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Presentacion</title>
        
        <link href="Recursos/Imagenes/Logos/blanco.ico" rel="icon">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        
        <!-- Customized Bootstrap Stylesheet -->
        <link href="Recursos/CSS/Style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $Pagina -> crearPagina();
        ?>                                               
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    </body>
</html>