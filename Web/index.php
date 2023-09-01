<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dex</title>
    <link rel="stylesheet" href="Styles/style.css">
</head>

<body>
    <nav id="navbar">
        <h2>dex</h2>
        <ul id="navlinks">
            <li>home</li>
            <li>about</li>
            <li>contact</li>
            <li>more</li>
        </ul>
    </nav>
    <div id="container">
        <div id="pokemon-list">
            <input type="text" id="search-bar" placeholder="Search Pokemon...">
            <ul>
                <?php
                $pokemons = array("Bulbasaur", "Ivysaur"); // Add more pokemons here
                foreach ($pokemons as $pokemon) {
                    echo '<li onclick="displayPokemonDetails(\'' . $pokemon . '\')">' . $pokemon . '</li>';
                }
                ?>
            </ul>
        </div>
        <div id="pokemon-details">
            <h2 id="pokemon-name">pokemon Name</h2>
            <img id="pokemon-image" src="placeholder.jpg" alt="pokemon Image">
            <p><strong>Classification:</strong> <span id="classification">Mammal</span></p>
            <p><strong>Height:</strong> <span id="height">150 cm</span></p>
            <p><strong>Weight:</strong> <span id="weight">200 kg</span></p>
            <p><strong>Gender:</strong> <span id="gender">Male</span></p>
            <!-- Add more information fields here -->
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>