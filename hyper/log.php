<?php


/*include("config.php");


$user = $_POST['name'];
$pass = $_POST['pass'];

$query = mysqli_query("select * from user where Username ='".$name."' and Password='".$pass."'");
$execute = mysqli_query($connection, $query);
$num = mysqli_num_rows($execute);

if ($num == 0)
{
    echo 'hello';
    echo '<script>window.location = "lumino/dash.html"</script>';
}
else
{
    exit;
}

if(isset($_POST['Lg_sub']))
{
    if (empty ($user)) //if username field is empty echo below statement
    {
        echo "Enter your Username <br />";
    }
    if (empty ($_REQUEST['pass'])) //if password 1 field is empty echo below statement
    {
        echo "Enter your Password <br />";
    }
}

else
{
    $query = "SELECT * FROM user WHERE $user = Username AND $pass = Password" ;
    $result = mysqli_query($connection,$query);
    if (mysqli_num_rows($result) == 1) 
    {
        echo "query successfull wrote to DB";
    }
    else
    {
        echo"unscccessful login";
    }
}
*/

// include ("config.php");

// if(isset($_POST['Lg_sub']))
//    {
//     $user = mysqli_real_escape_string($connection,$_POST['name']);
//     $pass = mysqli_real_escape_string($connection,$_POST['pass']);

//     if($user != "" && $pass != ""){
//         $password = md5($password);
//         $q = mysqli_query("SELECT count(*) as newU FROM users WHERE Username = '".$user."' AND Password = '".$pass."'");
//         $resul = mysqli_query($connection,$q);
//         $data = mysqli_fetch_array($resul);

//         $count = $row['newU'];
        
//         if($count > 0){
           
//             $_SESSION['user'] = $user;
//            // $_SESSION['pass'] = $pass;
//             header("Location:lumino/dash.html");
//         } else{
//             echo "Invalid Username or Password!!!!";
//         }


//     } else {
//         echo("Please All fields are required");
//     }
// }




?>

<?php

include("config.php") ;

    if(isset($_POST['Lg_sub'])){

        $errors= array();
        
        
        if(isset($_POST['name']) && strlen(trim($_POST['name'])) < 1){
            $errors[] = 'user name missing';

        }
        if(isset($_POST['pass']) && strlen(trim($_POST['pass'])) < 1){
            $errors[] = 'password missing';

        }

        if(empty($errors)){

            $name = mysqli_real_escape_string($connection,$_POST['name']);
            $pass = mysqli_real_escape_string($connection,$_POST['pass']);
            $hashed_password = md5($pass);



            $query = "SELECT * FROM users
            WHERE username = '{$name}'
            AND password = '{$pass}'
            LIMIT 1";

            $result_set = mysqli_query($connection,$query);

            if ($result_set) {
                if(mysqli_num_rows($result_set) == 1){
                    // valid user
                    header('Location:index.html');
                }else{
                    // name or password invalid
                    $errors[] = 'Invalid username / password';
                }
            }else{
                $errors = 'Database query failed';
            }


        }

        if(isset($errors) && !empty($errors)){
          header('Location:login.php');
        }
    }


 ?>