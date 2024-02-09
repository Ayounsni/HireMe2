<x-boot>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
          <a href="/" class="btn bg-primary text-white"><i class="bi bi-backspace"></i> Retour</a>
          <div class="card mt-2 mx-auto p-3 bg-light mb-4">
              <div class="card-body bg-light">
                  
              <div class = "container">
                  <form method="POST" action="">
                      @csrf
                      <div class="controls">
                          <div class="row">
                              <h1 class="mb-2 fs-4 lead text-secondary fw-medium">Contact :</h1>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_name">Prénom<span class="text-danger">*</span></label>
                                      <input id="form_name" type="text" name="prenom" class="form-control" placeholder="Entrer prénom" data-error="Firstname is required.">
                                      @error('prenom')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror                                
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_name">Nom<span class="text-danger">*</span></label>
                                      <input id="form_lastname" type="text" name="nom" class="form-control" placeholder="Entrer nom"  data-error="Lastname is required.">
                                      @error('nom')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_email">Email <span class="text-danger">*</span></label>
                                      <input id="form_email" type="text" name="email" class="form-control" placeholder="Entrer Email"  data-error="Valid email is required.">
                                      @error('email')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_email">Tel <span class="text-danger">*</span></label>
                                      <input id="form_email" type="tel" name="phone" class="form-control" placeholder="Entrer telephone" data-error="Valid email is required.">
                                      @error('phone')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <h1 class="my-2 fs-4 lead text-secondary fw-medium">Service :</h1>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="form_email">Titre <span class="text-danger">*</span></label>
                                      <input  type="text" name="title" class="form-control" placeholder="Entrer titre" >
                                      @error('title')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="form_need">Catégorie <span class="text-danger">*</span></label>
                                      <select id="form_need" name="categorie" class="form-control"  data-error="Please specify your need.">
                                          <option value="" selected disabled>--Choisir Catégorie--</option>
                                          
                                          <option value=""></option>
                                          
                                          
                                      </select>
                                      @error('categorie')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="form_message">Description<span class="text-danger">*</span></label>
                                      <textarea id="form_message" name="description" class="form-control" placeholder="Entrer la description ici." rows="4" ></textarea>
                                      @error('description')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="form_email">Prix en DH <span class="text-danger">*</span></label>
                                      <input  type="text" name="prix" class="form-control" placeholder="Entrer le prix" >
                                      @error('prix')
                                      <span class="text-danger">{{$message}}</span>      
                                      @enderror
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="d-flex justify-content-end">
                                      <input type="submit" class="btn bg-primary my-2 text-white" value="Créer service">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
          </div>
              </div>
      </div>
      </div>
  </div>
    
 
</x-boot>
