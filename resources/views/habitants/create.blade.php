<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un habitant</title>

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
    <input type="text" placeholder="CIN" name="cin">
    <input type="text" placeholder="Nom" name="nom">
    <input type="text" placeholder="Prénom" name="prenom">
    <select name="ville_id">
        <option value="" selected disabled>Séléctionner une ville</option>
        @foreach($villes as $ville)
            <option value="{{$ville->id}}">{{$ville->nom}} ({{$ville->nombreHabitats}})</option>
        @endforeach
    </select>
    <input type="file" name="photo">
    <button type="submit">Créer</button>
   </form>
</body>
</html>
