<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.login{
  margin-left:1500px;
 
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

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">CENTRO DEPORTIVO</h1>
  <!--<p class="w3-xlarge">Template by w3.css</p>-->
  <!--<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>-->
  <div class=login>
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           
                
                    @if (Auth::check())
                        <button type="button" class="btn btn-btn-primary">{{Auth::user()->name}}</button>
                        
                        <a href="/user" tittle="Usuario">Usuario</a>
                
                  
                      @else
                       <h4> <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a><br></h4>

                        @if (Route::has('register'))
                           <h4> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></h4>
                        
                        @endif
                    @endif
                
            
  </div>
</div>
</header>

<!-- Primer Cuadro -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Actividades</h1>
      <h5 class="w3-padding-32">En nuestro centro deportivo se realizan múltiples actividades, entre las que se realizan torneos de las mismas y encontrarás diversas formas de pasartelo bien con tus compañeros.</h5>

      <p class="w3-text-grey">Entre los deportes realizados en el centro se pueden prácticar: tenis , fútbol, baloncesto, padel, atletismo y natación.
      En este centro podréis encontrar una gran variedad de espacios en los cuáles practicas vuestro deporte favorito sin dejar de lado la diversión y el compañerismo.</p>
    </div>

    <div class="w3-third w3-center">
    <img src="/img/sport.jpg">
      <i class="red-ball"></i>
    </div>
  </div>
</div>

<!-- Segundo Cuadro -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Ten un buen dia</h1>
      <h5 class="w3-padding-32">Hacer deporte ofrece muchos beneficios y nos ayuda a desarrollarnos como personas.</h5>

      <p class="w3-text-grey">1. El ejercicio permite controlar el sobrepeso<br>    

                            2. El ejercicio ayuda a combatir enfermedades

                            3. Hacer ejercicio pone de buen humor<br>

                            4. Hacer ejercicio aumenta la energía<br>

                            5. El ejercicio ayuda a dormir mejor<br>

                            6. Hacer ejercicio puede ser divertido y promueve la socialización.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">w3.css</h1>
</div>

<!-- Footer 
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
-->
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