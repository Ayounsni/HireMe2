<x-boot>
    @include('profile.partials.nav') 
        <div class="d-flex justify-content-center ">
        <div class="card w-75 mt-4 rounded-2 p-6">
            <div class = "container w-75 p-4 bg-gray-200 rounded-md shadow-sm border-2">
                <form method="POST" action="{{ route('educ') }}" id="myForm">
                    @csrf
                    <div class="controls">
                        <div class="row">
                            <h1 class="mb-2 fs-3 text-center lead  fw-light text-gray-800 fw-medium">Cursus Educatifs</h1>
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="diplome" :value="__('Diplome')" />
                                    <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="diplome[]" :value="old('diplome')" />
                                    @error('diplome[]')
                                    <h1>{{$message}}</h1>
                                        
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="ecole" :value="__('Etablissement')" />
                                    <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="ecole[]" :value="old('ecole')" />
                                    <x-input-error :messages="$errors->get('ecole[]')" class="mt-2" />
                                </div>
                            </div>
                            
                                <div class="col-md-6">
                                    <div class="mt-4">
                                        <x-input-label for="Nom" :value="__('Date de debut')" />
                                        <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm " type="date" name="dated[]" :value="old('dated')" />
                                        <x-input-error :messages="$errors->get('dated[]')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-4">
                                        <x-input-label for="prenom" :value="__('Date de fin')" />
                                        <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="date" name="datef[]" :value="old('prenom')" />
                                        <x-input-error :messages="$errors->get('datef')" class="mt-2" />
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
                                    <x-input-label for="diplome" :value="__('Diplome')" />
                                    <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="diplome[]" :value="old('diplome')" />
                                    @error('diplome[]')
                                    <h1>{{$message}}</h1>
                                        
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="ecole" :value="__('Etablissement')" />
                                    <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="ecole[]" :value="old('ecole')" />
                                    <x-input-error :messages="$errors->get('ecole[]')" class="mt-2" />
                                </div>
                            </div>
                            
                                <div class="col-md-6">
                                    <div class="mt-4">
                                        <x-input-label for="Nom" :value="__('Date de debut')" />
                                        <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm " type="date" name="dated[]" :value="old('dated')" />
                                        <x-input-error :messages="$errors->get('dated[]')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-4">
                                        <x-input-label for="prenom" :value="__('Date de fin')" />
                                        <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="date" name="datef[]" :value="old('prenom')" />
                                        <x-input-error :messages="$errors->get('datef')" class="mt-2" />
                                    </div>
                                </div>
    `;

    // Ajouter le nouveau groupe de champs d'entrée au div dynamique dans le formulaire
    document.getElementById('dynamicInputs').appendChild(newInput);
});

    </script>
</x-boot>