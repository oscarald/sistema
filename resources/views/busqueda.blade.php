<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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

    <div class="container mt-10">
        <h1 class="h1">Búsqueda de tramites</h1>

        <form action="{{ route('web.busqueda') }}" method="POST" class="row">
            @csrf
            <div class="col-3">
              <label for="busqueda" class="col-form-label fw-bolder" >Introduzca el número de Trámite</label>
              
            </div>
            <div class="col-4">
                <input type="text" name="id" class="form-control" >
            </div>
            <div class="col-5">
              <button type="submit" class="btn btn-primary mb-3">Buscar Trámite</button>
            </div>
          </form>

        @isset($tramite)

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"># de Trámite</th>
                <th scope="col">Fecha de Ingreso</th>
                <th scope="col">Nombre AOP</th>
                <th scope="col">Empresa</th>
                <th scope="col">Tipo de Trámite</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $tramite->id }}</th>
                <td>{{ $tramite->created_at }}</td>
                <td>{{ $tramite->nombre }}</td>
                <td>{{ $tramite->empresa }}</td>
                <td>{{ $tramite->tipo }}</td>
                <td>
                    @switch($tramite->estado)
                    @case(1)
                        Para Asignar Técnico OSC
                        @break
                    @case(2)
                        En revisíon por Técnico OSC
                        @break
                    @case(3)
                        Trámite con observación OSC
                        @break
                    @case(4)
                        Trámite enviado AACN
                        @break
                    @case(5)
                        Para Asignar Técnico AACN
                        @break
                    @case(6)
                        En revisíon por Técnico AACN
                        @break
                    @case(7)
                        Trámite con observación AACN
                        @break
                    @case(8)
                        Trámite Finalizado
                        @break
                    @case(9)
                        Trámite Rechazado
                        @break
                
                    @default
                    @endswitch
                </td>
              </tr>
            </tbody>
          </table>
            
        @endisset
        
    </div>


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>