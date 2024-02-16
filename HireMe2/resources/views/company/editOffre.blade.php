<x-boot>
    @include('profile.partials.nav') 
        <div class="col-lg-7 mx-auto mt-1">
          <div class="card  mx-auto bg-light mb-4 shadow-md rounded-md mt-4">
              <div class="card-body bg-light ">
                  
              <div class = "container">
                  <form method="POST" action="{{route('ajoutOffre')}}" >
                      @csrf
                      <div class="controls">
                          <div class="row">
                              <h1 class="mb-2 fs-3 text-center lead  fw-light text-secondary fw-medium">Offre d'emploi</h1>
                              <div class="col-md-12">
                                <div class="mt-4">
                                    <x-input-label for="titre" :value="__('Titre')" />
                                    <x-text-input  class="block mt-1 w-full ayoub" type="text" name="titre" :value="$offre->titre"  />
                                    <x-input-error :messages="$errors->get('titre')" class="mt-2" />
                                </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="mt-4">
                                  <x-input-label for="type" :value="__('Type de contract')" />
                                  <select name="type" id="langue" :value="old('type')"  class="form-select mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                                      <option value="{{$offre->type_contrat}}">{{$offre->type_contrat}}</option>
                                      <option value="à distance" class="form-option">à distance</option>
                                      <option value="hybride" class="form-option">Hybride</option>
                                      <option value="à temps plein" class="form-option">à temps plein</option>
                  
                                  </select>
                                  <x-input-error :messages="$errors->get('type')" class="mt-2" />
                              </div>
                          </div>
                              <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="adresse" :value="__('Emplacement')" />
                                    <x-text-input  class="block mt-1 w-full" type="text" name="emplacement" :value="$offre->emplacement"  />
                                    <x-input-error :messages="$errors->get('emplacement')" class="mt-2" />
                                </div>
                              </div>
                          </div>
                          <div class="row">

                              <div class="col-md-12">
                                <div class="mt-4">
                                    <label for="competence" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Compétences requises (entrez virgule "," entre les compétences)</label>
                                    <x-text-input  class="block mt-1 w-full" type="text" name="competence" :value="$offre->competence"  />
                                    <x-input-error :messages="$errors->get('competence')" class="mt-2" />
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mt-4">
                                  <div class="form-group">
                                      <label for="form_message" class="block font-medium text-sm  mb-2 text-gray-700 dark:text-gray-300">Description</label>
                                      <textarea  name="description" :value="old('description')"  class="form-control border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" placeholder="Entrer la description ici." rows="4" >{{$offre->description}}</textarea>
                                      @error('description')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="d-flex justify-content-end">
                                      <input type="submit" class="btn bg-dark my-2 text-white" value="Ajouter offre">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
          </div>
              </div>
      </div>
      </div>
        
    
 
</x-boot>
