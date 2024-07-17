<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(^˵◕ω◕˵^)</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php 
       
       $isnormalopen = false;
       $ishardopen = false;

        if (isset($_POST ["isnormalopen"])) {
            $isnormalopen = $_POST ["isnormalopen"];
        }

        if (isset($_POST ["ishardopen"])) {
            $ishardopen = $_POST ["ishardopen"];
        }

       
?>
<body>
    <form action="index2.php" method="post">
        <h1>Вибери рівеень складності</h1>
        <input type="hidden" name="games" value="0">
        <input type="hidden" name="wins" value="0">
        <input type="hidden" name="isnormalopen" value="<?php echo ($isnormalopen) ?>">
        <input type="hidden" name="ishardopen" value="<?php echo ($ishardopen) ?>"> 
        <select name="complexity" id="">
            <option value="easy">easy</option>
            <option value="normal"<?php if ($isnormalopen == false) {echo("disabled");}?>>normal</option>
            <option value="hard" <?php if ($ishardopen == false) {echo("disabled");}?>>hard</option>
        </select>
        <input style="display: block; padding: 10px; margin: auto;" class="start_game" type="submit" value="Почати гру">
    </form>

</body>
</html>