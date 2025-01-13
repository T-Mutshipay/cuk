<x-app-layout>
    <div class="container mx-auto py-6 px-4">
        <h1 class="text-2xl font-bold mb-4">Liste des Chambres</h1>
        <a href="{{ route('rooms.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded">
            Ajouter une Chambre
        </a>
        <table class="min-w-full mt-4 border border-gray-300 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-2 text-left">Nom</th>
                    <th class="px-6 py-2 text-left">Type</th>
                    <th class="px-6 py-2 text-left">Capacité</th>
                    <th class="px-6 py-2 text-left">Disponibilité</th>
                    <th class="px-6 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr class="border-b">
                        <td class="px-6 py-2">{{ $room->nom }}</td>
                        <td class="px-6 py-2">{{ $room->type }}</td>
                        <td class="px-6 py-2">{{ $room->capacite }}</td>
                        <td class="px-6 py-2">
                            {{ $room->disponibilite ? 'Disponible' : 'Occupée' }}
                        </td>
                        <td class="px-6 py-2">
                            <a href="{{ route('rooms.edit', $room->id) }}" class="text-indigo-600">Modifier</a>
                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 ml-2">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
