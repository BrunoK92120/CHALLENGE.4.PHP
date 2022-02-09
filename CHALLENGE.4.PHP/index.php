<?php
    $movieOfStevenson = [
        'JekyllAndHyde' => ['Michael Caine', 'Cheryl Ladd', 'Joss Ackland.'],
        'TreasureIsland' => ['Robert Newton', 'Bobby Driscoll', 'Basil Sydney.'],
        'Kidnapped' => ['Peter Finch', 'James MacArthur', 'John Laurie.'],
    ];

    foreach($movieOfStevenson as $movieName => $actors){
        echo (' Dans le film' . ' ' . $movieName . ' les principaux acteurs sont : ' );
         

        foreach($actors as $actors){
            echo ($actors . ', ');
        }
    }
    ?>
