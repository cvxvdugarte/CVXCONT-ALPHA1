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
    <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>-->
</head>
  <body class="bodyblack">
   
      <!--PERSONAS-->    
    <div class="btn-group-vertical btn-group-xs">
      <button type="button" class="btn btn-block" role="button"><a href="cxcregpers.php">PERSONAS</a></li>
      <button type="button" class="btn btn-block" role="button"><a href="cxcregusr.php">USUARIOS</a></li>
      <button type="button" class="btn btn-block" role="button"><a href="cxcregprov.php">PROVEEDORES</a></li>
      <!--CXC-->
         <button type="button" class="btn btn-block" role="button"><a href="cxcregfac.php">FACTURAS</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="cxcregant.php">ANTICIPOS</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="cxcregcruce.php">CRUCES</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="cxcreport.php">REPORTES</a></button>
   <!--CXP-->
         <button type="button" class="btn btn-block" role="button"><a href="cxpregfac.php">FACTURAS</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="cxpregant.php">ANTICIPOS</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="cxpregcruce.php">CRUCES</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="cxpreport.php">REPORTES</a></button>
   <!--TESORERIA-->
         <button type="button" class="btn btn-block" role="button"><a href="cobranza.php">COBRANZA</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="bancos.php">BANCOS</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="otros.php">OTROS</a></button>
         <button type="button" class="btn btn-block" role="button"><a href="tesororeport.php">REPORTES</a></button>
    <!--CONTABILIDAD-->
          <button type="button" class="btn btn-block" role="button"><a href="contabilidad1.php">PLAN DE CUENTAS<a></button>
          <button type="button" class="btn btn-block" role="button"><a href="contabilidad2.php">COMPROBANTES</a></button>
          <button type="button" class="btn btn-block" role="button"><a href="contabilidad3.php">REPORTES</a></button>
     <!--SALIR-->     
          <button type="button" class="btn btn-block" role="button"><a href="salir.php"><? session_start();  echo $_SESSION["usr"];?><a></button>
  </div>
   </body>
</html>
