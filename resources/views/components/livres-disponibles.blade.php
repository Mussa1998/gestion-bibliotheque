<div class="bg-white shadow-md rounded p-6">
    <div class="bg-white shadow-md rounded p-6">
        <h1 class="text-4xl font-bold text-center mb-8">Bienvenue dans votre Bibliothèque</h1>
        <p class="text-center text-lg text-gray-700 mb-6">
            Découvrez, empruntez et gérez vos livres en toute simplicité. Naviguez entre les différentes sections pour explorer notre collection et gérer vos emprunts.
        </p>
    </div>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Titre</th>
                <th class="border border-gray-300 px-4 py-2">Auteur</th>
                <th class="border border-gray-300 px-4 py-2">Disponible</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livresDisponibles as $livre)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $livre->title }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $livre->auteur->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $livre->is_available }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
