<!-- 
Saves a forum post to the SQL database
-->
Loading please wait a few seconds...
<?php  
$timestamp = time();
$qwer=str_replace(array("\n", "\r"), '', $_POST['message']);
$thedate=date("F d, Y", $timestamp); 
    session_start();
    $fp = fopen('posts.txt', 'a');//opens file in append 
    function file_prepend ($string, $user, $time, $filename) {

  $fileContent = file_get_contents ($filename);

  file_put_contents ($filename, $user .'!88!'.$string.'!88!'.$time .'!88!'."\n" . $fileContent);
}
file_prepend($qwer,$_COOKIE['user'],$thedate,'posts.txt');
header('location:forum.php')
?>
<?php 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
  
?> 
