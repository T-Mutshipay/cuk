<x-app-layout>
    <div class="container mx-auto py-6 px-4">
        <h1 class="text-2xl font-bold mb-4">Liste des Responsables des Patients</h1>
        <a href="{{ route('patient_responsables.create') }}" class=" text-white px-4 py-2 rounded">
            Ajouter un Responsable
        </a>
        <table class="min-w-full mt-4 border border-gray-300 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-2 text-left">Patient</th>
                    <th class="px-6 py-2 text-left">Utilisateur</th>
                    <th class="px-6 py-2 text-left">Rôle</th>
                    <th class="px-6 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patientResponsables as $responsable)
                    <tr class="border-b">
                        <td class="px-6 py-2">{{ $responsable->patient->name }}</td>
                        <td class="px-6 py-2">{{ $responsable->user->name }}</td>
                        <td class="px-6 py-2">{{ $responsable->role }}</td>
                        <td class="px-6 py-2">
                            <a href="{{ route('patient_responsables.edit', $responsable->id) }}" class="text-indigo-600">Modifier</a>
                            <form action="{{ route('patient_responsables.destroy', $responsable->id) }}" method="POST" class="inline">
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
