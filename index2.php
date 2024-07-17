<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="body">  
    <?php
        
        $complexity = $_POST["complexity"];
        $games = $_POST ["games"];
        $games ++ ;
        $isnormalopen = $_POST ["isnormalopen"];
        $ishardopen = $_POST ["ishardopen"];
        
    ?>
    

    <?php
    $wins = $_POST ["wins"];

    if (isset($_POST ["side"])) {
        $side = $_POST ["side"];

        // $complexity = $_POST ["complexity"];
      //скоротити наступний if щоб не було повторів
        if ($complexity == "easy") {
            $result = rand(0, 1);
        } else if ($complexity == "normal") {
            $result = rand(0, 2);
        } else {
            $result = rand(0, 3);
        }
    
        if ($side == 0) {
            echo ("<h2>Ви вибрали орла</h2>");
        } else {
            echo ("<h2>Ви вибрали решку</h2>");
        }
    
      
    
        //скоротити наступний if щоб не було повторів
        if ($result == 0) {
            echo ("<h2>Випав орел</h2>");
        } else if ($result == 1)  {
            echo ("<h2>Випала решка</h2>");
        } else {
            if ($side == 0) {
                echo ("<h2>Випала решка</h2>");
            } else {
                echo ("<h2>Випав орел</h2>");
            }
        }
    
    
        if ($side == $result) {
            echo ("<h2>Ви вийграли</h2>");
            $wins += 1;
        } else {
            echo ("<h2>Ви програли</h2>");
        }
        echo ($wins);
    }


    

?>

 <form action="<?php if ($games <10) {echo ("index2.php");} else {echo ("index3.php");} ?> " method="post">
        <h2>Вибери сторону монети</h2>
        <input type="hidden" name="complexity" value="<?php echo($complexity)?>">
        <input type="hidden" name="games" value="<?php echo($games)?>">
        <input type="hidden" name="wins" value="<?php echo($wins)?>">
        <input type="hidden" name="isnormalopen" value="<?php echo ($isnormalopen) ?>">
        <input type="hidden" name="ishardopen" value="<?php echo ($ishardopen) ?>"> 
        <select style="margin-bottom: 7px;" class="select" name="side" id="">
            <option value="0">Орел</option>
            <option value="1">Решка</option>
            <input style="display: block; padding: 10px; margin: auto;" class="start_game" type="submit" value="Почати гру">
        </select>
    </form>

</body>
</html>