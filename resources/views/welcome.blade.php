<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MHE</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .imagen{
            background-image: url("{{ asset('images/ministerio.png') }}");
            height: 131px;
            width: 525px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div class="bg-blue-900 p-4">
    <div class="container mx-auto text-white text-sm">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4">
                <p>
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span> Av. Mcal. Santa Cruz Edif. Palacio de Comunicaciones Piso 12
                    </span> 
                </p>

            </div>
            <div class="col-span-6">
                <i class="fas fa-phone mr-2"></i>
                Teléfonos 591-2-2186700
            </div>
            <div class="col-span-2">
                <a href="#"><i class="fab fa-facebook-f m-2"></i></a>
                <a href="#"><i class="fab fa-twitter m-2"></i></a>
                <a href="#"><i class="fab fa-instagram m-2"></i></a>
                <a href="#"><i class="fab fa-youtube m-2"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="imagen bg-cover "></div>
</div>

<div class="container mx-auto">
    <ul class="flex mx-auto">
        <li class="mr-3">
          <a class="inline-block border border-blue-500 py-1 px-3 bg-blue-900 text-white font-bold" href="/">INICIO</a>
        </li>
        <li class="mr-3">
          <a class="inline-block hover:border-gray-200 text-blue-900 hover:bg-blue-900 hover:text-white py-1 px-3 font-bold" href="#">INSTITUCION <i class="fas fa-caret-down"></i></a>
        </li>
        <li class="mr-3">
          <a class="inline-block hover:border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white py-1 px-3 font-bold" href="#">TRANSPARENCIA <i class="fas fa-caret-down"></i></a>
        </li>
        <li class="mr-3">
            <a class="inline-block hover:border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white py-1 px-3 font-bold" href="#">VICEMINISTERIOS <i class="fas fa-caret-down"></i></a>
        </li>
        <li class="mr-3">
            <a class="inline-block hover:border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white py-1 px-3 font-bold" href="#">COMUNICACION <i class="fas fa-caret-down"></i></a>
        </li>
        <li class="mr-3">
            <a class="inline-block hover:border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white py-1 px-3 font-bold" href="#">MARCO LEGAL</a>
        </li>
        <li class="mr-3"  x-data="{ open: false }">
            <button class="inline-block hover:border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white py-1 px-3 font-bold px-5 mr-7" x-on:mouseover="open = true" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">SILA <i class="fas fa-caret-down"></i></button>
            <div class="border-2 border-blue-900" x-show="open" x-on:mouseover.away = "open = false">
                <a href="{{route('login')}}" class="block px-4 py-2 text-sm text-blue-900 font-bold hover:bg-blue-900 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">LOGIN</a>
                <a href="{{route('register')}}" class="block px-4 py-2 text-sm text-blue-900 font-bold hover:bg-blue-900 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">REGISTRO</a>
                <a href="{{route('web.busqueda')}}" class="block px-4 py-2 text-sm text-blue-900 font-bold hover:bg-blue-900 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">BUSCAR</a>
                @auth
                <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-blue-900 font-bold hover:bg-blue-900 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">PERFIL</a>
                <a href="{{route('admin.home')}}" class="block px-4 py-2 text-sm text-blue-900 font-bold hover:bg-blue-900 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">Dashboard</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-blue-900 font-bold hover:bg-blue-900 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2"onclick="event.preventDefault(); this.closest('form').submit();">SALIR</a>

                @endauth    
            </div>
        </li>
        <li class="mr-3">
            <a class="inline-block hover:border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white py-1 px-3 font-bold" href="#">CONTACTO</a>
        </li>
      </ul>
</div>

<div class="container mx-auto mt-10">
    <iframe class="mx-auto" width="1200" height="800" src="https://www.youtube.com/embed/Ta8a3VcxSr8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

</body>
</html>