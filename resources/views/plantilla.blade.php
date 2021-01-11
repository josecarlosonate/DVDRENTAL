<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DVD</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">INICIO</a>
            <a href="autores">AUTORES</a>
            <a href="films">FILMS</a>
            <a href="lenguajes">LENGUAJES</a>
        </nav>
    </header>
    
    @yield('contenido')

    <footer>Copyright {{ date('Y') }}</footer>

</body>
</html>