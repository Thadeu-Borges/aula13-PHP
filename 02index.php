<!DOCTYPE html>
<html lang="pt">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02-tabuada.php">
        <select name="num">
            <?php
            for ($n = 1; $n <= 10; $n++) {
                echo "<option>$n</option>";
            }
            ?>
        </select>
        <input type="submit" value="Tabuada"/>
    </form>
</div>
</body>
</html>
 