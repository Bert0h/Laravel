@extends("layouts.plantilla")
@section("cabecera")
<title>Contacto</title>
<!DOCTYPE html>
<html>
<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #ed1713;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #b03a38;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>



<div>
  <form action="#">
    <label for="Nombre">Nombre</label>
    <input type="text" id="fname" name="firstname" placeholder="Nombre">

    <label for="email">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="Email">

    <label for="consulta">Consulta</label>
    <input type="text" id="fname" name="firstname" placeholder="Consulta">
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
@endsection