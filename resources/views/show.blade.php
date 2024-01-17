<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pokemon - Laravel</title>
    <style>
        @import url('https://fonts.cdnfonts.com/css/pokemon-solid');
        
        body {
            font-family: 'Pokemon Solid', sans-serif;
            /* background: url('../image/Pokemon-Wallpaper-with-Sleeping-Pikachu.png'); */
        }

        .container {
            max-width: 500px;
            position: absolute;
            top: 20%;
            left: 50%;
            margin: -100px 0 0 -175px;
            text-align: center;
        }

        .info {
            font-size: 20px;
            font-weight: 400;
        }

        .form {
            text-align: center;
            padding: 20px;
            .input,
            .button {
                margin: 10px;
                padding: 10px;
            }
        }

        .title{
            color: #ffcc03;
            font-size: 26px;
        }

        button {
            background: #ffcc03;
            font-family: inherit;
            padding: 0.6em 1.3em;
            font-weight: 900;
            font-size: 14px;
            border: 3px solid black;
            border-radius: 0.4em;
            box-shadow: 0.1em 0.1em;
            cursor: pointer;
        }

        button:hover {
            transform: translate(-0.05em, -0.05em);
            box-shadow: 0.15em 0.15em;
        }

        button:active {
            transform: translate(0.05em, 0.05em);
            box-shadow: 0.05em 0.05em;
        }
    </style>
     <script>
        function showLoader() {
            document.getElementById('loader').style.display = 'block';
        }

        function hideLoader() {
            document.getElementById('loader').style.display = 'none';
        }
    </script>
</head>

<body>
    <div class="container">
        
        <div class="form">
            <p class="title">Inserisci l' ID del Pokémon</p>
            <form action="/pokemon" method="POST">
                @csrf
                <input type="text" name="pokemon_id" class="input" required>
                <button type="submit" class="button"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #000000;"></i></button>
            </form>
        </div>

        <div class="info">
            <p class="title">Dati del Pokémon</p>
            @if(isset($pokemonData))
            <p>Id: {{ $pokemonData['id'] }}</p>
            <p>Nome: {{ $pokemonData['name'] }}</p>
            <p>Altezza: {{ $pokemonData['height'] }}</p>
            @else
            <p>{{ $error ?? 'Nessun dato del Pokemon disponibile' }}</p>
            @endif
        </div>
    </div>
</body>

</html>