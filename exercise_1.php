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

        p {
            font-size: 1.5em;
            line-height: 30px;
        }

        a {
            text-decoration: underline;
            font-style: italic;
            color: black;
        }
    </style>
</head>

<body>
    <div>
        <h1>A Month of Changing Weather</h1>
        
        <?php
        $weather = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];

        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had 
        <a href='?color=ecfffd'>{$weather[5]}</a> and 
        <a href='?color=c5eff2'>{$weather[6]}</a>. Then came 
        <a href='?color=FFDF8E'>{$weather[1]}</a> with a few 
        <a href='?color=d3e4f8'>{$weather[2]}</a> and some 
        <a href='?color=566f97'>{$weather[0]}</a>. At least we didn't get any 
        <a href='?color=9dbab7'>{$weather[3]}</a> or 
        <a href='?color=9aa6bc'>{$weather[4]}</a>.</p>";

        $color = isset($_GET['color']) ? preg_replace('/[^a-fA-F0-9]/', '', $_GET['color']) : 'FFFFFF';
        echo "<style>body { background-color: #$color; }</style>";
        ?>

        <h4 style="text-align: center;
        width: 80%;
        position: absolute;
        margin: 0;
        bottom: 5%;
        opacity: 40%; 
        color: blue;
        ">
            click the weather element to change the background color
        </h4>
    </div>

</body>

</html>
