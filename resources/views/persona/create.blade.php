<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Persona</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
</head>
<body class="bg-[#282828] text-[#ebdbb2] min-h-screen flex flex-col">
    <!-- Navbar -->
    @include('index')

    <!-- Contenido principal -->
    <div class="flex flex-col items-center justify-center flex-grow py-10">
        <div class="flex flex-row shadow-lg rounded-lg overflow-hidden max-w-3xl w-full">
            <!-- Formulario -->
            <form class="bg-[#3c3836] p-8 w-full sm:w-1/2 space-y-6" action="{{ route('personas.store') }}" method="POST" >
                @csrf
                <h2 class="text-2xl font-bold text-center text-[#fabd2f]">Registrar Persona</h2>

                <!-- Nombre -->
                <div>
                    <label for="nombre" class="block mb-1">Nombre</label>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        required
                        class="w-full px-4 py-2 bg-[#282828] border border-[#504945] rounded text-[#ebdbb2] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fabd2f]"
                        placeholder="Tu nombre"
                    />
                </div>

                <div class="flex horizontal">
                <!-- CI -->
                    <div>
                        <label for="ci" class="block mb-1">Cédula de Identidad</label>
                        <input
                            type="text"
                            id="ci"
                            name="ci"
                            required
                            class="w-full px-4 py-2 bg-[#282828] border border-[#504945] rounded text-[#ebdbb2] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fabd2f]"
                            placeholder="Ej: 12345678"
                        />
                    </div>

                    <!-- Celular -->
                    <div>
                        <label for="celular" class="block mb-1">Celular</label>
                        <input
                            type="tel"
                            id="celular"
                            name="celular"
                            required
                            class="w-full px-4 py-2 bg-[#282828] border border-[#504945] rounded text-[#ebdbb2] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fabd2f]"
                            placeholder="Ej: 098123456"
                        />
                    </div>

                </div>
                <!-- Género -->
                <div>
                    <label for="genero" class="block mb-1">Género</label>
                    <select
                        id="genero"
                        name="genero"
                        required
                        class="w-full px-4 py-2 bg-[#282828] border border-[#504945] rounded text-[#ebdbb2] focus:outline-none focus:ring-2 focus:ring-[#fabd2f]"
                    >
                        <option value="">Selecciona tu género</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <!-- Correo -->
                <div>
                    <label for="email" class="block mb-1">Correo Electrónico</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="w-full px-4 py-2 bg-[#282828] border border-[#504945] rounded text-[#ebdbb2] placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#fabd2f]"
                        placeholder="tu@email.com"
                    />
                </div>

                <!-- Botón -->
                <div>
                    <button
                        type="submit"
                        class="w-full bg-[#fabd2f] text-[#282828] font-bold py-2 px-4 rounded hover:bg-[#d79921] transition"
                    >
                        Registrar
                    </button>
                </div>
            </form>


            <!-- Imagen decorativa -->
            <img
                src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Tsunami_by_hokusai_19th_century.jpg"
                alt="Kanagawa Wave"
                class="object-cover w-1/2 hidden sm:block"
            />
        </div>
    </div>
</body>

</html>