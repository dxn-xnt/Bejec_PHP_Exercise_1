<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div>
        <?php
        $cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];

        $sortedCities = $cities;
        sort($sortedCities);

        $updatedCities = $cities;
        array_push($updatedCities, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');

        $sortedNewCities = $updatedCities;
        sort($sortedNewCities);

        echo "<div class=\"city-list\">
                <h1>Largest Cities</h1><br> 
                <p>";
        foreach ($cities as $city) echo "$city,  ";
        echo "</p>
            </div>
            <div class=\"city-list\">
                <h1>Sorted List</h1><br>
                <ul>";
        foreach ($sortedCities as $city) echo "<li>$city</li>";
        echo "</ul>
            </div>
            <div>
                <h3>Los Angeles, Calcutta, Osaka, Beijing added to the list!</h3>
            </div>

            <div class=\"city-list\">
                <h1>Sorted List with New Added Cities</h1><br> 
                <ul>";
        foreach ($sortedNewCities as $city) echo "<li>$city</li>";
        echo "</ul></div>";
        ?>

    </div>

</body>

</html>
