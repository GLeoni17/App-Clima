<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima</title>
    <!-- https://openweathermap.org/  - OpenWeather (Clima) -->
    <!-- nominatim.openstreetmap.org  - Nominatin (Latitude e Longitude) -->

    <!-- Imports -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

</head>
<body>
    <form>
        <input type="text" id="cidade" placeholder="Nome Cidade">
        <input type="button" value="Enviar" onclick="getCoords($('#cidade').val())">
    </form>
</body>
</html>