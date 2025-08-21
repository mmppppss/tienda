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
            <h1 class="text-3xl font-bold mb-6 text-[#fabd2f] border-b border-[#3c3836] pb-2">
                Lista de Personas
            </h1>

            <table class="w-full table-auto border-collapse">
                <thead class="bg-[#3c3836] text-[#d79921]">
                    <tr>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">ID</th>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">Nombre</th>
                        <th class="px-4 py-2 text-left border-b border-[#504945]">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($personas as $persona)
                        <tr class="hover:bg-[#504945]">
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->id }}</td>
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->nombre }}</td>
                            <td class="px-4 py-2 border-b border-[#3c3836]">{{ $persona->email }}</td>
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