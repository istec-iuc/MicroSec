
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>command2</title>
</head>
<body>
    

<div class="vulnerable_code_area">
    <h2>Hadi ping atalım :)</h2>

    <form name="ping" method="post">
        <p>
            IP adresi ya da domain giriniz:
            <input type="text" name="ip" size="30">
            <input type="submit" name="Submit" value="Submit">
        </p>

    </form>
    
</div>
<?php

if( isset( $_POST[ 'Submit' ]  ) ) {

    $target = $_REQUEST[ 'ip' ];

    $blacklist = array(
        '&&' => '',
        ';' => '',
        '|' => '',
    );

    $target = str_replace( array_keys( $blacklist ), $blacklist, $target );
        
    $cmd = shell_exec( 'ping  -c 4 ' . $target );
    

    echo "<pre>{$cmd}</pre>";
}

?> 

</body>
</html>

