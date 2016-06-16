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
  <? include 'cvx.php';
  session_start();
  cvx($_SESSION["USER"]);
  if($stmt = $mysqli->prepare("SELECT * FROM  `PERSONAS` LIMIT 0 , 30;"))
  {                     
   //$stmt->bind_param("ss",$cod,$key);
   $stmt->execute();
   $stmt->bind_result($personas);
   $stmt->fetch();
   $stmt->close();
   $a = array_count_values($personas);
   while ($b <= $a ){
       echo $personas($b);  
   }
   $mysqli->close();
  ?>
  </body>
  </html>
