@extends("layouts.plantilla")
@section("cabecera")
<title>info</title>
<a href="{{ route('aboutus')}}" class="w3-bar-item w3-button w3-padding-large w3-white">¿Quienes Somos?</a>
<a href="{{ route('where')}}" class="w3-bar-item w3-button w3-padding-large w3-white">¿Dónde estamos?</a>
<a href="{{ route('contact')}}" class="w3-bar-item w3-button w3-padding-large w3-white">Contacto</a>
@endsection