<?php
session_start();
if (1) {
    //sleep(10);
    //
    $white = array("lowxss", "middlexss", "strongxss","lowjava","middlejava","strongjava","lowcommand","middlecommand","strongcommand");
    if (!in_array($_GET['level'],$white))
    {
        die("Tehlike");
    }
    
    $string= $_SESSION['name']." ".$_GET['level'];
    
    if(!($con = ssh2_connect("10.0.2.5",22))){
        echo "basaramadim";
    } else {
        if(!ssh2_auth_password($con,"deneme","123")){
            echo   "Baglandim ama parola yanlis aga";
        } else {
            if(!($stream = ssh2_exec($con,"pwd"))){
                echo "olmuyor ne yapsam olmuyor bu kacinci";
            }else {
    $stream = ssh2_exec($con,"sh start.sh $string");
    stream_set_blocking($stream,true);
    $a= "localhost:".substr(stream_get_contents($stream),-6);
    echo $a;
    //echo "<script type='text/javascript' language='Javascript'>window.open('');</script>";
    echo "<a href='http://$a'>  click</a>";
}
        }
    }
}

// Berkant DEMİRCİ
