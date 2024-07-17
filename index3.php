<?php 
    
    $wins = $_POST ["wins"];
    $isnormalopen = $_POST ["isnormalopen"];
    $ishardopen = $_POST ["ishardopen"];
    $complexity = $_POST ["complexity"];
    if ($wins > 5) {
        echo ("Ви вийграли");
        $isnormalopen = true;
        if ($complexity == "normal") {
            $ishardopen = true;
        }
    } else {
        echo ("Ви програли");
    }



    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="index.php" method="post">
        <input type="hidden" name="isnormalopen" value="<?php echo($isnormalopen)?>">
        <input type="hidden" name="ishardopen" value="<?php echo($ishardopen)?>">
        <input type="submit" value="повернутися назад" >
        
    </form>
    
</body>
</html>