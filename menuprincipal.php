<!doctype html>
<html>
<head>
<title>CVXCONT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" href="stylesheets/github-dark.css">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap-theme.css" rel="stylesheet">
    <script src="bootstrap.js"></script>
    <script src="javascripts/respond.js"></script>
    <script src="jquery-1.12.4.min.js"></script>
    <link href="estilosvdugarte.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
</head>
  <body class="bodyblack">
    <?
    session_start();
    echo $_SESSION["USER"];
    session_destroy(); 
    ?>
  <div class="container-fluid">
      <!--PERSONAS-->    
               <div class="btn-group btn-group-justified">
               <button type="button" class="btn btn-primary"><a href="cxcregpers.php">REGISTRO DE PERSONAS</a></button>
               <button type="button" class="btn btn-primary"><a href="cxcregusr.php">REGISTRO DE USUARIOS</a></button>
               <button type="button" class="btn btn-primary"><a href="cxcregprov.php">REGISTRO DE PROVEEDORES</a></button>
          
      <!--CXC-->
      
         <button type="button" class="btn btn-primary"><a href="cxcregfac.php">REGISTRO DE FACTURAS</a></button>
         <button type="button" class="btn btn-primary"><a href="cxcregant.php">REGISTRO DE ANTICIPOS</a></button>
         <button type="button" class="btn btn-primary"><a href="cxcregcruce.php">REGISTRO DE CRUCES</a></button>
         <button type="button" class="btn btn-primary"><a href="cxcreport.php">REPORTES</a></button>
  
   <!--CXP-->

         <button type="button" class="btn btn-primary"><a href="cxpregfac.php">REGISTRO DE FACTURAS</a></button>
         <button type="button" class="btn btn-primary"><a href="cxpregant.php">REGISTRO DE ANTICIPOS</a></button>
         <button type="button" class="btn btn-primary"><a href="cxpregcruce.php">REGISTRO DE CRUCES</a></button>
         <button type="button" class="btn btn-primary"><a href="cxpreport.php">REPORTES</a></button>
   
   <!--TESORERIA-->

         <button type="button" class="btn btn-primary"><a href="cobranza.php">COBRANZA</a></button>
         <button type="button" class="btn btn-primary"><a href="bancos.php">BANCOS</a></button>
         <button type="button" class="btn btn-primary"><a href="otros.php">OTROS</a></button>
         <button type="button" class="btn btn-primary"><a href="tesororeport.php">REPORTES</a></button>
         </div>
    <!--CONTABILIDAD
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >CONTABILIDAD <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="contabilidad1.php">PLAN DE CUENTAS<a></li>
          <li><a href="contabilidad2.php">COMPROBANTES</a></li>
          <li><a href="contabilidad3.php">REPORTES</a></li>
        </ul>
    </li>
 
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >SALIR<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.html">SALIR<a></li>
        </ul>
    </li>
    </ul>
  </div>
</nav>-->
   </body>
</html>
