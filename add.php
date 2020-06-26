<!-- 
Hello driti if you're wondering why there is even an add.php it is just the coding. When you sign up it takes you to add.php so that your data can be saved or if your username is already taken it can go back and tell them that it is already taken. After this page they will be taken to welcome.php
-->
Loading please wait a few seconds...
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
     $passwordddd=$_POST['password'];
     
     echo $passwordddd;
     echo "<br>", hash('sha256', $salt.$paswordddd),"<br/>";
   $salt='1Aj38501hfkNB938hau3Gk2947H';
   $userhash= hash('sha256', $salt.$_POST['password']);
   echo $userhash;
   $emails=$_POST['email'];
   $salt='1Aj38501hfkNB938hau3Gk2947Heurjewbjv';
   $emailhash= hash('sha256', $salt.$emails);
     $caca=$password[$_POST['user']];
     $gogo=$_POST["password"];
     if(in_array($_POST["user"],$users,true )){
       $_SESSION['incorrect']="Your username is already taken";
       header('Location:signup.php');
       echo "noo";
       }
     else{

   
    $fp = fopen('users.txt', 'a');//opens file in append mode  
fwrite($fp, $_POST["user"].'!88!'.$userhash.'!88!'.$emailhash.'!88!'."\n");
fclose($fp);
$you=$_POST['user']; 
$cookie_name = "user";
$cookie_value = $you;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
header('Location:welcome.php');
     };
    ?> 