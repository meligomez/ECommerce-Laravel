@extends('layouts.app')
@section('content')
<div class="container">
    <div class="home-img-general">
        <img src="/img/home-veicle.png" style="width: 100%;" alt="">
    </div>
    <div class="home-nuestros-servicios">
        <h2>Nuestros servicios</h2>

        @foreach($services as $unServicio)
        <div class="servicio-container">
            <div class="foto-servicio">
              {{ $unServicio->foto }}
            </div>
              <br>
            <div class="titulo-servicio">
              {{ $unServicio->titulo }}
            </div>
              <br>
            <div class="descripcion-servicio">
              {{ $unServicio->descripcion }}
            </div>
        </div>
        @endforeach
    </div>
    <div class="home-nuestro-crecimiento">

    </div>
    <div class="home-nuestros-clientes">

    </div>
</div>
@endsection
