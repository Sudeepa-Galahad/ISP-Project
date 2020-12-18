<?php

include("config.php") ;

    if(isset($_POST['sigsb'])){

        $errors= array();
        
        
        if(isset($_POST['name']) && strlen(trim($_POST['name'])) < 1){
            $errors[] = 'user name missing';

        }
        if(isset($_POST['ans']) && strlen(trim($_POST['ans'])) < 1){
            $errors[] = 'answer missing';

        }

        if(empty($errors)){

            $name = mysqli_real_escape_string($connection,$_POST['name']);
            $ans = mysqli_real_escape_string($connection,$_POST['ans']);



            $query = "SELECT * FROM recover
            WHERE name = '{$name}'
            AND answer = '{$ans}'
            LIMIT 1";

            $result_set = mysqli_query($connection,$query);

            if ($result_set) {
                if(mysqli_num_rows($result_set) == 1){
                    // valid user
                    //header('Location:Recovery.html');
			?>
			<script type="text/javascript"> alert('Flag is {)~<};s#?epGH+6ux~h='); </script>
                <?php
		}else{
                    // name or password invalid
                    $errors[] = 'Invalid flag';
                }
            }else{
                $errors = 'Database query failed';
            }


        }

        if(isset($errors) && !empty($errors)){
          header('Location:Recovery.php');
        }
    }


 ?>
