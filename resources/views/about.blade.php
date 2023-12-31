<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FikiAp || About</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl font-bold">Ini halaman about</h1>
    <h3 class="text-xl"> <?=  $name; ?></h3>
    <p class="text-lg"> <?=  $email; ?></p>
    <img src="img/<?=  $image; ?>" alt="<?=  $name; ?>" width="200">
</body>
</html>