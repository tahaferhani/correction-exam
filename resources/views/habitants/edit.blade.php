<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un habitant</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            width: 100%;
            max-width: 350px;
            display: flex;
            flex-direction: column;
        }

        form input,
        form select,
        form button {
            width: 100%;
            margin-bottom: 20px;
            height: 40px;
            padding: 0 20px;
        }
    </style>
</head>
<body>
   <form action="/habitants" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{$habitant->id}}">
    <input type="text" placeholder="CIN" name="cin" value="{{$habitant->cin}}">
    <input type="text" placeholder="Nom" name="nom" value="{{$habitant->nom}}">
    <input type="text" placeholder="Prénom" name="prenom" value="{{$habitant->prenom}}">
    <select name="ville_id">
        <option value="" selected disabled>Séléctionner une ville</option>
        @foreach($villes as $ville)
            <option @if($ville->id == $habitant->ville_id) selected @endif value="{{$ville->id}}">{{$ville->nom}} ({{$ville->nombreHabitats}})</option>
        @endforeach
    </select>
    <img width="60" height="60" src="{{url("storage/" . $habitant->photo)}}" alt="Photo de {{$habitant->nom}} {{$habitant->prenom}}">
    <br>
    <input type="file" name="photo">
    <button type="submit">Modifier</button>
   </form>
</body>
</html>
