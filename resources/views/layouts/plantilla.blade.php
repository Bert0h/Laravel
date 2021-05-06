<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.contenedor{
  background-color:#FFFFFF;
  margin-top: 100px;

}
.infoGeneral{
  background-color:#CDCDCD;
  margin:200px 0;
  
}
.foot{
  background-color:#474B4E;
}
</style>
<body>

<!-- Barra Navegación -->
<div class="w3-top">

  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="{{ route('reserva') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Reservas</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Deportes</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Torneos</a>
    <a href="{{ route('info') }}" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Informacion</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="{{ route('reserva') }}" class="w3-bar-item w3-button w3-padding-large">Reservas</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Deportes</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Torneos</a>
    <a href="{{ route('info') }}" class="w3-bar-item w3-button w3-padding-large">Informacion</a>
  </div>
</div>

<div class=contenedor>
@yield("cabecera")
</div>

<div class=infoGeneral>
@yield("infoGeneral")
</div>

<div class=foot>
@yield("foot")
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>