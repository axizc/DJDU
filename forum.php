<html>
<!-- 
Users can post forum messages and comment on each other's posts.
-->
<?php 
session_start();
?>
  <head>
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="djduuu7.png">
  <style>
  body{
    text-align:center;
    font-family:Darker Grotesque, sans-serif;
    font-size:20px;
    background-image: linear-gradient(to bottom left,#a3c6ff,#dcb5ff);

  }

  #button{
    padding:5px;
    background-color:transparent;
    border:none;
    font-size: 25px;
    font-family:Darker Grotesque;
  }
p{
  font-size:30px;
}
label{
  padding:4px;
}
ul {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  list-style-type: none;
  margin: -10px;
  overflow: hidden;
  color:#949494;
  background-color:  #000000;
  position:relative;
  opacity:1;
  padding:1%;
}

li {
  float: left;
}

li a {
  position:relative;
  display: block;
  text-align: center;
  color:#949494;
  padding: 14px ;
  text-decoration: none;
}

li a:hover {
  color: #ffffff;
}
div{
  position:relative;
  right:-200px;
}
#qwerty{
  position:absolute;
  height:52.5%;
  width:3%;
  padding:0.5%;
  left:10%;
  opacity:0.7;

}
#qwerty:hover{
  opacity:1;
}
p{
  position:absolute;
  left:50%;
  top:90%;
  color:white;
  padding:0;
}
#userrr{
  margin-left:200px;
}
button{
  border:none;
  background-color:white;
  font-family:Darker Grotesque;
  font-size:20px;
}
.create{
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19);
}
#hello{
  border:1px;
  color:black;
  font-size:20px;
  text-decoration:none;
}
a{
  font-size:20px;
  text-decoration:underline;
  color:black;
}
#post{
  position:static;
  /*width:300px;
   text-overflow: ellipsis; /* will make [...] at the end */
   /* width: 490px; /* change to your preferences */
   /* white-space: nowrap; /* paragraph to one line */
    /*overflow:hidden; /* older browsers */
    /*text-overflow: ellipsis; /* will make [...] at the end */ /* change to your preferences */
    /*white-space: nowrap; /* paragraph to one line */
    margin-left:300px;
    margin-right:300px;
    padding:20px;
    background-color:white;
     box-shadow: 0 15px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19);
    }
    pq{
      font-size:20px;
    }
  </style>
    <title>DJDU BOOK OFFICIAL WEBSITE</title>
  </head>
  <body>

<ul>
<a href="index.php"><img src="djduuu7.png" id='qwerty'></img></a>
<div>
  <li><a href="excerpts.php">Excerpts</a></li>
  <?php 
    if( $_COOKIE['user']!=''){
      echo "<li><a href=\"signout.php\">Log Out</a></li>";
    }
    else{
       echo "<li><a href=\"signup.php\">Sign up</a></li>
  <li><a href=\"login.php\">Login</a></li>";
    }
    ?>
  <li><a href="forum.php">Forum</a></li>
  <li><a href="about.php">About us</a></li>
  <li><a href="art.php">Art</a></li>
  <li><a href="contactus.php">Contact us</a></li>

  <?php
echo "<li id='userrr'><a href=\"welcome.php\">",$_COOKIE['user'],"</a></li>";?>
  </div>
</ul><br/><br/>

<?php
if($_COOKIE['user']==''){
  echo'<h1>Please sign up or login to continue</h1>';
}
else{
 echo '<h1>Welcome to the Forum<h1><pq>Click on the posts to expand them</pq><br/>
 <a href="communityguidelines.php">View our Community Guidelines</a>
<form action="forum.php" method="POST"><br/>
<button type=\'submit\' class="create" value="create" name="submit">Create a post</button>
</form>';
if(isset($_POST['submit'])){
  echo '<form action="save.php" method="POST" enctype="multipart/form-data">
  <textarea rows="8" cols="50" placeholder="Enter Your Message..." name="message" maxlength=408 required ></textarea><br/><br/><button type="submit" class="create">Submit</button></form>
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
</form>
  ';
}
 $users=array();
    $messages=array();
     $myfile = fopen("posts.txt", "r") or die("Unable to open file!");
     while(!feof($myfile)){
      $f = fgets($myfile);
      list($user,$message,$blank,$doubleblank)= explode('!88!', $f);
      $users[$user]=$user;
      if ($user!=''){
      echo '@'.$user.'</br>';
      echo '<pq id="hello" href=\'\'>'.$blank.'</pq><br/>';
      echo '<center id="postes"><form id=post action=foru.php method="POST"><button id="hello" type="submit" name="fullmessage" value="'.$message.'">'.$message.'</pq><br/></center></button></form>';
      }}

};
?>
<?php 
$_SESSION['incorrect']='';
?>
  </body>
</html>
</span>
