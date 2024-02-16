<x-boot>
    @include('profile.partials.nav') 
    <div class=" flex flex-col md:flex-row justify-center gap-5 my-9 relative px-2 ">
        <div class="d-flex flex-column w-full md:w-1/2">
        <div class="card w-100 rounded-2">
            <div class="d-flex justify-content-start align-items-end px-3 rounded-top-2 " style="background-image: url({{asset('image/oui.jpg')}}); background-size: cover; height: 200px; width: 100%;">
                <img src="{{ $user->chercheur->photo ? asset('storage/'.$user->chercheur->photo) : asset('image/profile-img03.jpg') }} " class="w-40 h-40 rounded-full border-4 border-white absolute top-24" alt="logo">
            </div>
            <div class="px-4 d-flex flex-column">
                <h1 class="fs-4 fw-medium mt-14 ">{{$user->chercheur->nom}} {{$user->chercheur->prenom}}</h1>
                <h2 class="mt-1">{{$user->chercheur->poste}}</h2>
                <p class="mt-1 text-secondary">{{$user->chercheur->adresse}}</p>
                <div class="w-75 mb-3 pb-2 px-2 border-1 rounded-3 border-gray-300 mt-2">
                <h2 class="mt-2 fw-medium">À propos</h2>
                <p class="mt-1">{{$user->chercheur->about}}</p>
                </div>
            </div>
        </div>
        <div class="card w-100 mt-3 rounded-2 p-3">
            <div class="d-flex justify-content-end">
            <a href="{{route('invoice')}}">
            <button type="submit" class="text-white mb-2 bg-gray-600 hover:bg-blue-800 focus:ring-4 focus:outline-none
             focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700
              dark:focus:ring-blue-800"> <i class="bi bi-download"></i> Télécharger CV </button></a>
            </div>
            <div class="d-flex flex-column border-3 border-gray-600 p-3">
              <h1 class="text-center fw-medium fs-3 ">CV</h1>
              <h2 class="fs-5 text-primary mb-1">Contact</h2>
              <p class="fw-medium">Nom: <span class="fw-normal">{{$user->chercheur->nom}} {{$user->chercheur->prenom}}</span></p>
              <p class="fw-medium">Telephone:  <span class="fw-normal">{{$user->chercheur->telephone}}</span></p>
              <p class="fw-medium">Email:  <span class="fw-normal">{{$user->email}}</span></p>
              <p class="fw-medium">Adresse:  <span class="fw-normal">{{$user->chercheur->adresse}}</span></p>
              <h2 class="text-center fs-5 border-2 border-blue-300 text-primary mt-3">Expériences Professionnelles</h2>
              @foreach($experiences as $experience)
              <p class="fw-medium mt-2">-Entreprise {{$experience->entreprise}} <span class="fw-light">({{$experience->date_debut}} / {{$experience->date_fin}} )</span></p>
              <p class="text-success">Poste : <span class="text-black fw-normal">{{$experience->poste}} </span></p>
              @endforeach
              <h2 class="text-center fs-5 border-2 text-primary border-blue-300 mt-3">Compétences</h2>
              @foreach($competences as $competence)
              <p class="mt-2">-{{$competence->nom}}</p>
              @endforeach
              <h2 class="text-center fs-5 border-2 text-primary border-blue-300 mt-3"> Cursus Educatifs</h2>
              @foreach($educations as $education)
              <p class="mt-2 ">-Diplome {{$education->diplom}} </p>
              <p class="fw-medium">Etablissement {{$education->etablissement}} <span class=" fw-light ">({{$experience->date_debut}} / {{$experience->date_fin}})</span></p>
              @endforeach
              <h2 class="text-center fs-5 border-2 text-primary border-blue-300 mt-3"> Langues</h2>
              @foreach($langues as $langue)
              <p class="mt-1 fw-medium">-{{$langue->nom}}  <span class="fw-normal">({{$langue->niveau}})</span></p>
              @endforeach
            </div>

        </div>
    </div>
        <div class="card w-full md:w-1/4">
            <h3 class="border-2 rounded-full w-fit fw-semibold mt-4 self-center bg-blue-400 text-white p-3 text-center">Completer Votre CV</h3>
            @if(session('success'))
                <div class="alert self-center alert-primary mt-3 text-center w-75">
                     {{ session('success') }}
                </div>
            @endif
           <a href="{{route('exp')}}"> <h4 class="fs-5 fw-medium text-blue-600 mt-4 px-2">-Expériences Professionnelles  <span class="py-1 px-2 bg-red-700 rounded-full text-white text-center text-xs"><i class="bi bi-plus-lg"></i> </span></h4></a>
           @foreach($experiences as $experience)
           <div class="d-flex gap-1 px-2">
            <p class="mt-2">+ {{$experience->entreprise}} / {{$experience->poste}} </p>
            <form method="POST" action="{{route('deleteExp', $experience)}}">
                @method('DELETE')
                @csrf
            <button type="submit" class="text-red-600 font-medium mt-2 rounded-lg text-sm  text-center"><i class="bi bi-trash3-fill"></i></button>
            </form>
           </div>
           @endforeach
           <a href="{{route('comp')}}"> <h4 class="fs-5 fw-medium text-blue-600 mt-4 px-2">-Compétences  <span class="py-1 px-2 bg-red-700 rounded-full text-white text-center text-xs"><i class="bi bi-plus-lg"></i> </span></h4></a>
           @foreach($competences as $competence)
           <div class="d-flex gap-1 px-3">
            <p class="mt-2">+ {{$competence->nom}}  </p>
            <form method="POST" action="{{route('deleteComp', $competence)}}">
                @method('DELETE')
                @csrf
            <button type="submit" class="text-red-600 font-medium mt-2 rounded-lg text-sm  text-center"><i class="bi bi-trash3-fill"></i></button>
            </form>
           </div>
           @endforeach
           <a href="{{route('educ')}}"><h4 class="fs-5 fw-medium text-blue-600 mt-4 px-2">-Cursus Educatifs  <span class="py-1 px-2 bg-red-700 rounded-full text-white text-center text-xs"><i class="bi bi-plus-lg"></i> </span></h4></a>
           @foreach($educations as $education)
           <div class="d-flex gap-1 px-3">
            <p class="mt-2">+ {{$education->diplom}} / Etablissement {{$education->etablissement}} </p>
            <form method="POST" action="{{route('deleteEduc', $education)}}">
                @method('DELETE')
                @csrf
            <button type="submit" class="text-red-600 font-medium mt-2 rounded-lg text-sm  text-center"><i class="bi bi-trash3-fill"></i></button>
            </form>
           </div>
           @endforeach
          <a href="{{route('lang')}}"> <h4 class="fs-5 fw-medium text-blue-600 mt-4 px-2">-Langues <span class="py-1 px-2 bg-red-700 rounded-full text-white text-center text-xs"><i class="bi bi-plus-lg"></i> </span></h4></a>
          @foreach($langues as $langue)
           <div class="d-flex gap-1 px-3">
            <p class="mt-2 fw-medium ">+ {{$langue->nom}} <span class="fw-normal">({{$langue->niveau}})</span></p>
            <form method="POST" action="{{route('deleteLang', $langue)}}">
                @method('DELETE')
                @csrf
            <button type="submit" class="text-red-600 font-medium mt-2 rounded-lg text-sm  text-center"><i class="bi bi-trash3-fill"></i></button>
            </form>
           </div>
           @endforeach


        </div>

    </div>
   
</x-boot>