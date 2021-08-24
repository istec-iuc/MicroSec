<?php 
 if($_POST){
 session_start();
    
        //$close = $_POST['close'];
       // echo"<script>alert('close window')</script>";

     
        if(!($con = ssh2_connect("10.0.2.5",22))){
                echo "basaramadim";
            } else {
                if(!ssh2_auth_password($con,"deneme","123")){
                    echo   "Baglandim ama parola yanlis aga";
                } else {
                    if(!($stream = ssh2_exec($con,"pwd"))){
                        echo "olmuyor ne yapsam olmuyor bu kacinci  ";
                    }else {
                        $stream = ssh2_exec($con,"sh stop.sh ".$_SESSION['name']);
                        echo " lab kapandi" ;
                             
                        }
                }
 } 
}


?>
