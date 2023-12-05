<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
    <header>
        <nav class="bg-gray-100">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-center text-amber-400 text-5xl font-black">
                Gestion Universitaria
                </h1>

                <ul class="flex space-x-4">
                    <li><a href="/" class="font-bold uppercase text-gray-500  font-sans hover:font-mono text-slate-500 hover:text-blue-600">Inicio</a></li>
                    <li><a href="{{ route('registrar') }}" class="font-bold uppercase text-gray-500 font-sans hover:font-mono text-slate-500 hover:text-blue-600">Registrar Usuario</a></li>
                    <li><a s class="font-bold uppercase text-gray-500 font-sans hover:font-mono text-slate-500 hover:text-blue-600">Listar</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        <div class="text-center">
            @yield('contenido')
        </div>
    </main>
</body>
</html>
