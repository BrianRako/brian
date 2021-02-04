<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>propagation</title>

    <style>
        * {
            box-sizing: border-box;
        }

        .calendar {
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            border-left: 1px black solid;
            font-size: 1vw;
        }

        .calendar-title {
            width: 100%;
            font-size: 2em;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            padding: 20px;
            ;
        }

        .day {
            width: calc(100vw / 7.3);
            height: calc(100vw / 7.3);
            border-right: 1px black solid;
            border-bottom: 1px black solid;
        }

        .disabled {
            background-color: lightgray;
        }

        .title {
            font-size: 1.2em;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            padding: 5px;
            overflow: hidden;
        }

        .day:nth-child(1),
        .day:nth-child(2),
        .day:nth-child(3),
        .day:nth-child(4),
        .day:nth-child(5),
        .day:nth-child(6),
        .day:nth-child(7) {
            border-top: 1px black solid;
        }

        .event {
            background: #00a8ff;
            color: white;
            font-size: 0.8em;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            padding: 10px;
            overflow: hidden;
        }
    </style>
</head>

<body id="body">
    <div id="calendar" class="calendar"></div>

    <script src="jeux.js"></script>
</body>

</html>