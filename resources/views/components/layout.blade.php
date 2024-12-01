<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Gestion de bibliothèque' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Bibliothèque de Moussa</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home') }}" class="hover:underline">Accueil</a></li>
                    <li><a href="{{ route('livres') }}" class="hover:underline">Livres & Auteurs</a></li>
                    <li><a href="{{ route('livres-disponibles') }}" class="hover:underline">Livres Disponibles</a></li>
                    <li><a href="{{ route('emprunteurs-en-retard') }}" class="hover:underline">Emprunteurs en Retard</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-grow font-sans text-gray-900 antialiased">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        Moussa &copy; {{ date('Y') }} Gestion de bibliothèque.
    </footer>
    @vite('resources/js/app.js')
</body>
</html>
