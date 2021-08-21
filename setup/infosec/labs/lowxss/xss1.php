<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>xss1</title>
    </head>
    <body>
        <?php
        error_reporting(0);
        if(isset($_POST))
        {
            echo "<h1>Adınızı Giriniz: ".$_POST["isim"]."</h1>";
        }
        ?>
        <form action="" method="post">
            <input type="text" name="isim">
            <input type="submit" name="gonder" value="Selamla">
        </form>
    </body>
</html>
