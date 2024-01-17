<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <h1>Calc</h1>
    <form method="POST" action= "{{url("/result")}}">
        @csrf
        <label for="number1">Numero 1:</label>
        <input type="text" name="numbero1" required>

        <label for="number2">Numero 2:</label>
        <input type="text" name="numbero2" required>

        <button type="submit">Calcola Somma</button>
    </form>
</body>
</html>
