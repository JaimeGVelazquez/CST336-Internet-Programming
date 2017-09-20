
<!-- todo: 2 more facts for each team, make loop that selects 3. make site prettier. -->



<?php
                                    
    function randomPic(&$selectedPics){
        return array_pop($selectedPics);
    }
    
    function famousPlayers($team, $top5Warriors, $top5Lakers, $top5Kings){
        
        if($team == 'Lakers'){
            $names = $top5Lakers;
        } else if($team == 'Warriors'){
            $names = $top5Warriors;
        } else {
            $names = $top5Kings;
        }
        
        for($i = 0; $i < count($names); $i++){
            if($i == count($names) - 1){
            echo $names[$i] . ".";
        } else {
            echo $names[$i] . ", ";
            }
        }
    }
    $random = rand(0,2);
    
    $teamPics0 = array("warriors1", "warriors2", "warriors3");
    $teamPics1 = array("lakers1", "lakers2", "lakers3");
    $teamPics2 = array("kings1", "kings2", "kings3");
    
    $top5Warriors = array("Stephen Curry", "Kevin Durant", "Draymond Green", "Klay Thompson", "Andre Iguodala");
    $top5Lakers = array("Shaquille O'Neil", "Kobe Bryant", "Jerry West", "Kareem Abdul-Jabbar", "Magic Johnson");
    $top5Kings = array("Chris Webber", "Vlade Divac", "Mike Bibby", "Peja Stejakovic", "Oscar Robertson");
    
            switch ($random)  {
                case 0: $team = 'Warriors';
                        break;
                case 1: $team = 'Lakers';
                        break;
                case 2: $team = 'Kings';
                        break;
            }
            
            if($random == 0)
            {
                $fact1 = 'In 2016, the Warriors broke the record for the most wins in a regular season with a total of 73 wins and nine losses.';
                $fact2 = 'Originally located in Philadelphia.';
                $fact3 = 'In 2017 the Warriors won their first NBA championship against the Clevelenand Cavaliers in 40 years. ';
                $selectedPics = $teamPics0;
                shuffle($selectedPics);
            } else if ($random == 1){
                $fact1 = 'Hold the record for the longest game winning streak, set during the 1971-1972 season with 33 wins.';
                $fact2 = 'A total of 21 hall of famers have played for the Lakers.';
                $fact3 = 'The Lakers have a total of 16 NBA championship wins.';
                $selectedPics = $teamPics1;
                shuffle($selectedPics);
            } else {
                $fact1 = 'One of the oldest basketball franchises, with its creation in 1923.';
                $fact2 = 'Originated in Rochester, New York as the Rochester Seagrams.';
                $fact3 = 'The Kings hold the record for most relocations out of any NBA team, with a total of 5.';
                $selectedPics = $teamPics2;
                shuffle($selectedPics);
            }
            
?>

<!DOCTYPE html>

<html>
<head>
   <meta charset="utf-8" />
   <title><?= $team ?> Facts!</title>
   <link href="CSS/styles.css" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>
<body>
    <header>
        <h1><?= $team ?></h1>
    </header>
    <div id = "top">
        <figure>
            <img id = "topImage" src='img/<?= randomPic($selectedPics); ?>.jpg' />
        </figure>
    </div>
    <div id = "list">
        <ul>
            <li><?= $fact1 ?></li>
            <li><?= $fact2 ?></li>
            <li><?= $fact3 ?></li>
        </ul>
    </div>
    
    <br>
    
    <p>
        A list of famous players from the <?= $team ?>: <?= famousPlayers($team, $top5Warriors, $top5Lakers, $top5Kings); ?>
    </p>
    
    
    
<footer>
            <hr>
            <img id ="footerPic" src='img/<?= randomPic($selectedPics); ?>.jpg' />
            <p>
                CST336 Internet Programming. 2017&copy; Velazquez <br />
                <strong>Disclaimer: </strong> The information on this page is used for academic purposes only.
            <p>
        </footer>    
</body>
</html>