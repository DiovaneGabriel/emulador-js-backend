<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <style>
        html,
        body,
        #game {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>
    <div id='game'></div>
</body>

<footer>
    <script type='text/javascript'>
        EJS_player = '#game';
        EJS_core = '{!!$game->console->core!!}';
        EJS_oldCores = true;
        EJS_gameUrl = '/emulatorJs/roms/{!!$game->console->folder."/".$game->file!!}';
        EJS_pathtodata = '/emulatorJs/data/';
        EJS_gameID = {!!$game->id!!};

        EJS_color = "#FFA500";
        EJS_Settings = {!!($game->settings ? $game->settings : ($game->console->settings ? $game->console->settings : "''"))!!};
        // EJS_pathtodata = "https://rawcdn.githack.com/EmulatorJS/EmulatorJS/main/data/";
        EJS_lightgun = false; // Lightgun
        EJS_oldCores = true;
    </script>
    <script src="/emulatorJs/data/loader.js"></script>
</footer>

</html>