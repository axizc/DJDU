<!-- 
Checks the password of a user and either sends them back to the login page or the welcome page. Uses sha256 hashing to ensure security.
-->
<?php
    session_start();
    $users=array();
    $password=array();
     $myfile = fopen("users.txt", "r") or die("Unable to open file!");
     while(!feof($myfile)){
      $f = fgets($myfile);
      list($user,$passworde,$email,$blank)= explode('!88!', $f);
      $users[$user]=$user;
      $password[$user]=$passworde;
      
     };
     print_r($users); 
     $caca=$password[$_POST['user']];
     $gogo=$_POST["password"];
      $passwordddd=$_POST['password'];
   $salt='1Aj38501hfkNB938hau3Gk2947H';
   $userhash= hash('sha256', $salt.$_POST['password']);
     if(in_array($_POST["user"],$users,true)){
       if($caca==$userhash){
          $_SESSION["incorrect"]=""; 
          $you=$_POST['user'];
          $cookie_name = "user";
$cookie_value =$you;
setcookie($cookie_name, $cookie_value, time() + (86400 * 60), "/");
          $_SESSION['user']=$you;
     header("Location:welcome.php");
       }
       else{
          $_SESSION["incorrect"]="Incorrect  password";
        
         header("Location:login.php");
        };
     }
          else{
            echo 'Noo';
       $_SESSION["incorrect"]="Incorrect username ";
          header("Location:login.php");
     };
 ?> 
