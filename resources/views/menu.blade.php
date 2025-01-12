<x-app-layout>
    <div class=" text-gray-900 dark:text-gray-100">
        <nav class=" p-4 border-b border-gray-100 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center ">
                <div class="hidden md:flex space-x-4">
                    <button class="btn-fiche bg-blue-500 text-white px-4 py-2 rounded">Fiche</button>
                    <button class="btn-nouveau-medecin bg-green-500 text-white px-4 py-2 rounded">Nouveau Médecin</button>
                    <a href="{{route('departements.index')}}" class="btn-departement bg-yellow-500 text-white px-4 py-2 rounded">Département</a>
                </div>
            </div>
        </nav>

        <div class="md:hidden" :class="{'block': open, 'hidden': !open}">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <button class="btn-fiche w-full text-left px-4 py-2 bg-blue-500 text-white rounded">Fiche</button>
                <button class="btn-nouveau-medecin w-full text-left px-4 py-2 bg-green-500 text-white rounded">Nouveau Médecin</button>
                <a href="{{route('departements.index')}}" class="btn-departement w-full text-left px-4 py-2 bg-yellow-500 text-white rounded">Département</a>
            </div>
        </div>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-32 p-13">
            <h1 class="text-3xl font-bold">Bienvenue à la Clinique universitaire de Kinshasa</h1>
            <p class="mt-4">Gérez vos fiches de patients, enregistrez de nouveaux médecins et organisez les départements facilement.</p>
        </main>
    </div>
</x-app-layout>