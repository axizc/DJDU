<?php 
 session_start();
     $users=array();
    $password=array();
    $emails=array();
     $myfile = fopen("users.txt", "r") or die("Unable to open file!");
     while(!feof($myfile)){
      $f = fgets($myfile);
      list($user,$passworde,$email,$blank)= explode('!88!', $f);
      $users[$user]=$user;
      $password[$user]=$passworde;
      $emails[$user]=$email;
     };
      $emaile=$_POST['email'];
      $salt='1Aj38501hfkNB938hau3Gk2947Heurjewbjv';
      $emailhash= hash('sha256', $salt.$emaile);
     if(in_array($_POST['user'],$users, true)){
      if($emails[$_POST['user']]==$emailhash){
        $_SESSION['correct']='Check your email for reset instructions';
       $to = "paddi.divakaruni@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: paddi.divakaruni@gmail.com" . "\r\n" .
"CC: padma.divakaruni@yahoo.com";

mail($to,$subject,$txt,$headers);
       # header('location:iforgot.php');
      }
      else{
        $_SESSION['correct']='Your email does not match the username';
        
        header('location:iforgot.php');
      }

     }
     else{
       echo 'no';
       $_SESSION['correct']='Your username is not in our records';
       header('location:iforgot.php');
     }
?>