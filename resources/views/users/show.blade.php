<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>detail de utilisateur</h1>
    <p><strong>nom : </strong>
    {{ $user['name'] }}</p>

    <p><strong>email : </strong>
    {{ $user['email'] }}</p>

    <a href="/create">creer un utilisateur</a>
</body>
</html>
