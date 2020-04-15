<?php

include("view/header.php");
include("view/footer.php");

use App\Connection;
use App\Run;
use App\Upadate;
use App\Reset;

?>

<html> 
     
    <body>

        <main>
            <h1>Game Over</h1>
            
            <p>Congrats, you've managed to finish the game.</p>
            
        <!--<div id="theCount">
                <h3><?php echo(int $rightAnswer)?><p>correct answers out of 10</p>
            </div> -->
            
            <br>
            
            <p>Do you want try one more time?</p>
        
            <div class="reset">
            <button><a href="word-challenge1.php" <?php $updateList ?>>>Start again.</a></button>
    
        </main>
        
        
    </body>

</html>