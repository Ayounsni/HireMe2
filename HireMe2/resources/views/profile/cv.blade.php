<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    
    <div class="d-flex flex-column border-3 bg-white  border-gray-600 p-3">
        <h1 class="text-center fw-medium fs-3 ">CV</h1>
        <h2 class="fs-5 text-primary my-2">Contact</h2>
        <p class="fw-medium">Nom: <span class="fw-normal">{{$user->chercheur->nom}} {{$user->chercheur->prenom}}</span></p>
        <p class="fw-medium">Telephone:  <span class="fw-normal">{{$user->chercheur->telephone}}</span></p>
        <p class="fw-medium">Email:  <span class="fw-normal">{{$user->email}}</span></p>
        <p class="fw-medium">Adresse:  <span class="fw-normal">{{$user->chercheur->adresse}}</span></p>
        <h2 class="text-center fs-5 border-2 border-blue-300 text-primary mt-3">Expériences Professionnelles</h2>
        @foreach($experiences as $experience)
        <p class="fw-medium mt-3">-Entreprise {{$experience->entreprise}} <span class="fw-light">({{$experience->date_debut}} / {{$experience->date_fin}} )</span></p>
        <p class="text-success">Poste : <span class="text-black fw-normal">{{$experience->poste}} </span></p>
        @endforeach
        <h2 class="text-center fs-5 border-2 text-primary border-blue-300 mt-3">Compétences</h2>
        @foreach($competences as $competence)
        <p class="mt-3">-{{$competence->nom}}</p>
        @endforeach
        <h2 class="text-center fs-5 border-2 text-primary border-blue-300 mt-3"> Cursus Educatifs</h2>
        @foreach($educations as $education)
        <p class="mt-3 ">-Diplome {{$education->diplom}} </p>
        <p class="fw-medium">Etablissement {{$education->etablissement}} <span class=" fw-light ">({{$experience->date_debut}} / {{$experience->date_fin}})</span></p>
        @endforeach
        <h2 class="text-center fs-5 border-2 text-primary border-blue-300 mt-3"> Langues</h2>
        @foreach($langues as $langue)
        <p class="mt-3 fw-medium">-{{$langue->nom}}  <span class="fw-normal">({{$langue->niveau}})</span></p>
        @endforeach
      </div>

</body>
</html>
