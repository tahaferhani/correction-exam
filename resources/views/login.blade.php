<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Connexion</title>

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
   <form action="/login" method="POST">
    @csrf
    <input type="text" placeholder="Login" name="login">
    <input type="text" placeholder="Mot de passe" name="password">
    <button type="submit">Se connecter</button>

    @error("message")
        <p>{{$message}}</p>
    @enderror
   </form>
</body>
</html>
