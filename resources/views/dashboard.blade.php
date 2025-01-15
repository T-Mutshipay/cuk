<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="bg-gray-100">
        <div class="min-h-screen flex flex-col">
        <main class="container mx-auto px-4 py-6">
          <!-- Grille des sections -->
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Section : Liste des patients -->
            <div class="bg-white shadow rounded-lg p-6">
              <h2 class="text-xl font-bold mb-4">Patients dont vous êtes responsable</h2>
              <ul class="space-y-3">
                <li class="p-4 bg-gray-50 rounded shadow-sm flex justify-between items-center">
                  <span>Patient 1</span>
                  <span class="text-sm text-gray-500">ID : 12345</span>
                </li>
                <li class="p-4 bg-gray-50 rounded shadow-sm flex justify-between items-center">
                  <span>Patient 2</span>
                  <span class="text-sm text-gray-500">ID : 67890</span>
                </li>
                <li class="p-4 bg-gray-50 rounded shadow-sm flex justify-between items-center">
                  <span>Patient 3</span>
                  <span class="text-sm text-gray-500">ID : 11223</span>
                </li>
              </ul>
              <div class="mt-4 text-right">
                <a href="#" class="text-blue-600 text-sm font-medium">Voir tous les patients</a>
              </div>
            </div>
    
            <!-- Section : Hospitalisations par services -->
            <div class="bg-white shadow rounded-lg p-6">
              <h2 class="text-xl font-bold mb-4">Hospitalisations par service</h2>
              <div>
                <ul class="space-y-3">
                  <li class="flex justify-between">
                    <span>Cardiologie</span>
                    <span class="font-bold text-blue-600">15</span>
                  </li>
                  <li class="flex justify-between">
                    <span>Neurologie</span>
                    <span class="font-bold text-blue-600">10</span>
                  </li>
                  <li class="flex justify-between">
                    <span>Orthopédie</span>
                    <span class="font-bold text-blue-600">7</span>
                  </li>
                </ul>
              </div>
            </div>
    
            <!-- Section : Hospitalisations par direction -->
            <div class="bg-white shadow rounded-lg p-6">
              <h2 class="text-xl font-bold mb-4">Hospitalisations par direction</h2>
              <div class="space-y-4">
                <div class="flex justify-between items-center">
                  <span>Direction Nord</span>
                  <div class="text-sm bg-blue-100 text-blue-600 rounded-full px-4 py-1">25 patients</div>
                </div>
                <div class="flex justify-between items-center">
                  <span>Direction Sud</span>
                  <div class="text-sm bg-blue-100 text-blue-600 rounded-full px-4 py-1">18 patients</div>
                </div>
                <div class="flex justify-between items-center">
                  <span>Direction Est</span>
                  <div class="text-sm bg-blue-100 text-blue-600 rounded-full px-4 py-1">10 patients</div>
                </div>
              </div>
            </div>
          </div>
        </main>
</x-app-layout>
