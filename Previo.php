<html>
<head>
  <title>Seats</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-MP {
  background: #F75259;
  color: white;
}



</style>

</head>
<body>
<div class="jumbotron text-center" style="background-color: 68B8AA">
  <h1>Proyecto Seats</h1>
  <p>Ayudanos a cambiar la calidad del transporte colectivo.</p> 
</div>
<form method="post">

<a class="btn btn-block btn-social btn-twitter">
    <input type="submit" name="APP" id="APP" value="Prueba nuestro prototipo móvil" class="btn btn-lg btn-block fa-MP"/><br/>
<br/>
<br/>
<input type="submit" name="FB" id="FB" value="Visita nuestra FanPage de Facebook" class="btn btn-lg btn-block fa-facebook"/><br/>
<br/>
</form>
</body>
</html>
<?php

function APPfun()
{
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: http://run.mockplus.com/uPEg8epKMRRLsNyy/index.html');
exit;
}

function FBfun()
{
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: https://www.facebook.com/Seats-144218809649728/');
exit;
}

if(array_key_exists('APP',$_POST)){
   APPfun();
}

if(array_key_exists('FB',$_POST)){
   FBfun();
}

?>