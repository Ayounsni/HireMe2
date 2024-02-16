<x-boot>
    @include('profile.partials.nav') 
        <div class="d-flex justify-content-center ">
        <div class="card w-75 mt-4 rounded-2 p-6">
            <div class = "container w-75 p-4 bg-gray-200 rounded-md shadow-sm border-2">
                <form method="POST" action="{{ route('lang') }}" id="myForm">
                    @csrf
                    <div class="controls">
                        <div class="row">
                            <h1 class="mb-2 fs-3 text-center lead  fw-light text-gray-800 fw-medium">Langues</h1>
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="langue" :value="__('Langue')" />
                                    <select name="langue[]" id="langue" class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Sélectionner une langue</option>
                                        <option value="Arabe">Arabe</option>
                                        <option value="Français">Français</option>
                                        <option value="Anglais">Anglais</option>
                                        <option value="Espagnol">Espagnol</option>
                                        <option value="Allemand">Allemand</option>
                                        <option value="Italien">Italien</option>
                                        <option value="Portugais">Portugais</option>
                                        <option value="Chinois">Chinois</option>
                                        <option value="Japonais">Japonais</option>
                                        <option value="Coréen">Coréen</option>
                                        <option value="Russe">Russe</option>                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="niveau" :value="__('Niveau')" />
                                    <select name="niveau[]" id="langue" class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Sélectionner un niveau</option>
                                        <option value="Langue maternelle" class="form-option">Langue maternelle</option>
                                        <option value="Courant" class="form-option">Courant</option>
                                        <option value="Intermédiaire" class="form-option">Intermédiaire</option>
                                        <option value="Notions" class="form-option">Notions</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('niveau[]')" class="mt-2" />
                                </div>
                            </div>

                        
                        <div id="dynamicInputs"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex mt-2 justify-content-end">
                                    <button type="button" id="addInputBtn" class="btn bg-dark my-2 text-white">Ajouter un champ</button>
                                    <input type="submit" class="btn bg-dark my-2 text-white ml-2" value="Ajouter">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
        </div>
    </div>
  </div>
  
   
    <script>
document.getElementById('addInputBtn').addEventListener('click', function() {
    // Créer un nouveau groupe de champs d'entrée
    var newInput = document.createElement('div');
    newInput.className = 'row';
    newInput.innerHTML = `
    <h1 class="mt-3 text-center  ">______________________________________________________________________________________</h1>
    <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="langue" :value="__('Langue')" />
                                    <select name="langue[]" id="langue" class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Sélectionner une langue</option>
                                        <option value="Arabe">Arabe</option>
                                        <option value="Français">Français</option>
                                        <option value="Anglais">Anglais</option>
                                        <option value="Espagnol">Espagnol</option>
                                        <option value="Allemand">Allemand</option>
                                        <option value="Italien">Italien</option>
                                        <option value="Portugais">Portugais</option>
                                        <option value="Chinois">Chinois</option>
                                        <option value="Japonais">Japonais</option>
                                        <option value="Coréen">Coréen</option>
                                        <option value="Russe">Russe</option>                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="niveau" :value="__('Niveau')" />
                                    <select name="niveau[]" id="langue" class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Sélectionner un niveau</option>
                                        <option value="Langue maternelle" class="form-option">Langue maternelle</option>
                                        <option value="Courant" class="form-option">Courant</option>
                                        <option value="Intermédiaire" class="form-option">Intermédiaire</option>
                                        <option value="Notions" class="form-option">Notions</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('ecole[]')" class="mt-2" />
                                </div>
                            </div>
    `;

    // Ajouter le nouveau groupe de champs d'entrée au div dynamique dans le formulaire
    document.getElementById('dynamicInputs').appendChild(newInput);
});

    </script>
</x-boot>