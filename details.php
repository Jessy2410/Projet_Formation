<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details formations</title>
    <link rel="stylesheet" href="styleDetails.css">
</head>
<body>

<?php
    include("navbar.php");
?>

    <div class="container-details">

        <div class="details">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIQTDD7FUwpZ-h9vS9EflnjcKP3_ORFo90lA&s" alt="">
            <div class="info">
                <h2>Titre de la formation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisl eget lorem tincidunt pharetra. Integer posuere orci non facilisis tincidunt.</p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Semaine 1</th>
                    <th>Semaine 2</th>
                    <th>Semaine 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"> 01/01/2024</td>
                    <td><input type="checkbox"> 08/01/2024</td>
                    <td><input type="checkbox"> 15/01/2024</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> 02/01/2024</td>
                    <td><input type="checkbox"> 09/01/2024</td>
                    <td><input type="checkbox"> 16/01/2024</td>
                </tr>
                <tr>
                    <td><input type="checkbox"> 03/01/2024</td>
                    <td><input type="checkbox"> 10/01/2024</td>
                    <td><input type="checkbox"> 17/01/2024</td>
                </tr>
            </tbody>
        </table>

        <div class="cta">
            <button>S'inscrire</button>
        </div>
    </div>
</body>
</html>