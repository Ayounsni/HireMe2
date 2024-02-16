
<x-boot>
    @include('profile.partials.nav') 
    <div class=" flex flex-col md:flex-row justify-center gap-5 my-9 relative px-2 ">
        <div class="d-flex flex-column w-full md:w-1/2">
        <div class="card w-100 rounded-2">
            <div class="d-flex justify-content-center align-items-end px-3 rounded-top-2 " style="background-image: url({{asset('image/compa.jpg')}}); background-size: cover; height: 200px; width: 100%;">
                <img src="{{ $user->entreprise->logo ? asset('storage/'.$user->entreprise->logo) : asset('image/profile-img03.jpg') }} " class="w-40 h-40 rounded-full border-4 border-white absolute top-24" alt="logo">
            </div>
            <div class="px-4 d-flex flex-column justify-content-center align-items-center">
                <h1 class="fs-4 fw-medium text-center mt-14 ">Entreprise {{$user->entreprise->nom_entreprise}} </h1>
                <h2 class="mt-1">{{$user->entreprise->slogan}}</h2>
                <p class="mt-1 text-secondary">{{$user->entreprise->industrie}}</p>
                <div class="w-75 mb-3 pb-2 px-2 border-1 rounded-3 border-gray-300 mt-2">
                <h2 class="mt-2 fw-medium text-center">Description</h2>
                <p class="mt-1 text-center" >{{$user->entreprise->description}}</p>
                </div>
            </div>
        </div>
        <div class="card w-100 mt-3 rounded-2 p-3 ">
            <h1 class="border-2 rounded-full w-50 fs-5 mb-3  fw-semibold mt-4 self-center bg-blue-600 text-white p-3 text-center">Mes Offres d'emploi</h1>
            @if(session('success'))
            <div class="alert self-center alert-primary mt-3 text-center w-75">
                 {{ session('success') }}
            </div>
            @endif
            <div class="d-flex justify-content-end">
            <a href="{{route('ajoutOffre')}}">
            <button type="submit" class="text-white mb-2 bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none
             focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700
              dark:focus:ring-blue-800"> <i class="bi bi-plus-lg"></i> Ajouter Offre</button></a>
            </div>
            @foreach($offres as $offre)
              <div class="d-flex justify-content-end gap-2"> 
                <form method="POST" action="{{route('deleteOffre', $offre)}}">
                    @method('DELETE')
                    @csrf
                    <button class="bg-red-600 py-1 px-2 rounded-2 text-white"><i class="bi bi-trash3-fill"></i></button>
                </form>
               <a href="{{route('editOffre',$offre->id)}}"><button class="bg-green-600 py-1 px-2 rounded-2 text-white"><i class="bi bi-pencil-square"></i></button></a>
              </div>
              <div class="card mb-4 mt-1 shadow-lg bg-gray-200 w-auto border-none " >
              <div class="row g-0">
                  <div class="col-md-4">
                      <img src="{{ asset('image/comp.jpg') }}" class="img-fluid w-auto h-100 "  alt="image">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                        <h1 class="fs-5 fw-medium text-red-500 text-center mb-3">Entreprise {{$offre->user->entreprise->nom_entreprise}}</h1>
                         <div class="d-flex flex-column flex-md-row justify-content-between">
                             <h5 class="card-title fs-6 fw-bold "><a>{{$offre->titre}}</a></h5>
                           
                         </div> 
                          <p class="card-text text-sm ">{{$offre->description}}</p>
                          <p class="mb-2 fw-medium"><i class="bi bi-boxes"></i> Compétences requises </p>
                          <div class="d-flex gap-2">
                            @php
                            $tags = explode(',',$offre->competence);
                            @endphp
                            @foreach($tags as $tag)
                            <p class="bg-blue-500 text-white p-1 rounded-full">{{ $tag }}</p>
                            @endforeach
                          </div>
                          <hr class="my-2" />

                          <div class="d-flex flex-column flex-md-row justify-content-between">
                              <div class="d-flex flex-column w-50">
                                  <p class="fw-medium"><i class="bi bi-card-checklist"></i> Type du contract  </p>
                                  <p class="text-primary fw-medium">{{$offre->type_contrat}}</p>
                              </div>
                              <div class="d-flex flex-column w-50">
                                 <p class="fw-medium"><i class="bi bi-geo-alt-fill"></i> Emplacement </p>
                                 <p class="text-primary fw-medium">{{$offre->emplacement}}</p>
                 
                              </div>
                          </div>
                       
                
                      </div>
                  </div>
              </div>

        
            </div>
            @endforeach
    

        </div>
    </div>
        <div class="card w-full md:w-1/4">
            <h3 class="border-2 rounded-full w-fit fw-semibold mt-4 self-center bg-blue-400 text-white p-3 text-center">Completer Votre CV</h3>
      
           <a href="{{route('exp')}}"> <h4 class="fs-5 fw-medium text-blue-600 mt-4 px-2">-Expériences Professionnelles  <span class="py-1 px-2 bg-red-700 rounded-full text-white text-center text-xs"><i class="bi bi-plus-lg"></i> </span></h4></a>
          


        </div>

    </div>
   
</x-boot>