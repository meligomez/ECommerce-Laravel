@extends('layouts.app')
@section('content')
<div class="container">
<div class="home-container">
    <div class="lo-nuevo">
        <div class="titulo-loNuevo">
          <h2>Lo Nuevo</h2>
        </div>
        <div class="secciones">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </div>
        <div class="productos">
         @foreach($vehiculos as $unVehiculo)
            <div class="vehiculo-item">
                <div class="foto-vehiculo">
                    <img src="{{ $unVehiculo->foto }}" alt="" class="img-vehiculo"  style="width:55px;">
                </div>
                    <br>
                <div class="titulo-vehiculo" style="font-weight:bold">
                      {{ $unVehiculo->nombre }}
                </div>
                   <br>
                <div class="descripcion-vehiculo">
                      {{ $unVehiculo->descripcion }}
                </div>
            </div>
         @endforeach
        </div>
    </div>
    <div class="lanzamientos">

    </div>
</div>
</div>
@endsection
