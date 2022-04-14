<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>

<body>



    <?php

    spl_autoload_register(function ($class_name) {
        require $class_name . '.php';
    });

    $simonWest = new Realisateur('West', 'Simon', 'Homme', '1961-07-17');
    $dougLiman = new Realisateur('Doug', 'Leman', 'Homme', '1965-07-24');
    $zackSnyder = new Realisateur('Snyder', 'Zack', 'Homme', '1966-03-01');

    $action = new Genre('Action');
    $romance = new Genre('Romance');
    $thriller = new Genre('Trhiller');

    $tombRaider = new Film('Tomb Raider', 2001, 120, 'Synopsis', $simonWest, $action);
    $smith = new Film('Mr & Mrs Smith', 2005, 130, 'Synopsis', $dougLiman, $romance);
    $chaos = new Film('Chaos Walking', 2021, 180, 'Synopsis', $dougLiman, $thriller);
    $spartiate = new Film('Spartiate 300', 2007, 90, 'Synopsis', $zackSnyder, $action);



    $viola = new Role('Viola');
    $roileonidas = new Role('Le roi Leonidas');
    $mrssmith = new Role('Mrs Smith');
    $mrsmith = new Role('Mr Smith');

    $gerardButler = new Acteur('Gerard', 'Butler', 'HOMME', '1969-09-25');
    $daisyRidley = new Acteur('Daisy', 'Ridley', 'FEMME', '1996-09-14');
    $angelinaJolie = new Acteur('Angelina', 'Jolie', 'FEMME', '1977-08-14');
    $bradPitt = new Acteur('Brad', 'Pitt', 'HOMME', '1976-11-16');

    $c1 = new Casting($daisyRidley, $viola, $chaos);
    $c2 = new Casting($gerardButler, $roileonidas, $spartiate);
    $c3 = new Casting($angelinaJolie, $mrssmith, $smith);
    $c4 = new Casting($bradPitt, $mrsmith, $smith);

    ?>
    <h1>Lister les acteurs ayant incarné tel rôle</h1>
    <?php

    $tombRaider->afficherCasting();
    $smith->afficherCasting();
    $chaos->afficherCasting();
    $spartiate->afficherCasting();

    ?>
    <h1>Lister le casting d'un film </h1>
    <?php

    //Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)

    $gerardButler->afficherCasting();
    $daisyRidley->afficherCasting();
    $angelinaJolie->afficherCasting();
    $bradPitt->afficherCasting();

    ?>
    <h1>Lister les films par genre</h1>
    <?php

    // Lister les films par genre (exemple : dans le genre SF il y a X films : Star Wars, Blade Runner, ...)

    $action->afficherGenre();
    $romance->afficherGenre();
    $thriller->afficherGenre();

    ?>
    <h1>Lister la filmographie d'un acteur </h1>
    <?php

    // Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)

    $viola->afficherCasting();
    $roileonidas->afficherCasting();
    $mrssmith->afficherCasting();
    $mrsmith->afficherCasting();

    ?>
    <h1>Lister la filmographie d'un réalisateur</h1>
    <?php

    // Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)

    $simonWest->afficherRea();
    $dougLiman->afficherRea();
    $zackSnyder->afficherRea();

    ?>


</body>

</html>