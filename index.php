<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1</title>
    <style>
        html,
        body {
            display: flex;
            margin: 0;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
        }

        div {
            display: inline-block;
            width: 80%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <h1>A Month of Changing Weather</h1>
        <?php
        echo "<style>
            p {
                font-size: 1.5em;
                line-height: 30px;
            }
        </style>";

        $weather = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];
        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had {$weather[5]} and {$weather[6]}. Then came {$weather[1]} with a few {$weather[2]} and some {$weather[0]}. At least we didn't get any {$weather[3]} or {$weather[4]}.</p>";
        ?>
    </div>
</body>

</html>
