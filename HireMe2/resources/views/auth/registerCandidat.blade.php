<x-boot>
    @include('profile.partials.nav') 
        <div class="col-lg-7 mx-auto mt-1">
          <div class="card  mx-auto bg-light mb-4 shadow-md rounded-md mt-4">
              <div class="card-body bg-light ">
                  
              <div class = "container">
                  <form method="POST" action="{{route('registerCan')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="controls">
                          <div class="row">
                              <h1 class="mb-2 fs-3 text-center lead  fw-light text-secondary fw-medium">CANDIDAT</h1>
                              <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="Nom" :value="__('Nom')" />
                                    <x-text-input  class="block mt-1 w-full ayoub" type="text" name="nom" :value="old('nom')"  />
                                    <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="prenom" :value="__('Prenom')" />
                                    <x-text-input  class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')"  />
                                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="tel" :value="__('Tel')" />
                                    <x-text-input  class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')"  />
                                    <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mt-4">
                                    <x-input-label for="adresse" :value="__('Adresse')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')"  />
                                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                                </div>
                              </div>
                          </div>
                          <div class="row">

                              <div class="col-md-12">
                                <div class="mt-4">
                                    <x-input-label for="post" :value="__('Poste Actuel')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="post" :value="old('post')"  />
                                    <x-input-error :messages="$errors->get('post')" class="mt-2" />
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Photo de Profile</label>
                                    <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer  dark:text-gray-400 focus:outline-none dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-100 shadow-sm" id="file_input"  type="file">
                              </div>
                            </div>
                              <div class="col-md-12">
                                <div class="mt-4">
                                  <div class="form-group">
                                      <label for="form_message" class="block font-medium text-sm  mb-2 text-gray-700 dark:text-gray-300">À propos</label>
                                      <textarea  name="about"  class="form-control border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" placeholder="Entrer la description ici." rows="4" ></textarea>
                                      @error('about')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="d-flex justify-content-end">
                                      <input type="submit" class="btn bg-dark my-2 text-white" value="Inscription">
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
