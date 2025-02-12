<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2</title>
    <style>
        html,
        body {
            display: flex;
            margin: 0;
            min-height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            background: #E5D0AC;
        }

        div {
            display: inline-block;
            width: 90%;
            text-align: center;
            margin: 15px 0px;
        }

        p {
            font-size: 1.4em;
            line-height: 30px;
            margin: 5px 0;
        }

        ul {
            text-align: left;
            column-count: 4;
            column-gap: 20px;
            margin: 10px 0;
            font-size: 1.2em;
        }


        h1,
        h3 {
            margin: 0;
            margin-top: 10px;
        }

        .city-list {
            border: 1px solid black;
            border-radius: 10px;
            background: #FEF9E1;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];

        echo "<div class=\"city-list\";><h1>Largest Cities</h1><br> <p>";
        foreach ($cities as $city) echo "$city,  ";
        echo "</p></div>";

        sort($cities);
        echo "<div class=\"city-list\";><h1>Sorted List</h1><br><ul>";
        foreach ($cities as $city) echo "<li>$city</li>";
        echo "</ul></div>";

        array_push($cities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing',);
        echo "<div><h3>Los Angeles, Calcutta, Osaka, Beijing added to the list!</h3></div>";

        sort($cities);
        echo "<div class=\"city-list\";><h1>Sorted List with New Added Cities</h1><br> <ul>";
        foreach ($cities as $city) echo "<li>$city</li>";
        echo "</ul></div>";

        ?>
    </div>

</body>

</html>
