<x-layout>
    <div class="bg-white shadow-md rounded p-6 mt-4">
        <h1 class="text-4xl font-bold text-center mb-8">Bienvenue dans votre Bibliothèque</h1>
        <p class="text-center text-lg text-gray-700 mb-6">
            Découvrez, empruntez et gérez vos livres en toute simplicité. Naviguez entre les différentes sections pour explorer notre collection et gérer vos emprunts.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Section 1 -->
            <div class="bg-gray-100 p-4 rounded shadow-md">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDEwfHxib29rfGVufDB8fHx8MTY5MDY4MTU4MQ&ixlib=rb-1.2.1&q=80&w=1080" alt="Livres" class="w-full object-cover rounded mb-4">
                <h2 class="text-xl font-bold mb-2">Livres & Auteurs</h2>
                <p class="text-gray-600 mb-4">
                    Consultez notre vaste collection de livres et découvrez leurs auteurs. Explorez les œuvres littéraires disponibles.
                </p>
                <a href="{{ route('livres') }}" class="text-blue-500 hover:underline">Voir les livres &rarr;</a>
            </div>

            <!-- Section 2 -->
            <div class="bg-gray-100 p-4 rounded shadow-md">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDEwfHxib29rfGVufDB8fHx8MTY5MDY4MTU4MQ&ixlib=rb-1.2.1&q=80&w=1080" alt="Bibliothèque" class="w-full rounded shadow-md">
                <h2 class="text-xl font-bold mb-2">Livres Disponibles</h2>
                <p class="text-gray-600 mb-4">
                    Consultez les livres actuellement disponibles à l'emprunt et faites votre choix pour enrichir votre expérience de lecture.
                </p>
                <a href="{{ route('livres-disponibles') }}" class="text-blue-500 hover:underline">Voir les livres disponibles &rarr;</a>
            </div>

            <!-- Section 3 -->
            <div class="bg-gray-100 p-4 rounded shadow-md">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDEwfHxib29rfGVufDB8fHx8MTY5MDY4MTU4MQ&ixlib=rb-1.2.1&q=80&w=1080" alt="Bibliothèque" class="w-full rounded shadow-md">
                <h2 class="text-xl font-bold mb-2">Emprunteurs en Retard</h2>
                <p class="text-gray-600 mb-4">
                    Consultez la liste des emprunteurs n'ayant pas rendu leurs livres à temps et suivez les emprunts en attente.
                </p>
                <a href="{{ route('emprunteurs-en-retard') }}" class="text-blue-500 hover:underline">Voir les retards &rarr;</a>
            </div>
        </div>
    </div>
</x-layout>
