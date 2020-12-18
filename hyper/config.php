<?php

        session_start();
            //variables
        $host = "localhost";
        $uname = "root";
        $password = "";
        $name = "test";

        //connection
            $connection = mysqli_connect($host, $uname, $password, $name );
          
            
            if(!$connection){
                die("Connection failed:" .mysqli_connect_error());
            }else{
                echo "Database Connected";
            }
?>




