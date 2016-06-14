<!doctype html>
<html>
<head>
<title>CVXCONT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <!--<link rel="stylesheet" href="stylesheets/github-dark.css">-->
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
      <!--PERSONAS-->    
    <div class="btn-group-vertical btn-group-xs">
      <button type="button" class="btn btn-link"><a href="cxcregpers.php">REGISTRO DE PERSONAS</a></li>
      <button type="button" class="btn btn-link"><a href="cxcregusr.php">REGISTRO DE USUARIOS</a></li>
      <button type="button" class="btn btn-link"><a href="cxcregprov.php">REGISTRO DE PROVEEDORES</a></li>
      <!--CXC-->
         <button type="button" class="btn btn-link"><a href="cxcregfac.php">REGISTRO DE FACTURAS</a></button>
         <button type="button" class="btn btn-link"><a href="cxcregant.php">REGISTRO DE ANTICIPOS</a></button>
         <button type="button" class="btn btn-link"><a href="cxcregcruce.php">REGISTRO DE CRUCES</a></button>
         <button type="button" class="btn btn-link"><a href="cxcreport.php">REPORTES</a></button>
   <!--CXP-->
         <button type="button" class="btn btn-link"><a href="cxpregfac.php">REGISTRO DE FACTURAS</a></button>
         <button type="button" class="btn btn-link"><a href="cxpregant.php">REGISTRO DE ANTICIPOS</a></button>
         <button type="button" class="btn btn-link"><a href="cxpregcruce.php">REGISTRO DE CRUCES</a></button>
         <button type="button" class="btn btn-link"><a href="cxpreport.php">REPORTES</a></button>
   <!--TESORERIA-->
         <button type="button" class="btn btn-link"><a href="cobranza.php">COBRANZA</a></button>
         <button type="button" class="btn btn-link"><a href="bancos.php">BANCOS</a></button>
         <button type="button" class="btn btn-link"><a href="otros.php">OTROS</a></button>
         <button type="button" class="btn btn-link"><a href="tesororeport.php">REPORTES</a></button>
    <!--CONTABILIDAD-->
          <button type="button" class="btn btn-link"><a href="contabilidad1.php">PLAN DE CUENTAS<a></button>
          <button type="button" class="btn btn-link"><a href="contabilidad2.php">COMPROBANTES</a></button>
          <button type="button" class="btn btn-link"><a href="contabilidad3.php">REPORTES</a></button>
     <!--SALIR-->     
          <button type="button" class="btn btn-link"><a href="index.html">SALIR<a></button>
  </div>
   </body>
</html>
