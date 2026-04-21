<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Creer un nouvelle utilisateur</h1>
    <form action="/users" method="POST">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>

        <button type="submit"> Creer </button>
    </form>


</body>
</html>
