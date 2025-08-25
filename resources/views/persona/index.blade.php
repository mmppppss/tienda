<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
</head>
<body>
    @include('index')
    <div class="min-h-screen bg-[#282828] text-[#ebdbb2] p-6">
        <div class="max-w-4xl mx-auto">
            <div class="flex justify-between items-center mb-6 ">
                <h1 class="text-3xl font-bold text-[#fabd2f] pb-2">
                    Lista de Personas
                </h1>
                <a href="{{ route('persona.create')}}" class="bg-[#3c3836] hover:bg-[#504945] text-[#fabd2f] font-semibold py-2 px-4 rounded border border-[#fabd2f] transition duration-200">
                    Agregar Persona
                </a>
            </div>
            <table class="w-full table-auto border-collapse">
                <thead class="bg-[#3c3836] text-[#d79921]">
                    <tr>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">ID</th>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">CI</th>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">Nombre</th>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">Genero</th>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">Email</th>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">Celular</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($personas as $persona)
                        <tr class="hover:bg-[#504945]">
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->id }}</td>
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->ci }}</td>
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->nombre }}</td>
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->genero }}</td>
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->email }}</td>
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->celular }}</td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4 text-[#928374]">No hay personas registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>