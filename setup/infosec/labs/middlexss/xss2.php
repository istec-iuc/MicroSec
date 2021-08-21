<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>xss2</title>
    </head>
    <body>
        <?php
error_reporting(0);
            if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {

                $name = str_replace( '<script>', '', $_GET[ 'name' ] );


                echo "<h1>Adınızı Giriniz: ${name}</h1>";
}

?> 
        <form action="" method="get">
            <input type="text" name="name">
            <input type="submit" name="gonder" value="Selamla">
        </form>
    </body>
</html>
