


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/ListaC.css')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Admin</title>
</head>


<body style="background:white">
    <header >
                    @if(Session::has('mensaje'))
                {{Session::get('mensaje')}}
                @endif
                <div class="BotonR">
                    <button class="css-button-shadow-border-sliding--black">
                        <h2>
                            <a class="link" href="{{url('empleado/create')}}">Nuevo Cuarto</a>     
                        </h2>
                    </button>
                </div>

                
                
                
                <div class="BotonLo">
                        <button class="css-button-shadow-border-sliding--black1">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <strong>{{ __('Cerrar sesion') }} </strong>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                        </button>
                </div>
    </header>


    
    
    <div class="">
        <H1 class="Titulo"><Center>Cuartos Registrados</Center></H1>
    </div>



        <div>
            @if(!empty($empleados))
            <table class="table table-striped table-dark">
                <thead class="">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cuarto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Informacion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                    <tr>
            
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->Cuarto}}</td>
                        <td>{{ $empleado->Descripcion}}</td>
                        <td>{{ $empleado->Informacion}}</td>
                        <td>{{ $empleado->Precio}}</td>
                        <td >
                        <img src="{{asset('storage') .'/'.$empleado->Foto}} " width="100px">    
                        
                        </td>
            
            
            
            
                        <td>
                        <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                            <img src="img/editar.png" width="45px" height="40px">
                        </a>    
                        
                        
                        
                            <form action="{{url('/empleado/'.$empleado->id ) }}" method="post">
                                @csrf
                                {{ method_field('DELETE')  }}
                                <button class="BBorrar" value="Borrar" onclick="return confirm('¿Quieres Eliminar el Cuarto?') ">
                                    <img src="img/borrar.png" width="38px" height="40px">
                                </button>
                            </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h1>No hay datos para mostrar</h1>
            @endif
        </div>

            
            
        
        
        
        
        

            

</body>
</html>
