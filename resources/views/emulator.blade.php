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
        EJS_core = 'n64';
        // EJS_core = 'nes';
        EJS_oldCores = true;
        EJS_gameUrl = '/emulatorJs/roms/N64/SuperSmashBros(USA).z64';
        // EJS_gameUrl = '/emulatorJs/roms/NES/Bomberman.nes';
        EJS_pathtodata = '/emulatorJs/data/';
        EJS_gameID = 1;

        EJS_color = "#FFA500";
        EJS_Settings = {
            defaultControllers: {
                '0': {
                    '0': {
                        'value': '90'
                    },
                    '1': {
                        'value': '83'
                    },
                    '2': {
                        'value': '16'
                    },
                    '3': {
                        'value': '13'
                    },
                    '4': {
                        'value': '38'
                    },
                    '5': {
                        'value': '40'
                    },
                    '6': {
                        'value': '37'
                    },
                    '7': {
                        'value': '39'
                    },
                    '8': {
                        'value': '88'
                    },
                    '9': {
                        'value': '65'
                    },
                    '10': {
                        'value': '81',
                        'value2': '4'
                    }
                },
                '1': {},
                '2': {},
                '3': {}
            }
        }
        // EJS_pathtodata = "https://rawcdn.githack.com/EmulatorJS/EmulatorJS/main/data/";
        EJS_lightgun = false; // Lightgun
        EJS_oldCores = true;
    </script>
    <script src="/emulatorJs/data/loader.js"></script>
</footer>

</html>