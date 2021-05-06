@extends("layouts.plantilla")
@section("cabecera")
<style>
.main{
margin-left:20px;
}
</style>
<title>Usuario</title>
<div class=main>
<h2>Nombre:</h2>
{{Auth::user()->name}}
<h2>Email:</h2>
{{Auth::user()->email}}
<h2>Logout:</h2>
<form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <img alt="" src="/img/cerrarSesion.png" width="70" height="70"/>
                                </x-jet-dropdown-link>
                            </form>

</di>
@endsection