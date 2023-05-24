<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des abitants</title>
</head>
<body>
    <a href="/habitants/create">Ajouter un habitant</a>
    @foreach($list as $item)
        <ul>
            <li><b>ID : </b> {{$item->id}}</li>
            <li><b>CIN : </b> {{$item->cin}}</li>
            <li><b>Nom complet : </b> {{$item->nom}} {{$item->prenom}}</li>
            <li><b>Ville : </b> {{$item->ville->nom}}</li>
            @if ($item->photo)
                <li>
                    <b>Photo : </b><br>
                    <img width="60" height="60" src="{{url("storage/" . $item->photo)}}" alt="Photo de {{$item->nom}} {{$item->prenom}}">
                </li>
            @endif
            <a href="/habitants/edit/{{$item->id}}">Modifier</a>
            <form action="/habitants/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Supprimer</button>
            </form>
        </ul>
        <hr>
    @endforeach
</body>
</html>
