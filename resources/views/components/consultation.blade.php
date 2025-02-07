<!-- Main modal -->
<div id="modal-consultation" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full hidden">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold">
                    Créer une Consultation
                </h3>
                <button type="button" class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="modal-consultation">
                    <span class="sr-only">Fermer</span>
                    &times;
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form id="consultationForm">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="patient_id" class="block mb-2 text-sm font-medium text-gray-900">ID du Patient</label>
                            <input type="number" id="patient_id" name="patient_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>
                        <div class="w-1/2">
                            <label for="medecin_id" class="block mb-2 text-sm font-medium text-gray-900">ID du Médecin</label>
                            <input type="number" id="medecin_id" name="medecin_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>
                    </div>
                    <div>
                        <label for="date_consultation" class="block mb-2 text-sm font-medium text-gray-900">Date de Consultation</label>
                        <input type="date" id="date_consultation" name="date_consultation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="diagnostic" class="block mb-2 text-sm font-medium text-gray-900">Diagnostic</label>
                        <textarea id="diagnostic" name="diagnostic" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
                    </div>
                    <div>
                        <label for="traitement" class="block mb-2 text-sm font-medium text-gray-900">Traitement</label>
                        <textarea id="traitement" name="traitement" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required></textarea>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 border-t border-gray-200 rounded-b">
                <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2" onclick="document.getElementById('consultationForm').submit();">Créer</button>
                <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5" data-modal-hide="modal-consultation">Annuler</button>
            </div>
        </div>
    </div>
</div>