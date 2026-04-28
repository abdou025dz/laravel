<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
<legend>login information</legend>
<form action="create" method="post">
@csrf
<div>
<label for="nom">nom:</label>
<input type="nom" name="nom" id="nom">
</div>
<div>
<label for="email">nom:</label>
<input type="email" name="email" id="email">
</div>
<div>
<input type="submit" value="send">
<input type="reset" value="clear">
</div>
</form>
</fieldset>
</body>
</html>
