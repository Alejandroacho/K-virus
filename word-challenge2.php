<?php
include ('vendor/autoload.php');
include ('header.php');
include ('footer.php');
use App\GetRandomData;
use App\Counter;

$getdata= new GetRandomData();
$data= $getdata->getRandomFirstData();

$id= $data[1];
$nombre=$data[2];
$tipo=$data[3];

$contador= new Counter();
$score= $contador->getScore();

?>

    <main>

        <div id="theCount">
                <span><p><small><?php echo $score;?></small></p></span>
                <span><p><small>/10</small></p></span>
        </div>

        <h1> <?php echo $nombre?> </h1>
        <p>Korean Pop Band or Virus? Choose one.</p>
        <div>
                 <div class="answer"><a href="result.php?type=<?php echo $tipo; ?>&ID=<?php echo $id; ?>&answer=virus"><img src="001-virus.png" width="120px" height="120px" alt="virus"><h3>Virus</h3></a>
                 </div>
                 <div class="answer"><a href="result.php?type=<?php echo $tipo; ?>&ID=<?php echo $id; ?>&answer=kpop"><img src="002-nu-metal-band.png" width="180px" height="180px" alt="Kpop"><h3>Korean Pop Band</h3>
                 </a></div>
            </form>
        </div>


    </main>


